<?php

/*
آرایه ای تعریف کنید که سه عضو به دلخواه داشته باشد. و بعد از تعریف عضو دوم آرایه
را حذف کنید. با دستور
unset();
*/

$array = ['Aria', 'mina', 'sahar'];
unset($array[1]);

$second_array = [ $array[0], $array[2] ];
print_r($second_array);