<?php
require_once __DIR__ . "/classi/informatico.php";

$prodottoInformatico = new Informatico("16gb", "256gb");
var_dump($prodottoInformatico);
$prodottoInformatico->setDescription("Descrizione di prova");
echo $prodottoInformatico->getAsString() . "<br>";
echo $prodottoInformatico->getNamePrice();
