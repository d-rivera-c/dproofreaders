#!/usr/bin/env bash

# Use single quotes instead of double quotes to make it work with special-character passwords
MYSQL_PASSWORD='dp_password'
MYSQL_DBNAME='dp_db'
MYSQL_DBARCHIVE='dp_archive'
MYSQL_DBUSER='dp_user'

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
    </Directory>
</VirtualHost>
EOF
)
echo "${VHOST}" > /etc/apache2/sites-available/000-default.conf

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

# # restart mysql
sudo service mysql restart
sudo a2enmod rewrite  # enable mod_rewrite
# restart apache
sudo service apache2 restart