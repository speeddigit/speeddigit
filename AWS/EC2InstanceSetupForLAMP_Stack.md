```bash
sudo apt update && sudo apt upgrade -y
sudo apt install software-properties-common -y
sudo add-apt-repository ppa:ondrej/php -y
sudo apt update -y
sudo apt install php8.0 libapache2-mod-php8.0 -y
sudo /etc/init.d/apache2 restart
sudo apt update -y
sudo apt install php8.0-fpm libapache2-mod-fcgid -y
sudo a2enmod proxy_fcgi setenvif
sudo service apache2 reload
sudo apt-get install zip unzip php-gd -y

```

```
sudo find -type d -exec chmod 777 {} \;
sudo find -type f -exec chmod 777 {} \;
```



```
# /etc/apache2/sites-available/000-default.conf
<VirtualHost *:80>
        ServerAdmin webmaster@localhost
        DocumentRoot /var/www/hrm

        <Directory /var/www/hrm>
                #Options FollowSymLinks
                AllowOverride All
                Require all granted
        </Directory>
</VirtualHost>

```

```
APP_NAME="Brickland Composite Ltd."
APP_ENV=debug
APP_KEY=base64:gJ9Mgxx1x3JB/wYPDw/X+3zbvwnoCgWyDOuxaKFMmlI=
APP_DEBUG=true
APP_URL=http://sdhrms.com
LOG_CHANNEL=stack
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=hrm
DB_USERNAME=user
DB_PASSWORD=@Password2020

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=465
MAIL_USERNAME=19a94ae0a106df
MAIL_PASSWORD=da105de6c4cb6a
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=support@speeddigit.com
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=AKIA2WM7VX2OKU6YXGES
AWS_SECRET_ACCESS_KEY=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
AWS_DEFAULT_REGION=eu-central-1
AWS_BUCKET=digneyhrm

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

TWILIO_SID=AC815d2169cbb7cab75e622b3d0c4d7294
TWILIO_TOKEN=6d8705289e5e730d4ce16c9d167b059a
TWILIO_FROM=+16463626832

```

```
farhad01671HHH
```



```
sudo apt-get -f install
sudo dpkg -P phpmyadmin  
sudo rm -vf /etc/apache2/conf.d/phpmyadmin.conf
sudo rm -vfR /usr/share/phpmyadmin
sudo service apache2 restart
```



```
SET GLOBAL validate_password.LENGTH = 4;
SET GLOBAL validate_password.policy = 0;
SET GLOBAL validate_password.mixed_case_count = 0;
SET GLOBAL validate_password.number_count = 0;
SET GLOBAL validate_password.special_char_count = 0;
SET GLOBAL validate_password.check_user_name = 0;
ALTER USER 'user'@'localhost' IDENTIFIED BY 'pass';
FLUSH PRIVILEGES;
```



```
wget https://files.phpmyadmin.net/phpMyAdmin/5.1.1/phpMyAdmin-5.1.1-all-languages.zip
unzip phpMyAdmin-5.1.1-all-languages.zip
mv phpMyAdmin-5.1.1-all-languages.zip phpmyadmin
```



### Multiple PHP Project at the same time

```
Listen 81

#NameVirtualHost *:80

<VirtualHost *:80>
        ServerAdmin webmaster@sdhrms.com
        ServerName sdhrms.com
        ServerAlias www.sdhrms.com
        DocumentRoot /var/www/hrm

        <Directory /var/www/hrm>
                #Options FollowSymLinks
                AllowOverride All
                Require all granted
        </Directory>
</VirtualHost>

#NameVirtualHost *:81
<VirtualHost *:81>
        ServerAdmin webmaster@sdhrms.com
        ServerName sdhrms.com
        ServerAlias www.sdhrms.com
        DocumentRoot /var/www/phpmyadmin

        <Directory /var/www/phpmyadmin>
                #Options FollowSymLinks
                AllowOverride All
                Require all granted
        </Directory>
</VirtualHost>

```



