# Installation guide

## Git
[Install Git](http://git-scm.com/book/en/v2/Getting-Started-Installing-Git), did you really think something will happen without it ?

## Composer
Download [composer](https://getcomposer.org/doc/00-intro.md) by running `curl -sS https://getcomposer.org/installer | php`

To access it by typing `composer` instead of `php composer.phar`, place it in global path `sudo mv composer.phar /usr/local/bin/composer`. If necessary, create `/usr/local/bin` yourself.

## Environment
Follow Homestead Laravel's up to date [installation instructions](http://laravel.com/docs/master/homestead).

### VirtualBox
[Donwload VirtualBox](https://www.virtualbox.org/wiki/Downloads) and install.

### Vagrant
[Download Vagrant](http://www.vagrantup.com/downloads.html), install and add the Homestead box `vagrant box add laravel/homestead`

### Homestead
Follow laravel's up to date [installation instructions](http://laravel.com/docs/master/homestead) or :

1. Download package through composer `composer global require "laravel/homestead=~2.0"`
2. Add Homestead to PATH variable `touch ~/.bash_profile; open ~/.bash_profile`
3. Make it global `export PATH=$PATH:~/.composer/vendor/bin`
4. Restart the console `source ~/.bash_profile`
5. Init Homestead `homestead init`
6. Configure Homestead `homestead edit` ([example](https://github.com/v2corptechnology/configurations/blob/master/Romain/Homestead.yaml))
7. Add `192.168.10.10   sneefr.dev` to `/etc/host`
https://forge.besnappy.com/laravel-forge#databases-1263

- Clone project
- Run composer update
- Run npm install
- Run bower install
- Build your own .env file based on .env.example
