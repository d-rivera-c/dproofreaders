#!/usr/bin/env bash

# Use single quotes instead of double quotes to make it work with special-character passwords
MYSQL_PASSWORD='dp_password'
MYSQL_DBNAME='dp_db'
MYSQL_DBARCHIVE='dp_archive'
MYSQL_DBUSER='dp_user'
FORUMS_DBNAME='dp_forum'

# # update / upgrade
# echo -e "\n--- Update and upgrade ubuntu packages ---\n"
# sudo apt -y update
# sudo apt -y upgrade

# install apache and php 7
echo -e "\n--- Install apache and PHP ---\n"
sudo apt install -y apache2
sudo apt install -y php libapache2-mod-php

# setup hosts file
VHOST=$(cat <<EOF
<IfModule dir_module>
    DirectoryIndex index.php default.php index.html default.html
</IfModule>

<VirtualHost *:80>
    ServerAdmin webmaster@localhost
    DocumentRoot "/var/www/html"

    <Directory "/var/www/html">
        AllowOverride All
        Require all granted

        php_admin_value sendmail_path "/usr/local/bin/catchmail -f admin@pgdp-dev.com  --smtp-ip 192.168.33.10"
    </Directory>
</VirtualHost>
EOF
)
echo "${VHOST}" > /etc/apache2/sites-available/000-default.conf
sudo rm /var/www/html/index.html
echo "<?php phpinfo(); ?>" > /var/www/html/index.php

echo -e "\n--- Install php mods ---\n"
sudo a2enmod rewrite                    # enable mod_rewrite
sudo apt-get install -y php7.0-gd       # install gd
sudo apt-get install -y php-xml         # install xml for phpbb
sudo apt-get install -y gettext
#sudo apt-get install -y yaz            # install yaz
sudo service apache2 restart

# create folder structure
echo -e "\n--- Create project and folder structure, run configuration ---\n"
# #sudo mkdir /var/www/html/c
cd /var/www/html
c/SETUP/configure c/configuration.sh c/


# install mysql and give password to installer
sudo debconf-set-selections <<< "mysql-server mysql-server/root_password password $MYSQL_PASSWORD"
sudo debconf-set-selections <<< "mysql-server mysql-server/root_password_again password $MYSQL_PASSWORD"
sudo apt install -y mysql-server
sudo apt install -y php-mysql

# set up mysql db
echo -e "\n--- Setting up our MySQL user and db ---\n"
mysql -uroot -p$MYSQL_PASSWORD -e "CREATE DATABASE $MYSQL_DBNAME CHARACTER SET LATIN1"
mysql -uroot -p$MYSQL_PASSWORD -e "GRANT ALL ON $MYSQL_DBNAME.* TO $MYSQL_DBUSER@localhost IDENTIFIED BY '$MYSQL_PASSWORD'"
mysql -uroot -p$MYSQL_PASSWORD -e "CREATE DATABASE $MYSQL_DBARCHIVE CHARACTER SET LATIN1"
mysql -uroot -p$MYSQL_PASSWORD -e "GRANT ALL ON $MYSQL_DBARCHIVE.* TO $MYSQL_DBUSER@localhost IDENTIFIED BY '$MYSQL_PASSWORD'"

echo -e "\n--- Populate database ---\n"
cd c/SETUP
php -f install_db.php


echo -e "\n--- Install phpBB ---\n"
mysql -uroot -p$MYSQL_PASSWORD -e "CREATE DATABASE $FORUMS_DBNAME DEFAULT CHARSET=utf8 COLLATE=utf8_bin"
mysql -uroot -p$MYSQL_PASSWORD -e "GRANT ALL ON $FORUMS_DBNAME.* TO $MYSQL_DBUSER@localhost IDENTIFIED BY '$MYSQL_PASSWORD'"
cd /var/www/html/
sudo wget https://www.phpbb.com/files/release/phpBB-3.2.0.zip
sudo apt-get install unzip -y
sudo unzip phpBB-3.2.0.zip
sudo rm phpBB-3.2.0.zip
cd phpBB3 && sudo chown -R www-data:www-data cache files store config.php images/avatars/upload/ images/avatars/gallery/ images/ranks/ images/smilies/


# # restart mysql
sudo service mysql restart
# restart apache
sudo service apache2 restart


# install mailcatcher
echo -e "\n--- Install mailcatcher ---\n"
sudo apt-get install build-essential libsqlite3-dev ruby-dev -y
sudo gem install mailcatcher
sudo mailcatcher --ip=192.168.33.10

## POST STEPS ##
# install phpbb manually in 192.168.33.10
# change PHPBB_TABLE_PREFIX in pinc/site_vars.php to dp_forum.phpbb
# sudo vi phpBB3/config/default/container/parameters.yml -> core.disable_super_globals: false
# remove phpBB3/cache/* except index and htacess