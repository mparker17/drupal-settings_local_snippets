<?php

// APC (Advanced PHP Cache) settings.
$conf['cache_class_cache'] = 'DrupalAPCCache';
$conf['cache_class_cache_bootstrap'] = 'DrupalAPCCache';
// Path to the APC module's 'drupal_apc_cache.inc' file. Default usually fine.
$conf['cache_backends'][] = 'sites/all/modules/contrib/apc/drupal_apc_cache.inc';
