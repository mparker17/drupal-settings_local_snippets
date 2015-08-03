<?php

// Filesystem.
$conf['file_public_path'] = 'sites/default/files';
$conf['file_private_path'] = '/tmp';
$conf['file_temporary_path'] = '/tmp';

// URLs.
$base_url = 'http://example.dev';

// Disable caching on local and testing servers.
$conf['cache'] = FALSE;
$conf['block_cache'] = FALSE;
$conf['cache_lifetime'] = 0;
$conf['page_cache_maximum_age'] = 0;
#$conf['preprocess_css'] = 0;
#$conf['preprocess_js'] = 0;

// Always display all logging and error messages locally.
$conf['error_level'] = 2;

// Redirect e-mails to a log file.
ini_set('sendmail_path', 'tee -a /Applications/MAMP/Library/logs/example.mail.log > /dev/null');
