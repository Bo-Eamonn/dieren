<?php

    spl_autoload_register("loadClass");

    function loadClass($class)
    {
        include __NAMESPACE__ .$class.'.php';
    }

    if(isset($_POST['dier'])){
        $bijdrage = $_POST['dier'];
        $klassenaam = "models\\".$bijdrage;

        $fabriek = new models\DierenFabriek();

        $dier = $fabriek->maakDier($klassenaam);
        echo $dier->maakGeluid();
    }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Dieren</title>
</head>
<body>
<form id="container" method="post">
                <input type="radio" name="dier" value="Paard">
                <label for="Paard">Paard</label><br>
                <input type="radio" name="dier" value="Schaap">
                <label for="Schaap">Schaap</label><br>
                <input type="radio" name="dier" value="Geit">
                <label for="Geit">Geit</label><br>
                <input type="radio" name="dier" value="Koe">
                <label for="Koe">Koe</label><br>
                <input type="submit" value="klik me"/>
            </form>
</body>
</html>