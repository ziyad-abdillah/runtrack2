<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job05</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="text" name="name" placeholder="Entrer votre Nom..." required="">
        <input type="password" name="mdp" placeholder="Entrer votre mot de passe..." required="">
        <input type="submit">Envoyer</input>
    </form>

    <?php
    if (isset($_POST['name'])) {
        if ($_POST['name'] == "john" && $_POST['mdp'] == "rambo") {
            echo "C'est pas ma guerre";
        } else {
            echo "Votre pire cauchemar";
        }
    }
    ?>
</body>

</html>