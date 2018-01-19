<?php

// URLs.
$settings['trusted_host_patterns'] = array(
  '^example\.localhost$',
);

// Filesystem.
$settings['file_public_path'] = 'sites/default/files';
$settings['file_private_path'] = 'sites/default/files/private';
$config['system.file']['path.temporary'] = '/tmp';
$settings['file_chmod_directory'] = 0775;
$settings['file_chmod_file'] = 0664;

// Local and testing servers - admin tools.
#$settings['rebuild_access'] = TRUE;
#$settings['update_free_access'] = TRUE;

// Local and testing servers - class autoloading, Drupal extension discovery.
#$settings['class_loader_auto_detect'] = FALSE;
#$settings['extension_discovery_scan_tests'] = TRUE;
#$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';

// Local and testing servers - errors, assertions.
#$config['system.logging']['error_level'] = 'verbose';
#assert_options(ASSERT_ACTIVE, TRUE);
#\Drupal\Component\Assertion\Handle::register();

// Local and testing servers - render caching, resource processing, admin theme.
#$config['system.performance']['cache']['page.enabled'] = FALSE;
#$config['system.performance']['cache']['page.max_age'] = 0;
#$config['system.performance']['cache']['page.omit_vary_cookie'] = TRUE;
#$config['system.performance']['css']['preprocess'] = FALSE;
#$config['system.performance']['js']['preprocess'] = FALSE;
#$config['system.theme']['admin'] = 'seven';

// Local and testing servers - mail and mail system.
$config['system.site']['mail'] = 'example@example.localhost';
$config['system.mail']['interface.default'] = 'php_mail';
ini_set('sendmail_path', 'tee -a /Applications/MAMP/Library/logs/example.mail.log > /dev/null');

// Views module.
$config['views.settings']['ui.show.master_display'] = TRUE;
$config['views.settings']['ui.advanced_column'] = TRUE;
$config['views.settings']['ui.show.display_embed'] = TRUE;
