<?php

require_once __DIR__."/../vendor/autoload.php";

use App\FizzBuzz;

$fizzBuzz = new FizzBuzz();
echo $fizzBuzz->execute(3);

