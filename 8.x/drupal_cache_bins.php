<?php

// Use null cache backends for the dynamic page cache and render cache. Note
// that you must explicitly create the `cache.backend.null` service in a
// `[development.]services.yml` file before these lines will work.
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
$settings['cache']['bins']['render'] = 'cache.backend.null';
