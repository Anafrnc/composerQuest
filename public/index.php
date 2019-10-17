<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload


use App\Wcs\Hello;
use App\Wcs\SayHello;

$hello = new Hello();
echo $hello->talk();
echo "<br>";
echo SayHello::world();