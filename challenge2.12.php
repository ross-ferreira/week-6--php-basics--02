<?php

declare(strict_types=1);

function timesBy($nums,$numa){
    $times=[];
    foreach($nums as $num){
        $times[]= $num* $numa;
    }
    return $times;
}

var_dump(
    timesBy([2, 3, 4, 5, 6], 10), // [20, 30, 40, 50, 60]
    timesBy([2, 3, 4], 5), // [10, 15, 20]
    timesBy([2, 3, 4, 5, 6, 7], -5), // [-10, -15, -20, -25, -30, -35]
    timesBy([-3, -4, -5, -6], -5), // [15, 20, 25, 30]
);

?>

<!-- Create a function, timesBy, that takes an array of numbers and a number as arguments. Return a new array containing each number in the array multiplied by the value of the second argument. -->

