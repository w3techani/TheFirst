Install Apache2 In Ubuntu 20.04

1) sudo apt update
2) sudo apt install apache2


sudo mkdir -p /var/www/d1/public_html
sudo mkdir -p /var/www/d2/public_html
sudo mkdir -p /var/www/d3/public_html
sudo mkdir -p /var/www/d4/public_html
sudo mkdir -p /var/www/d5/public_html
sudo mkdir -p /var/www/d6/public_html
sudo mkdir -p /var/www/d7/public_html
sudo mkdir -p /var/www/d8/public_html
sudo mkdir -p /var/www/d9/public_html
sudo mkdir -p /var/www/d10/public_html
sudo mkdir -p /var/www/d11/public_html

vvelocity.com


1) FIRST VirtualHost 

vim /etc/apache2/sites-available/d1.com.conf


<VirtualHost *:80>
    ServerName d1.vvelocity.com
    ServerAlias www.d1.vvelocity.com
    ServerAdmin webmaster@d1.vvelocity.com
    DocumentRoot /var/www/d1/public_html

    <Directory /var/www/d1/public_html>
        Options -Indexes +FollowSymLinks
        AllowOverride All
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/d1.com-error.log
    CustomLog ${APACHE_LOG_DIR}/d1.com-access.log combined
</VirtualHost>




2) SECOND VirtualHost 

vim /etc/apache2/sites-available/d2.com.conf


<VirtualHost *:80>
    ServerName d2.vvelocity.com
    ServerAlias www.d2.vvelocity.com
    ServerAdmin webmaster@d2.vvelocity.com
    DocumentRoot /var/www/d2/public_html

    <Directory /var/www/d2/public_html>
        Options -Indexes +FollowSymLinks
        AllowOverride All
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/d2.com-error.log
    CustomLog ${APACHE_LOG_DIR}/d2.com-access.log combined
</VirtualHost>



3) THIRD VirtualHost 

vim /etc/apache2/sites-available/d3.com.conf


<VirtualHost *:80>
    ServerName d3.vvelocity.com
    ServerAlias www.d3.vvelocity.com
    ServerAdmin webmaster@d3.vvelocity.com
    DocumentRoot /var/www/d3/public_html

    <Directory /var/www/d3/public_html>
        Options -Indexes +FollowSymLinks
        AllowOverride All
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/d3.com-error.log
    CustomLog ${APACHE_LOG_DIR}/d3.com-access.log combined
</VirtualHost>




4) FOURTH VirtualHost 

vim /etc/apache2/sites-available/d4.com.conf


<VirtualHost *:80>
    ServerName d4.vvelocity.com
    ServerAlias www.d4.vvelocity.com
    ServerAdmin webmaster@d4.vvelocity.com
    DocumentRoot /var/www/d4/public_html

    <Directory /var/www/d4/public_html>
        Options -Indexes +FollowSymLinks
        AllowOverride All
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/d4.com-error.log
    CustomLog ${APACHE_LOG_DIR}/d4.com-access.log combined
</VirtualHost>





5) FIFTH VirtualHost 

vim /etc/apache2/sites-available/d5.com.conf


<VirtualHost *:80>
    ServerName d5.vvelocity.com
    ServerAlias www.d5.vvelocity.com
    ServerAdmin webmaster@d5.vvelocity.com
    DocumentRoot /var/www/d5/public_html

    <Directory /var/www/d5/public_html>
        Options -Indexes +FollowSymLinks
        AllowOverride All
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/d5.com-error.log
    CustomLog ${APACHE_LOG_DIR}/d5.com-access.log combined
</VirtualHost>



6) SIXTH VirtualHost 

vim /etc/apache2/sites-available/d6.com.conf


<VirtualHost *:80>
    ServerName d6.vvelocity.com
    ServerAlias www.d6.vvelocity.com
    ServerAdmin webmaster@d6.vvelocity.com
    DocumentRoot /var/www/d6/public_html

    <Directory /var/www/d6/public_html>
        Options -Indexes +FollowSymLinks
        AllowOverride All
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/d6.com-error.log
    CustomLog ${APACHE_LOG_DIR}/d6.com-access.log combined
</VirtualHost>




7) SEVENTH VirtualHost 

vim /etc/apache2/sites-available/d7.com.conf


