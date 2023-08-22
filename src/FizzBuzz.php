<?php

namespace App;

use ErrorException;

class FizzBuzz
{
    public function execute(int $v): string
    {
        if ($v <= 0)
        {
            throw new ErrorException("Value Error");
        }

        if($v % 15 === 0)
        {
            return "FizzBuzz";
        }

        if($v % 3 === 0)
        {
            return "Fizz";
        }

        if($v % 5 === 0)
        {
            return "Buzz";
        }

        return (string)$v;
    }

}
