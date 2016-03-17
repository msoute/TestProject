<?php
require "../vendor/autoload.php";

use Sander\TestProject\Greeter;

$greeter = new Greeter("Renske");

echo $greeter->greet();
