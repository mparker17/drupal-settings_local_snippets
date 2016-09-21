<?php

// URLs.
$base_url = 'http://example.dev';

// Site.
$conf['site_mail'] = 'example@example.dev';

// Filesystem.
$conf['file_directory_path'] = 'sites/default/files';
$conf['file_directory_temp'] = '/tmp';

// URLs.
$base_url = 'http://example.dev';

// On local and testing servers, disable caching.
$conf['cache'] = 0;
$conf['cache_lifetime'] = 0;
$conf['block_cache'] = 0;
#$conf['preprocess_css'] = 0;
#$conf['preprocess_js'] = 0;

// Admin theme.
#$conf['admin_theme'] = 'garland';

// Clean URLs.
$conf['clean_url'] = 1;

// On local and testing servers, display all logging and error messages.
$conf['error_level'] = 1;

// On local and testing servers, redirect outgoing e-mails to a log file.
ini_set('sendmail_path', 'tee -a /Applications/MAMP/Library/logs/example.mail.log > /dev/null');
