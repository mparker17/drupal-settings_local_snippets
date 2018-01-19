<?php

// Information unique to a particular site, that must remain the same across
// all site instances.
//
// Normally you should put these in `settings.php`; but Pantheon adds these to
// either their servers' environment variables, or to `settings.pantheon.php`,
// neither of which is available on a local development environment.
//
// Look for a value for `$settings['hash_salt']` in the environment variables,
// which you can see from `/admin/reports/status/php` on the dev site.
$settings['hash_salt'] = '';
$settings['install_profile'] = 'standard';
$config_directories['sync'] = 'sites/default/config';
