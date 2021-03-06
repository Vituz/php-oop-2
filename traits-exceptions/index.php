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

            <!-- Game List -->
            <?php foreach ($gameDb as $game) : ?>

                <!-- Game Card -->
                <div class="card">

                    <!-- Image -->
                    <img src="<?= $game->getImg() ?>" alt="<?= $game->getName() ?>">

                    <!-- Name -->
                    <h2><?= $game->getName() ?></h2>

                    <!-- Rating -->
                    <h3>Rating:
                        <?php
                        try {
                            echo $game->ratingGame('prova') . '/5';
                        } catch (Exception $e) {
                            echo '<span class="error">' .  $e->getMessage() . '</span>';
                        }
                        ?>
                    </h3>

                    <!-- Genre -->
                    <h3>Genre(s): <?= $game->getGenre() ?></h3>

                    <!-- Release Year -->
                    <h3>Release Year: <?= $game->getRelease() ?></h3>

                    <div class="card_footer">

                        <!-- Downloaded Times -->
                        <h3>Downloaded Times: <?= $game->downloaded(rand(10, 250)) ?></h3>
                    </div>
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