<?php

$x = [
    34,
    "Ali",
    43.43,
    true,
    null
];

$y = [
    "Ali Vaghey" => "09399412613",
    'Amir' => "93r79w7r9w"
];

$name = readline("what's your name? ");
$phone = readline("what's your phone number? ");
$y[$name] = $phone;

echo $y['amir'];