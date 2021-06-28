<?php

class Product
{
    public $name;
    public $price;
    private $code;
    public $qty;
    public $desc;

    function __construct(string $name, float $price, string $code, int $qty, string $desc)
    {
        $this->name = $name;
        $this->price = $price;
        $this->code = $code;
        $this->qty = $qty;
        $this->desc = $desc;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }
}

class Pc extends Product
{
    public $ram;
    public $hardDisk;
    public $monitor;
    public $graphicCard;
    public $motherboard;
}
