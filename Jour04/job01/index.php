<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>job01</title>
</head>

<body>
  <form action="index.php" method="GET">
    <div class="form">

      <input type="text" placeholder="Prénom" name="prenom" />
      <input type="text" placeholder="Nom" name="name" />
      <input type="text" placeholder="Mail" name="mail" />
      <input type="submit" value="Envoyer" />
    </div>

    <?php

    $nombre = 0;
    foreach ($_GET as $valeur) {
      $nombre++;
    }

    ?>
    <p>Le nombre d’arguments GET envoyé est : <?php echo $nombre ?> </p>
</body>

</html>