<?php

/**
 * @file
 * Drupal site-specific configuration file.
 */

// Database.
$databases['default']['default'] = array(
  'driver' => 'mysql',
  'database' => 'drupal',
  'username' => 'drupal',
  'password' => 'supersecure',
  'host' => '10.0.1.65',
);

$config_directories = array();

// General settings.
$settings['hash_salt'] = '';
$settings['update_free_access'] = FALSE;

// Proxy settings.
# $settings['proxy_server'] = '';
# $settings['proxy_port'] = 8080;
# $settings['proxy_username'] = '';
# $settings['proxy_password'] = '';
# $settings['proxy_user_agent'] = '';
# $settings['proxy_exceptions'] = array('127.0.0.1', 'localhost');
# $settings['reverse_proxy'] = TRUE;
# $settings['reverse_proxy_addresses'] = array('a.b.c.d', ...);
# $settings['reverse_proxy_header'] = 'HTTP_X_CLUSTER_CLIENT_IP';

// Caching settings.
# $settings['omit_vary_cookie'] = TRUE;

// Class loader.
/*
if ($settings['hash_salt']) {
  $apc_loader = new \Symfony\Component\ClassLoader\ApcClassLoader('drupal.' . $settings['hash_salt'], $class_loader);
  $class_loader->unregister();
  $apc_loader->register();
  $class_loader = $apc_loader;
}
*/

// File system settings.
# $settings['allow_authorize_operations'] = FALSE;
# $settings['file_chmod_directory'] = 0775;
# $settings['file_chmod_file'] = 0664;
# $settings['file_public_path'] = 'sites/default/files';
# $settings['file_private_path'] = '';

// Session settings.
# $settings['session_write_interval'] = 180;

// String overrides.
# $settings['locale_custom_strings_en'][''] = array(
#   'forum'      => 'Discussion board',
#   '@count min' => '@count minutes',
# );

// Custom theme settings.
# $settings['maintenance_theme'] = 'bartik';

// Base URL.
# $base_url = 'http://www.example.com';  // NO trailing slash!

// PHP Settings.
# ini_set('pcre.backtrack_limit', 200000);
# ini_set('pcre.recursion_limit', 200000);

// Active configuration settings.
# $settings['bootstrap_config_storage'] = array('Drupal\Core\Config\BootstrapConfigStorageFactory', 'getFileStorage');

// Config overrides.
# $config['system.site']['name'] = 'My Drupal site';
# $config['system.theme']['default'] = 'stark';
# $config['user.settings']['anonymous'] = 'Visitor';

// Fast 404 configuration.
$config['system.performance']['fast_404']['exclude_paths'] = '/\/(?:styles)\//';
$config['system.performance']['fast_404']['paths'] = '/\.(?:txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp)$/i';
$config['system.performance']['fast_404']['html'] = '<!DOCTYPE html><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL "@path" was not found on this server.</p></body></html>';

// Load services definition file.
$settings['container_yamls'][] = __DIR__ . '/services.yml';

// Local settings files.
if (file_exists(__DIR__ . '/settings.local.php')) {
  include __DIR__ . '/settings.local.php';
}
