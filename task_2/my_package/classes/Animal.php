<?php

class Animal
{
    public $name;
    public $type;
    function sayName()
    {
    	echo "Hello! I'm " . $this->type . '. My name is ' . $this->name . '.';
    }
    
} 