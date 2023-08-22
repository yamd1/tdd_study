<?php 

use PHPUnit\Framework\TestCase;
use App\FizzBuzz;

final class FizzBuzzTest extends TestCase
{

    // 入力値を設定するメソッド
    public static function fizzBuzzDataProvider() 
    {
        return [
            "number 1"  => [1, "1"],
            "number 2"  => [2, "2"],
            "number 3"  => [3, "Fizz"],
            "number 4"  => [4, "4"],
            "number 5"  => [5, "Buzz"],
            "number 6"  => [6, "Fizz"],
            "number 10" => [10, "Buzz"],
            "number 15" => [15, "FizzBuzz"],
            "number 30" => [30, "FizzBuzz"],
        ];
    }

    /**
     * @test
     * @dataProvider fizzBuzzDataProvider
     */
    public function successFizzBuzzTest(int $input, string $expect): void
    {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->execute($input);    

        $this->assertEquals($expect, $result);
    }


    // 例外値を生成するメソッド
    public static function failFizzBuzzDataProvider() 
    {
        return [
            "number -1" => [-1],
            "number 0"  => [0],
        ];
    }

    /**
     * @test
     * @dataProvider failFizzBuzzDataProvider
     */
    public function failFizzBuzzTest(int $input): void
    {
        $this->expectException(ErrorException::class);

        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->execute($input);    
    }
}


