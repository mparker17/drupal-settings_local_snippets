<?php

// PHP settings.
ini_set('date.timezone', 'UTC');

// Filesystem.
$settings['file_public_path'] = 'sites/default/files';
$settings['file_private_path'] = '/tmp';

// On local and testing servers, disable caching.
$config['system.performance']['cache']['page.max_age'] = 0;
#$config['system.performance']['css']['preprocess'] = FALSE;
#$config['system.performance']['css']['preprocess'] = FALSE;
#$settings['omit_vary_cookie'] = TRUE;
#$settings['class_loader_auto_detect'] = FALSE;

// On local and testing servers, display all logging and error messages.
assert_options(ASSERT_ACTIVE, TRUE);
\Drupal\Component\Assertion\Handle::register();
$config['system.logging']['error_level'] = 'verbose';

// Local development services and caches.
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';
#$settings['cache']['bins']['render'] = 'cache.backend.null';
#$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';

// Admin theme.
#$config['system.theme']['admin'] = 'seven';

// Development module / theme visibility.
#$settings['extension_discovery_scan_tests'] = TRUE;

// Default file/folder modes.
#$settings['file_chmod_directory'] = 0775;
#$settings['file_chmod_file'] = 0664;
