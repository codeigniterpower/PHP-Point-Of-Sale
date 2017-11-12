# PHP-Point-Of-Sale installation document

###How to Install
-------------------------

1. Create/locate a new mysql database to install php point of sale into
2. Execute the file database/database.sql to create the tables needed
3. unzip and upload PHP Point Of Sale files to web server
4. Copy application/config/database.php.tmpl to application/config/database.php
5. Modify application/config/database.php to connect to your database
6. Go to your point of sale install via the browser
7. LOGIN using: username: admin , password:pointofsale
8. Enjoy

# PHP-POS install detailed process

Using debian, we need some requirements:

* php5, php5-gd
* mysql/mariadb
* apache2/nginx

### installation:

apt-get install mysql-server mysql-client
apt-get install phpmyadmin

apt-get install lighttpd php5-cgi php5-gd php5-mysql php5-xls php5-xmlrcp
apt-get install apache2

As normal user (ejemp systemas):

cd ~;mkdir ~/Devel;cd ~/Devel
git clone https://github.com/codeigniterpower/PHP-Point-Of-Sale.git
ln -s /home/systemas/Devel/PHP-Point-Of-Sale/ /var/www/html/phppos


### installation DB:

```
CREATE USER 'phppos'@'%' IDENTIFIED BY 'passwd';GRANT ALL PRIVILEGES ON *.* TO 'phppos'@'%' IDENTIFIED BY '***' WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
CREATE DATABASE IF NOT EXISTS `phppos`;
GRANT ALL PRIVILEGES ON `phppos`.* TO 'phppos'@'%';
GRANT ALL PRIVILEGES ON `phppos\_%`.* TO 'phppos'@'%';
```

then in directory database connect with new user and run the databas.sql scrip.

`mysql -u phppos -pphppos.1 -h localhost -D phppos < ~/Devel/PHP-Point-Of-Sale/database.sql`

edit file database.php in application/config directory.

correcciones: 
duplicate entry in permission
missing file due installer
update to work with php 5.6 error var with references

