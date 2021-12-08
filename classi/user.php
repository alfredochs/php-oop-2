<?php
class User
{
    protected $fullName;
    protected $email;
    protected $id;

    function __construct($arr)
    {
        $this->fullName = $arr["fullName"];
        $this->email = $arr["email"];
        $this->id = $arr["id"];
    }

    public function setEmail($val)
    {
        $this->email = $val;
    }

    public function stampaDati()
    {
        return
            $this->id . " Dati Utente: " .  $this->fullName . "<br>" .
            "Email Utente: " . $this->email;
    }
}
