<?php

// If your dev site is on Pantheon, see the "Environment" section at
// admin/reports/status/php for the value.

// Settings Drupal will put at the bottom of settings.php upon install.
// If you use Pantheon, $settings['hash_salt'] will be in the environment
// variables, which you can see from admin/reports/status/php on the dev site.
// On Pantheon, $config_directories['sync'] directory will be in settings.php
// already.
$settings['hash_salt'] = '';
$settings['install_profile'] = 'standard';

// PHP settings.
ini_set('date.timezone', 'UTC');

// URLs.
$settings['trusted_host_patterns'] = array(
  '^example\.dev$',
);

// Site.
$config['system.site']['mail'] = 'example@example.dev';

// Filesystem.
$config_directories['sync'] = 'sites/default/config';
$settings['file_public_path'] = 'sites/default/files';
$settings['file_private_path'] = 'sites/default/files/private';
$config['system.file']['path.temporary'] = '/tmp';
$settings['file_chmod_directory'] = 0775;
$settings['file_chmod_file'] = 0664;

// On local and testing servers, disable caching.
$config['system.performance']['cache']['page.max_age'] = 0;
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

// On local and testing servers, display all logging and error messages.
assert_options(ASSERT_ACTIVE, TRUE);
\Drupal\Component\Assertion\Handle::register();
$config['system.logging']['error_level'] = 'verbose';

// Views development settings.
$config['views.settings']['ui.show.master_display'] = TRUE;
$config['views.settings']['ui.advanced_column'] = TRUE;
$config['views.settings']['ui.show.display_embed'] = TRUE;

// Admin theme.
#$config['system.theme']['admin'] = 'seven';

// Local development settings.
#$settings['omit_vary_cookie'] = TRUE;
#$settings['class_loader_auto_detect'] = FALSE;
#$settings['extension_discovery_scan_tests'] = TRUE;
#$settings['rebuild_access'] = TRUE;
#$settings['update_free_access'] = TRUE;
#ini_set('memory_limit', '512M');

// Local development services, and caches.
#$settings['omit_vary_cookie'] = TRUE;
#$settings['class_loader_auto_detect'] = FALSE;
#$settings['extension_discovery_scan_tests'] = TRUE;
#$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';
#$settings['cache']['bins']['render'] = 'cache.backend.null';
#$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
