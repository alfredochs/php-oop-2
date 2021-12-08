<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente
dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium 
che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c);
BONUS:
Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta)  -->
<?php
require_once __DIR__ . "/classi/informatico.php";
require_once __DIR__ . "/classi/alimentare.php";
require_once __DIR__ . "/classi/user-premium.php";
require_once __DIR__ . "/data/data.php";

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
    <main style="">
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

        <div>
            <h1>Dati Utenti</h1>
            <?php
            // var_dump($users);
            foreach ($users as $user) {
                // var_dump($user);
                $newUser = new User($user);
                // var_dump($newUser);
                echo $newUser->stampaDati() . "<br>";
            };


            ?>
        </div>

        <div>
            <h1>Dati Utenti premium</h1>
            <ul style="display: flex;">
                <?php
                // var_dump($users);
                foreach ($users as $user) {
                    // var_dump($user);
                    $newUser = new UserPremium($user);
                    // var_dump($newUser);
                ?>
                    <?php
                    echo $newUser->stampaDatiHtml() . "<br>";
                    echo $newUser->setPremium();
                    ?>
                <?php
                };
                ?>
            </ul>
        </div>


    </main>

</body>

</html>