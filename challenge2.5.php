<?php

declare(strict_types=1);

function divide(float $num1, float $num2):float{
    return $num1/$num2;

}

var_dump(divide(4, 2)); // float(2)
var_dump(divide(20, 2)); // float(10)
var_dump(divide(5, 2)); // float(2.5)
var_dump(divide(2.5, 0.5)); // float(5)

// Create a function, divide, that takes two numbers as arguments. The function should return the first number divided by the second number.

?>
