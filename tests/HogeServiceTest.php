<?php

use PHPUnit\Framework\TestCase;
use App\Input\HogeRequest;
use App\Output\HogeResponse;
use App\Services\HogeService;

final class HogeServiceTest extends TestCase
{
    public static function inputClassDataProvider()
    {
        return [
            "case1" => [
                new HogeRequest(1, "田中"),
                new HogeResponse("こんにちは田中")
            ],
            "case2" => [
                new HogeRequest(2, "高橋"),
                new HogeResponse("こんにちは高橋")
            ]
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

        $this->assertEquals($output, $result);
    }
}

