<?php
/**
 * Created by PhpStorm.
 * User: adil
 * Date: 5/10/16
 * Time: 5:13 PM
 */


require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Marvel\SayHello;

echo SayHello::world();

