<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100&display=swap" rel="stylesheet">
    <title>PHP 2</title>
    <style>
        * {
            font-family:poppins;
        }

        h1 {
            color:#006699;
        }

        h2 {
            font-size:1.25em;
        }

        h3 {
            font-size:1em;
        }

    </style>
</head>
<body>

    <h1>Exo 11</h1>
    <h2>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres)
        à partir d'une chaîne de caractère représentant une date.</h2>

    <?php
    
    setlocale(LC_TIME, 'fr_FR'); // Je définis ma locale en français pour les fonctions de date et d'heure
    date_default_timezone_set('Europe/Paris'); // Je défini le fuseau horaire par défaut pour que les dates et heures soit affichées selon ce fuseau

    $date = "2018-02-23";
    $formatterDateFr = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE); 
    // Je créer un nouvel objet "IntlDateFormatter" avec la locale française 'fr_FR', le format de date complet ("IntlDateFormatter::FULL"), et le format de temps NONE.

    echo ucfirst($formatterDateFr->format(date_create($date))); // ucfirst = uppercase la first letter, format
    // Dans ma variable $formatterDateFr qui contient la classe IntlDateFormatter qui contient l'objet format, j'appelle la fonction PHP date_create qui converti
    // ma variable $date en DateTime (objet), grâce à cette conversion, mon $date peut être utilisé comme argument de la méthode format

    ?>


</body>
</html>