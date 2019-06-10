<?php

// URLs.
$base_url = 'http://example.localhost';

// Site.
$conf['site_mail'] = 'example@example.localhost';

// Filesystem.
$conf['file_public_path'] = 'sites/default/files';
$conf['file_private_path'] = '/tmp';
$conf['file_temporary_path'] = '/tmp';

// Don't scan folders that have non-Drupal files with Drupal extensions.
$conf['file_scan_ignore_directories'] = array(
  'node_modules',
  'bower_components',
);

// On local and testing servers, disable caching.
$conf['cache'] = FALSE;
$conf['block_cache'] = FALSE;
$conf['cache_lifetime'] = 0;
$conf['page_cache_maximum_age'] = 0;
#$conf['preprocess_css'] = 0;
#$conf['preprocess_js'] = 0;

// Admin theme.
#$conf['admin_theme'] = 'seven';

// Theme debugging.
#$conf['theme_debug'] = TRUE;

// Clean URLs.
#$conf['clean_url'] = FALSE;

// On local and testing servers, display all logging and error messages.
$conf['error_level'] = 2;

// On local and testing servers, use the default mail system, so we can
// redirect outgoing e-mails to a log file.
$conf['mail_system'] = array('default-system' => 'DefaultMailSystem');
ini_set('sendmail_path', 'tee -a /Applications/MAMP/Library/logs/example.mail.log > /dev/null');
