# README

Using this directory assumes you have the following setting in your site's settings.php file:

    $config_directories['active'] = 'sites/default/config/active';
    $config_directories['staging'] = 'sites/default/config/staging';

## Exporting and importing configuration

  1. Export all the site's configuration and place it in this directory.
  2. Run `drush config-import staging` to import the configuration.
