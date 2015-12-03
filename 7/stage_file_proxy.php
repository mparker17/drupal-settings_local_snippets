<?php

// On local, testing, and staging servers, lazy-download images from production.
$conf['stage_file_proxy_origin'] = 'http://live.example.com';
$conf['stage_file_proxy_use_imagecache_root'] = TRUE;
