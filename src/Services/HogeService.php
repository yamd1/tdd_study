<?php

namespace App\Services;

use App\Output\HogeResponse;
use App\Input\HogeRequest;


class HogeService
{
    public function inputClass(HogeRequest $input): HogeResponse 
    {
        return new HogeResponse(sprintf("こんにちは%s", $input->name));
    }
}
