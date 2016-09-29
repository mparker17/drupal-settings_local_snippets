<?php
// Set default colour to #6A5ACD at:
// admin/config/development/environment-indicator/list/default_environment/edit

// Environment indicator module.
$conf['environment_indicator_overwrite'] = TRUE;
$conf['environment_indicator_overwritten_name'] = php_uname('n');
$conf['environment_indicator_overwritten_color'] = '#FF00FF';

// Environment indicator module.
$conf['environment_indicator_overwrite'] = TRUE;
$conf['environment_indicator_overwritten_name'] = 'testing';
$conf['environment_indicator_overwritten_color'] = '#32CD32';

// Environment indicator module.
$conf['environment_indicator_overwrite'] = TRUE;
$conf['environment_indicator_overwritten_name'] = 'staging';
$conf['environment_indicator_overwritten_color'] = '#ff8000';

// Environment indicator module.
$conf['environment_indicator_overwrite'] = TRUE;
$conf['environment_indicator_overwritten_name'] = 'live';
$conf['environment_indicator_overwritten_color'] = '#8B0000';

//
// Pantheon settings.php snippet:
//

// Environment indicator module.
if (isset($_SERVER['PANTHEON_ENVIRONMENT'])) {
  $conf['environment_indicator_overwrite'] = TRUE;
  $conf['environment_indicator_overwritten_name'] = $_SERVER['PANTHEON_ENVIRONMENT'];

  if ($_SERVER['PANTHEON_ENVIRONMENT'] === 'dev') {
    $conf['environment_indicator_overwritten_color'] = '#32CD32';
  }
  elseif ($_SERVER['PANTHEON_ENVIRONMENT'] === 'test') {
    $conf['environment_indicator_overwritten_color'] = '#ff8000';
  }
  elseif ($_SERVER['PANTHEON_ENVIRONMENT'] === 'live') {
    $conf['environment_indicator_overwritten_color'] = '#8B0000';
  }
}
