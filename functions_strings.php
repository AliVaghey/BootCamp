<?php

$x = "hello world world";
// echo strlen($x);

//-----------------------------
// echo str_contains($x, 'wo');

//-----------------------------
// $name = readline('please enter you name without number 1 :');
// echo str_contains($name, '1');

//-----------------------------
// echo strpos($x, "world", 7);

//-----------------------------
// echo str_starts_with($x, 'hello');
// echo str_starts_with($x, 'world');

//-----------------------------
// echo str_ends_with($x, 'world');

//----------------------------- Expole and Implode functions
// $url = readline("enter your url: ");
// $url_parts = explode('/', $url);
// $count = count($url_parts);
// echo $url_parts[$count - 1];

// echo "\n\n";

// Implode :
// $imploded_url = implode(' - ', $url_parts);
// echo $imploded_url;

//----------------------------
$slug = readline("enter your slug: ");
$slug = str_replace(['/', '*', '#'], '-', $slug);
echo $slug;

