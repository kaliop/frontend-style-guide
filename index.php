<?php
/**
 * @file Render a Kirby page
 *
 * THIS FILE IS UNOFFICIAL AND NOT A PART OF KIRBY'S CODEBASE
 * For official distributions, see:
 * - https://github.com/getkirby/starterkit
 * - https://github.com/getkirby/plainkit
 */

require_once __dir__ . '/vendor/autoload.php';

// fix root dir
$kirby = kirby();
$kirby->roots->index = __dir__;
// only used in tests but let's fix it anyway
$kirby->roots->kirby = __dir__ . '/vendor/getkirby/kirby';
$kirby->roots->assets = __dir__ . '/assets';

// render
echo $kirby->launch();
