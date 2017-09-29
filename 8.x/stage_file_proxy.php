<?php

// On local, testing, and staging servers, lazy-download images from a shared
// environment.
$config['stage_file_proxy.settings']['origin'] = 'https://user:pass@example.com';
$config['stage_file_proxy.settings']['hotlink'] = TRUE;
#$config['stage_file_proxy.settings']['origin_dir'] = 'sites/example/files';
