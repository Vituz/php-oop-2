<?php

include __DIR__ . '/classes/User.php';

include __DIR__ . '/database/productDb.php'

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 02</title>
</head>

<body>

    <header>
        <h1>eCommerce</h1>
    </header>

    <main>

        <div class="user">
            <?php
            $user = new User('Vito', 'Battaglia', 32, 'prova@example.it', 'prova');

            $credit = new CreditCard('Vito', 'Battaglia', '12/24', 33345678, 345);

            $user->addCreditCard($credit);
            ?>
            <h2><?= $user->name; ?></h2>
            <h2><?= $user->lastname; ?></h2>
            <h2><?= $user->mail; ?></h2>
            <h2><?= $credit->getCardNumber(); ?></h2>

        </div>
        <div class="container" style="display: flex;">
            <?php foreach ($productsDb as $product) : ?>
                <div class="card" style="margin: 2rem;">
                    <h2><?= $product->name; ?></h2>
                    <h3><?= $product->price; ?></h3>
                    <h3><?= $product->getCode(); ?></h3>
                    <h3><?= $product->qty; ?></h3>
                    <p><?= $product->desc ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

</body>

</html>