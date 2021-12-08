<?php
require_once __DIR__ . "/product.php";
class Alimentare extends Product
{
    protected $description = "";
    protected $tipologia = "";
    protected $scadenza = "";

    function __construct($tipologia)
    {
        parent::__construct("Mela", "$1");
        $this->tipologia = $tipologia;
    }

    public function setDescription($val)
    {
        $this->description = $val;
    }
    public function setScadenza($val)
    {
        $this->scadenza = $val;
    }
    public function stampaDati()
    {
        return
            "Nome del prodotto:" . $this->name . "<br>" .
            "Prezzo del prodotto:" . $this->price . "<br>" .
            "Descrizione del prodotto:" . $this->description . "<br>" .
            "Tipologia del prodotto:" . $this->tipologia . "<br>";
    }
}
