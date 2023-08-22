<?php

namespace App\Output;

class HogeResponse {
    private string $message;

    function getMessage(): string
    {
        return $this->message;
    }

    function setMessage(string $_message)
    {
        $this->message = $_message;
    }
}
