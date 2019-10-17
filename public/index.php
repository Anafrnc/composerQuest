<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload


use App\Wcs\Hello;
use HelloWorld\SayHello;

$hello = new Hello();
echo $hello->talk();
echo "<br>";
echo SayHello::world();