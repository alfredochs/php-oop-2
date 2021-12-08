<?php
require_once __DIR__ . "/classi/informatico.php";
require_once __DIR__ . "/classi/alimentare.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>
</head>

<body>
    <main>
        <div>

            <h1>Prodotto Informatico</h1>
            <?php
            $computer = new Informatico("16gb", "256gb");
            var_dump($computer);
            $computer->setDescription("Descrizione di prova");
            echo $computer->getAsString() . "<br>";
            ?>
            <h2>
                <?php echo $computer->getNamePrice(); ?>
            </h2>
        </div>

        <div>
            <h1>Prodotto Alimentare</h1>
            <?php
            $prodAlimentare = new Alimentare("Verdura");
            $prodAlimentare->setDescription("Descrizione della mela");
            $prodAlimentare->setScadenza("15/12/21");
            var_dump($prodAlimentare);
            echo $prodAlimentare->stampaDati();
            ?>

            <h2>
                <?php echo $prodAlimentare->getNamePrice(); ?>

            </h2>

        </div>
    </main>

</body>

</html>