<VirtualHost *:80>
    ServerName d7.vvelocity.com
    ServerAlias www.d7.vvelocity.com
    ServerAdmin webmaster@d7.vvelocity.com
    DocumentRoot /var/www/d7/public_html

    <Directory /var/www/d7/public_html>
        Options -Indexes +FollowSymLinks
        AllowOverride All
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/d7.com-error.log
    CustomLog ${APACHE_LOG_DIR}/d7.com-access.log combined
</VirtualHost>



8) EIGHT VirtualHost 

vim /etc/apache2/sites-available/d8.com.conf


<VirtualHost *:80>
    ServerName d8.vvelocity.com
    ServerAlias www.d8.vvelocity.com
    ServerAdmin webmaster@d8.vvelocity.com
    DocumentRoot /var/www/d8/public_html

    <Directory /var/www/d8/public_html>
        Options -Indexes +FollowSymLinks
        AllowOverride All
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/d8.com-error.log
    CustomLog ${APACHE_LOG_DIR}/d8.com-access.log combined
</VirtualHost>




9) NINE VirtualHost 

vim /etc/apache2/sites-available/d9.com.conf


<VirtualHost *:80>
    ServerName d9.vvelocity.com
    ServerAlias www.d9.vvelocity.com
    ServerAdmin webmaster@d9.vvelocity.com
    DocumentRoot /var/www/d9/public_html

    <Directory /var/www/d9/public_html>
        Options -Indexes +FollowSymLinks
        AllowOverride All
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/d9.com-error.log
    CustomLog ${APACHE_LOG_DIR}/d9.com-access.log combined
</VirtualHost>




10) TENTH VirtualHost 

vim /etc/apache2/sites-available/d10.com.conf


<VirtualHost *:80>
    ServerName d10.vvelocity.com
    ServerAlias www.d10.vvelocity.com
    ServerAdmin webmaster@d10.vvelocity.com
    DocumentRoot /var/www/d10/public_html

    <Directory /var/www/d10/public_html>
        Options -Indexes +FollowSymLinks
        AllowOverride All
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/d10.com-error.log
    CustomLog ${APACHE_LOG_DIR}/d10.com-access.log combined
</VirtualHost>




11) ELEVEN VirtualHost 

vim /etc/apache2/sites-available/d11.com.conf


<VirtualHost *:80>
    ServerName d11.vvelocity.com
    ServerAlias www.d11.vvelocity.com
    ServerAdmin webmaster@d11.vvelocity.com
    DocumentRoot /var/www/d11/public_html

    <Directory /var/www/d11/public_html>
        Options -Indexes +FollowSymLinks
        AllowOverride All
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/d11.com-error.log
    CustomLog ${APACHE_LOG_DIR}/d11.com-access.log combined
</VirtualHost>




12) TWELVE VirtualHost 

vim /etc/apache2/sites-available/d12.com.conf


<VirtualHost *:80>
    ServerName d12.vvelocity.com
    ServerAlias www.d12.vvelocity.com
    ServerAdmin webmaster@d12.vvelocity.com
    DocumentRoot /var/www/d12/public_html

    <Directory /var/www/d12/public_html>
        Options -Indexes +FollowSymLinks
        AllowOverride All
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/d12.com-error.log
    CustomLog ${APACHE_LOG_DIR}/d12.com-access.log combined
</VirtualHost>































sudo chown -R www-data: /var/www/demo1.com


sudo a2ensite d1.com
sudo a2ensite d2.com
sudo a2ensite d3.com
sudo a2ensite d4.com
sudo a2ensite d5.com
sudo a2ensite d6.com
sudo a2ensite d7.com
sudo a2ensite d8.com
sudo a2ensite d9.com
sudo a2ensite d10.com
sudo a2ensite d11.com

sudo a2dissite 000-default.conf
sudo a2dissite 000-default-le-ssl.conf


sudo apachectl configtest

sudo systemctl restart apache2






sudo apt install software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo apt update
sudo apt install -y php7.4




sudo apt install php7.4-json php7.4-xsl php7.4-common php7.4-mysql php7.4-xml php7.4-xmlrpc php7.4-curl php7.4-gd php7.4-imagick php7.4-cli php7.4-dev php7.4-bcmath php7.4-imap php7.4-mbstring php7.4-opcache php7.4-soap php7.4-zip php7.4-intl -y


sudo apt install certbot python3-certbot-apache


sudo certbot --apache


sudo systemctl restart apache2

