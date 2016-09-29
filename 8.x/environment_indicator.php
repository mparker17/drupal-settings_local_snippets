<?php

// Environment indicator module.
$config['environment_indicator.settings']['git'] = TRUE;
$config['environment_indicator.indicator']['name'] = php_uname('n');
$config['environment_indicator.indicator']['bg_color'] = '#FF00FF';

// Environment indicator module.
$config['environment_indicator.indicator']['name'] = 'testing';
$config['environment_indicator.indicator']['bg_color'] = '#32CD32';

// Environment indicator module.
$config['environment_indicator.indicator']['name'] = 'staging';
$config['environment_indicator.indicator']['bg_color'] = '#ff8000';

// Environment indicator module.
$config['environment_indicator.indicator']['name'] = 'live';
$config['environment_indicator.indicator']['bg_color'] = '#8B0000';

//
// Pantheon settings.php snippet:
//

// Environment indicator module.
if (isset($_SERVER['PANTHEON_ENVIRONMENT'])) {
  $config['environment_indicator.indicator']['name'] = $_SERVER['PANTHEON_ENVIRONMENT'];

  if ($_SERVER['PANTHEON_ENVIRONMENT'] === 'dev') {
    $config['environment_indicator.indicator']['bg_color'] = '#32CD32';
  }
  elseif ($_SERVER['PANTHEON_ENVIRONMENT'] === 'test') {
    $config['environment_indicator.indicator']['bg_color'] = '#ff8000';
  }
  elseif ($_SERVER['PANTHEON_ENVIRONMENT'] === 'live') {
    $config['environment_indicator.indicator']['bg_color'] = '#8B0000';
  }
}
