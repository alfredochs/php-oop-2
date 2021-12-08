<?php
class User
{
    protected $name;
    protected $surname;
    protected $email;

    function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    public function setEmail($val)
    {
        $this->email = $val;
    }

    public function stampaDati()
    {
        return
            "Nome Utente: " .  $this->name . "<br>" .
            "Cognome Utente: " .  $this->surname . "<br>" .
            "Email Utente: " . $this->email;
    }
}
