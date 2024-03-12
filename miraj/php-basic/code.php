<?php

//constants
//we use define() function to create a constant
define("MaxSize", 100);

echo MaxSize;
echo "<br>";
echo constant("MaxSize");

interface One
{
    const TEXT = "This is from Interface";
}

class Two
{
    const TEXT = "This is from class";
}

define("t", "TEXT");
var_dump(constant('One::'.t));
var_dump(constant('Two::'.t));