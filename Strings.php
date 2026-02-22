<?php

// $name = readline('enter your name please: ');
// $last_name = readline('please enter your last name: ');

// echo "hello " . $name . " " . $last_name;

/*
آرایه ای با دو عضو که عضو اول نام کوچک و عوض دوم نام خانوادگی باشد. نام ها باید 
از کاربر گرفته شوند. و پس از دریافت نام و نام خانوادگی باید به اسم کامل فرد سلام شود.
*/

$name['first_name'] = readline('please enter your first name: ');
$name['last_name'] = readline('please enter your last name: ');

echo "Hello " . $name['first_name'] . " " . $name['last_name'];
