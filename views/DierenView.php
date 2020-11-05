<?php


namespace views;

use models\Dier;

class DierenView
{
    public function toon( Dier $dier)
    {
        //HEREDOC
        echo <<<EOT
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Dieren</title>
</head>
<body>
<p>
        {$dier->maakGeluid()}
</p>
<form id="container" method="post">
                <input type="hidden" name="controller" value="Bezoeker">
                <input type="hidden" name="actie" value="toon">
                <input type="radio" name="dier" value="Paard" id="Paard">
                <label for="Paard">Paard</label><br>
                <input type="radio" name="dier" value="Schaap" id="Schaap">
                <label for="Schaap">Schaap</label><br>
                <input type="radio" name="dier" value="Geit" id="Geit">
                <label for="Geit">Geit</label><br>
                <input type="radio" name="dier" value="Koe" id="Koe">
                <label for="Koe">Koe</label><br>
                <input type="submit" value="klik me"/>
            </form>
</body>
</html>
EOT;
    }
    public function vraag(){
        echo <<<EOT
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Dieren</title>
</head>
<body>
<p>
        Wel dier wil je horen?
</p>
<form id="container" method="post">
                <input type="hidden" name="controller" value="Bezoeker">
                <input type="hidden" name="actie" value="toon">
                <input type="radio" name="dier" value="Paard" id="Paard">
                <label for="Paard">Paard</label><br>
                <input type="radio" name="dier" value="Schaap" id="Schaap">
                <label for="Schaap">Schaap</label><br>
                <input type="radio" name="dier" value="Geit" id="Geit">
                <label for="Geit">Geit</label><br>
                <input type="radio" name="dier" value="Koe" id="Koe">
                <label for="Koe">Koe</label><br>
                <input type="submit" value="klik me"/>
            </form>
</body>
</html>
EOT;
    }
}