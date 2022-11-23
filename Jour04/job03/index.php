<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job03</title>
</head>

<body>
    <?php
    $nombre = 0;

    foreach ($_POST as $nombre) {

        $nombre++;
    }
    ?>

    <form action="index.php" method="post">
        <input type="text" name="name" placeholder="Entrer votre Nom...">
        <input type="text" name="email" placeholder="Entrer votre email...">
        <input type="text" name="num" placeholder="Entrer votre num...">
        <input type="submit">Envoyer</input>
    </form>

    <p><?php if (isset($nombre)) echo "le nombre d'arguments POST: $nombre " ?></p>
</body>