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
sudo apt-get install zip unzip -y
sudo apt install php8.0-{bz2,curl,intl,mysql,readline,xml,zip} -y

# Composer
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
sudo php composer-setup.php --install-dir=/usr/bin --filename=composer
php -r "unlink('composer-setup.php');"
composer
sudo composer self-update

# Change Permission of /var/www/html
sudo chmod -R 777 /var/www/html
cd /var/www/html
composer create-project laravel/laravel project

# Troubleshoot php8.0-fpm
sudo service php8.0-fpm restart

# MySQL
sudo apt install mysql-server -y


```

