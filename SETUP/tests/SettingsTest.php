<?php

class SettingsTest extends PHPUnit_Framework_TestCase
{
    private $TEST_USERNAME = 'SettingsTest_php';
    private $PREFIX = 'STU_';
    private $NONEXISTENT_USERNAME = 'SettingsTestUser';

    private $cleanup = FALSE;

    protected function setUp()
    {
        // Attempt to load our test user, if it exists don't create it
        $sql = "SELECT username FROM users WHERE username = '$this->TEST_USERNAME'";
        $result = mysqli_query(DPDatabase::get_connection(), $sql);
        $row = mysqli_fetch_assoc($result);
        if(!$row)
        {
            $sql = "
                INSERT INTO users
                SET id = '$this->TEST_USERNAME',
                    real_name = '$this->TEST_USERNAME',
                    username = '$this->TEST_USERNAME',
                    email = '$this->TEST_USERNAME@localhost',
                    manager = 'no',
                    postprocessor = 'no',
                    sitemanager = 'no',
                    active = 0
            ";
            $result = mysqli_query(DPDatabase::get_connection(), $sql)
                or die("Unable to create test user");
        }
        else
        {
            mysqli_free_result($result);
        }

        // Now create the usersettings record
        $sql = sprintf("
            INSERT INTO usersettings
            SET username='%s', setting = '%ssetting', value = 'blah'
        ", $this->TEST_USERNAME, $this->PREFIX);
        $result = mysqli_query(DPDatabase::get_connection(), $sql)
            or die("Unable to create test usersetting");
    }

    protected function tearDown()
    {
        $sql = sprintf("
            DELETE FROM usersettings
            WHERE username='%s' AND setting like '%s%%'
        ", $this->TEST_USERNAME, $this->PREFIX);
        mysqli_query(DPDatabase::get_connection(), $sql);

        $sql = "
            DELETE FROM users
            WHERE id = '$this->TEST_USERNAME'
        ";
        $result = mysqli_query(DPDatabase::get_connection(), $sql);
    }

    public function testExisting()
    {
        $settings = new Settings($this->TEST_USERNAME);
        $this->assertGreaterThan(0, $settings->settings_count());
    }

    public function testNonexisting()
    {
        $settings = new Settings($this->NONEXISTENT_USERNAME);
        $this->assertEquals(0, $settings->settings_count());
    }

    public function testSetTrue()
    {
        $settings = new Settings($this->TEST_USERNAME);
        $settings->set_true($this->PREFIX . "boolean_true");

        $settings = new Settings($this->TEST_USERNAME);
        $this->assertTrue(
            $settings->get_boolean($this->PREFIX . "boolean_true"));
    }

    public function testSetFalse()
    {
        $settings = new Settings($this->TEST_USERNAME);
        $settings->set_false($this->PREFIX . "boolean_false");

        $settings = new Settings($this->TEST_USERNAME);
        $this->assertFalse(
            $settings->get_boolean($this->PREFIX . "boolean_false"));
    }

    public function testSetSingleValue()
    {
        $settings = new Settings($this->TEST_USERNAME);
        $settings->set_value($this->PREFIX . "single_value", "single");

        $settings = new Settings($this->TEST_USERNAME);
        $this->assertEquals(
            $settings->get_value($this->PREFIX . "single_value"), "single");
    }

    public function testSetSingleValueDefault()
    {
        $settings = new Settings($this->TEST_USERNAME);
        $this->assertEquals(
            $settings->get_value($this->PREFIX . "nonexistent_value", "default"), "default");
    }

    public function testSetSingleValueAgain()
    {
        $settings = new Settings($this->TEST_USERNAME);
        $settings->set_value($this->PREFIX . "single_value", "single1");
        $settings->set_value($this->PREFIX . "single_value", "single2");

        $settings = new Settings($this->TEST_USERNAME);
        $this->assertEquals(
            $settings->get_value($this->PREFIX . "single_value"), "single2");
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testSetUnsettableValue()
    {
        $settings = new Settings($this->TEST_USERNAME);
        $settings->set_true("sitemanager");
    }

    public function testAddMultivaluedSetting()
    {
        $settings = new Settings($this->TEST_USERNAME);
        $settings->add_value($this->PREFIX . "multi_value", "value1");
        $settings->add_value($this->PREFIX . "multi_value", "value2");

        $values = $settings->get_values($this->PREFIX . "multi_value");
        $this->assertEquals(2, count($values));
        $this->assertContains("value1", $values);
        $this->assertContains("value2", $values);
    }

    public function testRemoveMultivaluedSetting()
    {
        $settings = new Settings($this->TEST_USERNAME);
        $settings->add_value($this->PREFIX . "multi_value", "value1");
        $settings->add_value($this->PREFIX . "multi_value", "value2");
        $settings->remove_value($this->PREFIX . "multi_value", "value1");

        $values = $settings->get_values($this->PREFIX . "multi_value");
        $this->assertEquals(1, count($values));
        $this->assertContains("value2", $values);
    }

    public function testGetMultivaluedSettingAsSingle()
    {
        // Note: calling get_value() on a multi-valued setting use to result
        // in a RuntimeException being thrown, but commit 68ecf5 changed that.

        $settings = new Settings($this->TEST_USERNAME);
        $settings->add_value($this->PREFIX . "multi_value", "value1");
        $settings->add_value($this->PREFIX . "multi_value", "value2");

        $settings->get_value($this->PREFIX . "multi_value");
    }

    public function testSetMultivaluedSettingAsSingle()
    {
        $settings = new Settings($this->TEST_USERNAME);
        $settings->add_value($this->PREFIX . "multi_value", "value1");
        $settings->add_value($this->PREFIX . "multi_value", "value2");

        $settings->set_value($this->PREFIX . "multi_value", "value3");
        $this->assertEquals(
            $settings->get_value($this->PREFIX . "multi_value"), "value3");
    }

    public function testGetUsernamesWithSetting()
    {
        // Ensure no one has this setting already
        $usernames = Settings::get_users_with_setting(
            $this->PREFIX . "specific_setting");
        $this->assertEquals(0, count($usernames));

        // Add a user with this setting and confirm there is only one
        $settings = new Settings($this->TEST_USERNAME);
        $settings->add_value($this->PREFIX . "specific_setting", "value1");

        $usernames = Settings::get_users_with_setting(
            $this->PREFIX . "specific_setting");
        $this->assertEquals(1, count($usernames));

        // Add a second setting with a different value and confirm there is
        // still only one user with this setting, despite having multiple
        // values.
        $settings->add_value($this->PREFIX . "specific_setting", "value2");
        $usernames = Settings::get_users_with_setting(
            $this->PREFIX . "specific_setting");
        $this->assertEquals(1, count($usernames));

        // Get a list querying for a specific setting and value
        $usernames = Settings::get_users_with_setting(
            $this->PREFIX . "specific_setting", "value2");
        $this->assertEquals(1, count($usernames));
    }
}
