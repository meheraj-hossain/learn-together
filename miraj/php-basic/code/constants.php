<?php

//constants
//we use define() function to create a constant
define("MaxSize", 100);

echo MaxSize;
echo "<br>";
echo constant("MaxSize");
echo "</br>";

//interface One
//{
//    const TEXT = "This is from Interface";
//}
//
//class Two
//{
//    const TEXT = "This is from class";
//}
//
//echo Two::TEXT;
//echo "</br>";
//echo One::TEXT;
//
//define("t", "TEXT");
//var_dump(constant('One::'.t));
//var_dump(constant('Two::'.t));

const text         = "This is a ";
const extendedText = text . ' Text';
echo text;
echo "</br>";
echo extendedText;