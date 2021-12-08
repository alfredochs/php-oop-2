<?php

require_once __DIR__ . "/user.php";
class UserPremium extends User
{
    protected $payment;
    protected $premium;

    function __construct($arr)
    {
        parent::__construct($arr);
        $this->payment = $arr["payment"];
        $this->premium = $arr["premium"];
    }

    public function stampaDati()
    {
        return
            parent::stampaDati()  . "<br>" .
            $this->payment . " - Utente premium: " . $this->premium;
    }
    public function stampaDatiHtml()
    {
        return
            "<li style='padding-right :30px;'>
            <strong>#id " . $this->id . "</strong> <br>" .
            "Full Name: " . $this->fullName . " <br> " .
            "Email: " . $this->email . " <br> " .
            "Carta: " . $this->payment . " <br> " .
            "Bool Premium: " . $this->premium . " <br> ";
        "</li>";
    }
    public function setPremium()
    {
        if ($this->premium === true) {
            return "User Premium";
        } else {
            return "Ottieni Premium.";
        }
    }
}
