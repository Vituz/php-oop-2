<?php

/*
Descrizione:
- Inventate due classi a piacere una che estende l'altra.
- Ciascuna classe avrá un constuctor e un paio di metodi a piacere.
- Create un paio di traits da usare nella classe figlia.
- in una funzione gestite eventuali errori usando un exception
- create una struttura dati (array di oggetti) e usate un ciclo foreach per mostrare i dati a schermo (con html, non var_dump)
- invocate il metodo nel quale avete usato l'exception passado al metodo dei valori sbagliati
- usate il try/catch per gestire il la richiesta e mostrare all'utente un messaggio di errore.

*/

include __DIR__ . '/database/db.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <!-- Style.css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Trait Exceptions</title>
</head>

<body>
    <!-- Header -->
    <header>
        <img src="./assets/img/palm.png" alt="">
        <h1>Rom Paradise</h1>
    </header>
    <!-- /Header -->

    <!-- Main -->
    <main>
        <div class="container">

            <?php foreach ($gameDb as $game) : ?>

                <div class="card">
                    <img src="<?= $game->getImg() ?>" alt="<?= $game->getName() ?>">
                    <h2><?= $game->getName() ?></h2>
                    <h3><?= $game->getGenre() ?></h3>
                    <h3><?= $game->getRelease() ?></h3>

                </div>

            <?php endforeach; ?>

        </div>
    </main>
    <!-- /Main -->

    <!-- Footer -->
    <footer>

    </footer>
    <!-- /Footer -->
</body>

</html>