# drupal7-settings_local_snippets
Snippets to use in a `settings.local.php` file.

Use these to construct a `settings.local.php` file.

Don't forget to add `settings.local.php` to your project's `.gitignore`, and the following snippet to the bottom of your `settings.php` file:

```
/**
 * Include a local settings file if it exists.
 */
$local_settings = dirname(__FILE__) . '/settings.local.php';
if (file_exists($local_settings)) {
  include $local_settings;
}
```
