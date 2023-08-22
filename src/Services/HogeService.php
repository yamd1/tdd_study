<?php

namespace App\Services;

use App\Output\HogeResponse;
use App\Input\HogeRequest;


class HogeService
{
    public function inputClass(HogeRequest $input): HogeResponse 
    {
        $response = new HogeResponse();
        $response->setMessage(sprintf("こんにちは%s", $input->getName()));
        return $response;
    }
}
