<?php
require_once __DIR__ . "/product.php";
class Informatico extends Product
{
    protected $ram = "";
    protected $ssd = "";
    protected $description = "";


    function __construct($_ram, $_ssd)
    {
        parent::__construct("Computer", "$350");
        $this->ram = $_ram;
        $this->ssd = $_ssd;
    }
    public function setDescription($val)
    {
        $this->description = $val;
    }
    public function getAsString()
    {
        return $this->name . ", " . $this->price . "<br>" . $this->description . "<br>" . $this->ram . "," . $this->ssd;
    }
    public function getNamePrice()
    {
        return parent::getNamePrice();
    }
}
