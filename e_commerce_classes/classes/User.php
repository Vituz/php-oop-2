<?php

include __DIR__ . '/CreditCard.php';
class User
{
    public $name;
    public $lastname;
    private $eta;
    public $mail;
    private $passw;
    private $creditCard;

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

    public function addCreditCard($card)
    {
        $this->creditCard = $card;
    }
}


class UserPremium extends User
{
    protected $discount;

    function __construct(string $name, string $lastname, int $eta, string $mail, string $passw, int $discount)
    {

        parent::__construct($name, $lastname, $eta, $mail, $passw);
        $this->discount = $discount;
    }
}





// var_dump($vito);
// var_dump($credit);

// $vito->addCreditCard($credit);
// var_dump($vito);
