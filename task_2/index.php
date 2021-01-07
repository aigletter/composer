<?php

class Animal
{
    public $name;
    public $type;
    function sayName() {
    	echo "Hello! I'm " . $this->type . '. My name is ' . $this->name . '.';
    }
    
}
$cat = new Animal();
$cat->name = 'Murchik';
$cat->type = 'cat';

$dog = new Animal();
$dog->name = 'Rex';
$dog->type = 'dog';
$dog->sayName();