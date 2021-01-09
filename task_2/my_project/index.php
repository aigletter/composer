<?php

require 'vendor/autoload.php';
use andrey_naidyonov\my_package\Animal;

$cat = new Animal();
$cat->name = 'Murchik';
$cat->type = 'cat';

$dog = new Animal();
$dog->name = 'Rex';
$dog->type = 'dog';
$dog->sayName();