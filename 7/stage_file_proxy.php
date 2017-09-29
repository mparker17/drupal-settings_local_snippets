<?php

// On local, testing, and staging servers, lazy-download images from a shared
// environment.
$conf['stage_file_proxy_origin'] = 'https://user:pass@example.com';
$conf['stage_file_proxy_hotlink'] = TRUE;
#$conf['stage_file_proxy_origin_dir'] = 'sites/example/files';
