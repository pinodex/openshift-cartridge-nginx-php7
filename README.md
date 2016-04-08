# OpenShift Nginx PHP 7 Cartridge
Nginx 1.9 with PHP 7.0 on OpenShift.

## Installation

### Web Console
<a href="https://openshift.redhat.com/app/console/application_type/custom?cartridges%5B%5D=http://cartreflect-claytondev.rhcloud.com/github/pinodex/openshift-cartridge-nginx-php7&amp;name=php"><img alt="Run+PHP+7+on+OpenShift" src="https://launch-shifter.rhcloud.com/launch/light/Run%20PHP%207%20on.svg" /></a>

Alternatively, you can use this [cartridge definition](http://cartreflect-claytondev.rhcloud.com/github/pinodex/openshift-cartridge-nginx-php7) on application creation page.


### Command Line
```
rhc app create appname http://cartreflect-claytondev.rhcloud.com/github/pinodex/openshift-cartridge-nginx-php7
```

## Composer
This cartridge supports `composer install` on deploy. **_HOWEVER_**, the support is still experimental and may fail on some projects. It is still recommended to do a `composer install` locally and include the `vendor/` directory on push.

To enable it, uncomment the corresponding lines from `.openshift/action_hooks/deploy`.

The `install_dependencies` function requires the target directory as the argument. It expects `composer.json` to be in that directory. The default directory is `$OPENSHIFT_REPO_DIR` which is also your root repository directory.

## Configuration

### Nginx
Nginx will automatically include `config/nginx.d/*.conf` files. `.conf.erb` files will be parsed and included also.

### PHP-FPM
PHP-FPM will automatically load `config/php.d/*.ini` files. `.ini.erb` files will be parse and included also.

## Website
The web root directory is `www/`. Make changes to your website there, then commit and push.

## Current Versions
* Nginx: 1.9.14
* PHP: 7.0.4