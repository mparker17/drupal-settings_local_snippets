<?php

// Varnish settings.
$conf['cache'] = TRUE;
$conf['cache_class_cache_page'] = 'VarnishCache';
$conf['page_cache_invoke_hooks'] = FALSE;
$conf['reverse_proxy'] = TRUE;
// Path to the varnish module's 'varnish.cache.inc' file. Default usually fine.
$conf['cache_backends'][] = 'sites/all/modules/contrib/varnish/varnish.cache.inc';
// Hostname of the varnish server. Default usually fine.
$conf['reverse_proxy_addresses'] = array('varnish');
// Hostname:port of the varnish server. Default usually fine.
$conf['varnish_control_terminal'] = 'varnish:6082';
// Version of varnish. Default usually fine.
$conf['varnish_version'] = 3;
// CHANGEME: Set to the control key in '/etc/varnish/secret'.
$conf['varnish_control_key'] = 'uuiduuid-uuid-uuid-uuid-uuiduuiduuid';
