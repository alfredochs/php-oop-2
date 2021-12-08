<?php

require_once __DIR__ . "/user.php";
class UserPremium extends User
{
    protected $sconto;

    function __construct($sconto)
    {
        parent::__construct("Alfre", "Solis");
        parent::setEmail("alfredo@gmail.com");
        $this->sconto = $sconto;
    }

    public function stampaDati()
    {
        return
            parent::stampaDati() . "<br>" .
            $this->sconto;
    }
}
