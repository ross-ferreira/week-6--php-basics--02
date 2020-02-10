<?php

declare(strict_types=1);

function average5($num1,$num2,$num3,$num4,$num5):float{
    $tot = func_num_args();
    return ($num1+$num2+$num3+$num4+$num5)/$tot;
}

var_dump(average5(1, 2, 3, 4, 5)); // float(3)

// Create a function, average5, that takes five numbers as arguments. The function should return the average of the numbers.

?>