<?php

$x = [
    34,
    "Ali",
    43.43,
    true,
    null
];

print_r($x);

echo "hello $x[1]";

$y = []; //an empty array
$y[] = readline('enter your input : ');

print_r($y);

//آرایه های انجمنی
$y = [
    'Ali' => 123,
    'Shirin' => 341,
    'amir' => "ali",
    [
        4,
        5
    ]
];

print_r($y);

echo $y['Ali']; // output: 123

echo $y[0][1];// output: 5,

$y['Ali'] = null;
unset($y['Ali']);
print_r($y);
