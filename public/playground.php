<?php

use Illuminate\Support\Collection;

require __DIR__.'/../vendor/autoload.php';

$numbers =  new Collection([
   1, 2, 3, 4, 5, 6, 7, 8, 9, 10
]);

$evenNumbers = $numbers->filter(fn($number) => $number % 2 === 0);
var_dump($evenNumbers);


// php public/playground.php