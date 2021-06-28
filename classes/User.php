<?php

class User
{
    public $name;
    public $lastname;
    private $eta;
    public $mail;
    private $passw;

    function __construct(string $name, string $lastname, int $eta, string $mail, string $passw)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->eta = $eta;
        $this->mail = $mail;
        $this->passw = $passw;
    }

    public function setPassw($passw)
    {
        $this->passw = $passw;
    }
}


class UserPremium extends User
{
    protected $discount;
    protected $offer;
}
