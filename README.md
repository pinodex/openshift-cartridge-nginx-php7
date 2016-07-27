# OpenShift Nginx PHP 7 Cartridge
Nginx 1.9 with PHP 7.0 on OpenShift.

* Nginx: 1.11.2
* PHP: 7.0.9
* Composer: 1.2.0

## Installation

### Web Console
<a href="https://openshift.redhat.com/app/console/application_type/custom?cartridges%5B%5D=http://cartreflect-claytondev.rhcloud.com/github/pinodex/openshift-cartridge-nginx-php7&amp;name=php"><img alt="Run+PHP+7+on+OpenShift" src="https://launch-shifter.rhcloud.com/launch/light/Run%20PHP%207%20on.svg" /></a>

Alternatively, you can use this [cartridge definition](http://cartreflect-claytondev.rhcloud.com/github/pinodex/openshift-cartridge-nginx-php7) on application creation page.


### Command Line
```
rhc app create appname http://cartreflect-claytondev.rhcloud.com/github/pinodex/openshift-cartridge-nginx-php7
```

## Updates
You can update the binaries from the cartridge without reinstalling. To check for updates, SSH to your app and run this command:

```
update
```
Make sure to have your backup just in case some things went wrong.

## Composer
This cartridge supports Composer right out of the box.

To enable `composer install` on deploy, uncomment this line from `.openshift/action_hooks/deploy`:

```
#cd $OPENSHIFT_REPO_DIR; composer install
```

## Configuration

### Nginx
Nginx will automatically include `config/nginx.d/*.conf` files. `.conf.erb` files will be parsed and included also.

### PHP-FPM
PHP-FPM will automatically load `config/php.d/*.ini` files. `.ini.erb` files will be parsed and included also.

## Website
The web root directory is `www/`. Make changes to your website there, then commit and push.

## Scripts
This cartridge comes with different scripts for easy management of your app inside SSH.

* `version` - Get the version of the cartridge and the binaries.
* `service` - A psuedo `/usr/sbin/service` to start and stop services. Example:
    * `service php-fpm stop`
    * `service nginx stop`
    * `service nginx configtest`
* `build_config` - Parses config templates to actual config file. Can be used after editing `*.erb` config files.
* `update` - Allows automatic update of the cartridge binaries.
    * `update check` - Check for updates
    * `update install` - Install updates
    * `update rollback` - Rollback to previous version after update`
