<?php

$x = 3;

echo '$x = ' . $x . ' and this variable is an integer' ;
echo "\n"; // to go to the naxt line

$x = 40.3;
echo '$x = ' . $x . ' and this variable is a float' ;
echo "\n"; // to go to the naxt line

$x = [3 , 4 , 5.3, 5.6, 4e5, 'ali'];
// This gives us an error
// echo $x;
print_r($x);

// this give us an error.
// echo $y;

