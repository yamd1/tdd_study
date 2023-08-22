<?php

namespace App\Input;

class HogeRequest {
    function __construct(
        private int $id,
        public string $name
    )
    { }
}
