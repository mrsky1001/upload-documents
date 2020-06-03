### Предисловие
во первых удалить все версии php и доп
удалить apache2

первое установить apache2
а после php5.6 

sudo apt-get install python-software-properties
sudo add-apt-repository ppa:ondrej/php
sudo apt-get install php5.6 libapache2-mod-php5.6

sudo apt-get install php5-gd
sudo apt-get install php5.6-gd
sudo apt-get install php5.6-intl
sudo apt-get install php5.6-xsl


### LAMP
$ sudo apt-get update
$ sudo apt-get install mysql-server
$ sudo mysql_secure_installation
$ sudo mysql_install_db

$ sudo service {package_name} status
### Установка Composer...

### Настройка hosts, Apache
sudo mkdir /home/mrsky1001/devel/github/upload-documents
sudo mkdir /home/mrsky1001/devel/github/upload-documents/logs
sudo nano /etc/hosts
127.0.0.1       localhost      upload-docs.loc

### Настройка Apache
sudo nano /etc/apache2/sites-available/upload-docs.conf
/etc/apache2/sites-available/upload-docs.conf         500/500               100%
<VirtualHost *:80>
    <Directory /home/mrsky1001/devel/github/upload-documents>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride None
        Order allow,deny
        allow from all

        Require all granted

    </Directory>
    DocumentRoot "/home/mrsky1001/devel/github/upload-documents/basic/web/"
    ServerName upload-docs.loc
    ErrorLog "/home/mrsky1001/devel/github/upload-documents/logs/error.log"
    CustomLog "/home/mrsky1001/devel/github/upload-documents/logs/access.log" common
</VirtualHost>

sudo ln -s /etc/apache2/sites-available/upload-docs.conf /etc/apache2/sites-enabled/upload-docs.conf
sudo service apache2 restart

nano /home/mrsky1001/devel/github/upload-documents/index.php
### settings after start 
* Если мы запускаете страницу из папки /web то достаточно просто написать в \config\web.php:
'cookieValidationKey' => 'какая-то строка', // ВОТ СЮДА напишите какую-то строку

* nvalidConfigException("The directory is not writable by the Web process: {$this->basePath}")
sudo usermod  -a -G mrsky1001 www-data 
. restart_appache.sh

* composer update

  snap run heroku
Examples:

    snap run heroku --version
    snap run heroku login -i