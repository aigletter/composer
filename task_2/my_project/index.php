<?php

require '../my_package/classes/Animal.php'; 

$cat = new Animal();
$cat->name = 'Murchik';
$cat->type = 'cat';

$dog = new Animal();
$dog->name = 'Rex';
$dog->type = 'dog';
$dog->sayName();