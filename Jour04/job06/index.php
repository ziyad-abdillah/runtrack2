<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job06</title>
</head>

<body>
    <?php
    if (isset($_GET['nombre']) % 2 == 0) {
        echo "Nombre pair";
    } else {
        echo "Nombre impair";
    }
    ?>
    <form action="index.php" method="get">
        <input type="text" name="nombre" placeholder="Entrer un nombre..." required="">
        <button type="submit">Envoyer</button>
    </form>
</body>

</html>