<?php
/**
 * @version 0.0.1
 */
/*
Plugin Name: WP Granular Demo
Plugin URI: https://github.com/goldencomrades/wp-granular-demo
Description: Get a new banana for your split.
Author: Golden Comrades
Version: 0.0.1
Author URI: https://github.com/goldencomrades
*/

require_once __DIR__.'/vendor/autoload.php';

use GoldenComrades\WpGranularDemo\App;

$app = new App();

$app->run();
