<?php

class CreditCard
{
    private $name;
    private $lastname;
    private $date;
    private $cardNumber;
    private $code;

    function __construct(string $name, string $lastname, string $date, int $cardNumber, int $code)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->date = $date;
        $this->cardNumber = $cardNumber;
        $this->code = $code;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }
}
