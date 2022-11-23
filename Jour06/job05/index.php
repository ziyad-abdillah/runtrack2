<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style<?php echo $_POST['style'] . '.css' ?>">
    <title>job5</title>
</head>

<body>


    <form action="" method="post">
        <select name="style" id="style">
            <option value="" selected>sélectionnez le style</option>
            <option value="1">style 1</option>
            <option value="2">style 2</option>
            <option value="3">style 3</option>
        </select>
        <input type="submit" value="change">
    </form>


</body>

</html>