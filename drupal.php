<?php

// Filesystem.
$conf['file_public_path'] = 'sites/default/files';
$conf['file_private_path'] = '/tmp';
$conf['file_temporary_path'] = '/tmp';

// URLs.
$base_url = 'http://example.dev';

// On local and testing servers, disable caching.
$conf['cache'] = FALSE;
$conf['block_cache'] = FALSE;
$conf['cache_lifetime'] = 0;
$conf['page_cache_maximum_age'] = 0;
#$conf['preprocess_css'] = 0;
#$conf['preprocess_js'] = 0;

// On local and testing servers, display all logging and error messages.
$conf['error_level'] = 2;

// On local and testing servers, use the default mail system, so we can
// redirect outgoing e-mails to a log file.
$conf['mail_system'] = array('default-system' => 'DefaultMailSystem');
ini_set('sendmail_path', 'tee -a /Applications/MAMP/Library/logs/example.mail.log > /dev/null');
