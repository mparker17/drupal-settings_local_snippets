<?php

// Memcache settings.
$conf['cache_class_cache_form'] = 'DrupalDatabaseCache';
$conf['cache_default_class'] = 'MemCacheDrupal';
$conf['memcache_bins'] = array('cache' => 'default');
// Path to the memcache module's 'memcache.inc' file. Default usually fine.
$conf['cache_backends'][] = 'sites/all/modules/contrib/memcache/memcache.inc';
// Hostname:port of the memcache server. Default usually fine.
$conf['memcache_servers'] = array('memcache:11211' => 'default');
// CHANGEME: Set a unique prefix for this Drupal installation.
$conf['memcache_key_prefix'] = "ClientnameSitenameServer";
