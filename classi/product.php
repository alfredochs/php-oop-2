
<?php
class Product
{
    protected $name = "";
    protected $price = "";

    function __construct($_name, $_price)
    {
        $this->name = $_name;
        $this->price = $_price;
    }
    public function getNamePrice()
    {
        return $this->name . "," . $this->price;
    }
};
