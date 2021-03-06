<?php

// One-time script to create 'uber_projects' table

$relPath='../../../pinc/';
include_once($relPath.'base.inc');
include_once($relPath.'dpsql.inc');

// -----------------------------------------------
// Create 'uber_projects' table.

echo "Creating 'uber_projects' table...\n";
dpsql_query("
CREATE TABLE `uber_projects` (
  `up_projectid` INT( 10 ) NOT NULL AUTO_INCREMENT,
  `up_nameofwork` varchar(255) NOT NULL default '',
  `up_topic_id` int(10) default NULL,
  `up_contents_post_id` int(10) default NULL,
  `up_modifieddate` int(20) NOT NULL default '0',
  `up_enabled` tinyint(1) default '1',
  `up_description` text default NULL,
  `d_nameofwork` varchar(255) default NULL,
  `d_authorsname` varchar(255) default NULL,
  `d_language` varchar(255) default NULL ,
  `d_comments` text default NULL,
  `d_special` varchar(20) default NULL ,
  `d_checkedoutby` varchar(25) default NULL,
  `d_scannercredit` tinytext default NULL,
  `d_clearance` text default NULL,
  `d_year` varchar(4) default NULL,
  `d_genre` varchar(50) default NULL,
  `d_difficulty` varchar(20) default NULL,
  `d_image_source` varchar(10) default NULL,
  `d_image_preparer` VARCHAR(25)  default NULL , 
  `d_text_preparer`  VARCHAR(25)  default NULL,
  `d_extra_credits`  TINYTEXT     default NULL,

  PRIMARY KEY  (`up_projectid`)
) TYPE=MyISAM;    
    
") or die("Aborting.");


echo "\nDone!\n";

// vim: sw=4 ts=4 expandtab
?>
