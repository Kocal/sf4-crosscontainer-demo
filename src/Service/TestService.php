<?php

namespace App\Service;


class TestService
{
    private $text;

    public function __construct($param1)
    {
        $this->text = $param1;
    }

    public function getText()
    {
        return $this->text;
    }
}