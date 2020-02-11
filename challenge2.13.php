<?php

declare(strict_types=1);

function largest($array){
    return max($array);

}

var_dump(
    largest([2, 4, 6, 4, 7, 5]), // int(7)
    largest([-2, 4, 6, 4, 2, -7, 5]), // int(6)
    largest([-2, -4, -4, -7, -5]), // int(-2)
);

// Create a function, largest, that takes an array of numbers. Return the largest number.

?>