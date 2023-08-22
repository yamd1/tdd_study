<?php

namespace App\Input;

class HogeRequest {
    private int $id;
    private string $name;


    function getId(): int
    {
        return $this->id;
    }

    function setId(int $_id)
    {
        $this->id = $_id;
    }

    function getName(): string
    {
        return $this->name;
    }

    function setName(string $_name)
    {
        $this->name = $_name;
    }
}
