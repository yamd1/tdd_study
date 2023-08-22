<?php

use PHPUnit\Framework\TestCase;
use App\Input\HogeRequest;
use App\Output\HogeResponse;
use App\Services\HogeService;

final class HogeServiceTest extends TestCase
{
    public static function dataFactory(array $inputData, string $outputData)
    {
        $input = new HogeRequest();
        $output = new HogeResponse();

        $input->setId($inputData["id"]);
        $input->setName($inputData["name"]);

        $output->setMessage($outputData);

        return array($input, $output);
    }

    public static function inputClassDataProvider()
    {
        return [
            "case1" => self::dataFactory(array("id" => 1, "name" => "田中"), "こんにちは田中"),
            "case2" => self::dataFactory(array("id" => 2, "name" => "高橋"), "こんにちは高橋")
        ];
    }

    /**
     * @test
     * @dataProvider inputClassDataProvider
     */
    public function test_inputClassTest(HogeRequest $input, HogeResponse $output)
    {
        $service = new HogeService();
        $result = $service->inputClass($input);

        $this->assertEquals($output->getMessage(), $result->getMessage());
    }
}

