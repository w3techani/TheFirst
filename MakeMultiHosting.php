Install Apache2 In Ubuntu 20.04

1) sudo apt update
2) sudo apt install apache2


sudo mkdir -p /var/www/demo1/public_html
sudo mkdir -p /var/www/demo2/public_html
sudo mkdir -p /var/www/demo3/public_html

1) FIRST VirtualHost 

vim /etc/apache2/sites-available/demo1.com.conf


<VirtualHost *:80>
    ServerName demo1.w3techsolution.com
    ServerAlias www.demo1.w3techsolution.com
    ServerAdmin webmaster@demo1.w3techsolution.com
    DocumentRoot /var/www/demo1/public_html

    <Directory /var/www/demo1/public_html>
        Options -Indexes +FollowSymLinks
        AllowOverride All
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/demo1.com-error.log
    CustomLog ${APACHE_LOG_DIR}/demo1.com-access.log combined
</VirtualHost>




2) SECOND VirtualHost 

vim /etc/apache2/sites-available/demo2.com.conf


<VirtualHost *:80>
    ServerName demo2.w3techsolution.com
    ServerAlias www.demo2.w3techsolution.com
    ServerAdmin webmaster@demo2.w3techsolution.com
    DocumentRoot /var/www/demo2/public_html

    <Directory /var/www/demo2/public_html>
        Options -Indexes +FollowSymLinks
        AllowOverride All
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/demo2.com-error.log
    CustomLog ${APACHE_LOG_DIR}/demo2.com-access.log combined
</VirtualHost>



3) THIRD VirtualHost 

vim /etc/apache2/sites-available/demo3.com.conf


<VirtualHost *:80>
    ServerName demo3.w3techsolution.com
    ServerAlias www.demo3.w3techsolution.com
    ServerAdmin webmaster@demo3.w3techsolution.com
    DocumentRoot /var/www/demo3/public_html

    <Directory /var/www/demo1/public_html>
        Options -Indexes +FollowSymLinks
        AllowOverride All
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/demo3.com-error.log
    CustomLog ${APACHE_LOG_DIR}/demo3.com-access.log combined
</VirtualHost>

sudo chown -R www-data: /var/www/demo1.com


sudo a2ensite demo1.com
sudo a2ensite demo2.com
sudo a2ensite demo3.com

sudo apachectl configtest

sudo systemctl restart apache2






sudo apt install software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo apt update
sudo apt install -y php7.4




sudo apt install php7.4-json php7.4-xsl php7.4-common php7.4-mysql php7.4-xml php7.4-xmlrpc php7.4-curl php7.4-gd php7.4-imagick php7.4-cli php7.4-dev php7.4-bcmath php7.4-imap php7.4-mbstring php7.4-opcache php7.4-soap php7.4-zip php7.4-intl -y



sudo apt install certbot python3-certbot-apache

sudo certbot --apache -d demo3.w3techsolution.com -d www.demo3.w3techsolution.com