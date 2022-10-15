<?php

require_once '../vendor/autoload.php';
use App\Hello;

$will = new Hello;
echo $will->talk();
