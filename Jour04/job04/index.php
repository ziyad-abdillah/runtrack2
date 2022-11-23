<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job04</title>
</head>

<body>

    <table>
        <thead>
            <tr>
                <th>argument</th>
                <th>valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Prénom</td>
                <td> <?php if ($_POST) {
                            echo $_POST['prenom'];
                        }
                        ?>
                </td>
            </tr>
            <tr>
                <td>Nom</td>
                <td> <?php if ($_POST) {

                            echo $_POST['name'];
                        }
                        ?>
                </td>
            </tr>
        </tbody>
    </table>

    <form action="index.php" method="post">
        <input type="text" name="name" placeholder="Entrer votre Nom...">
        <input type="text" name="prenom" placeholder="Entrer votre prenom...">
        <input type="submit">Envoyer</input>
    </form>

</body>

</html>