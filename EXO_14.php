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

    <h1>Exo 14</h1>
    <h2>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec 
        qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).<br>
        Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques 
        suivantes :</h2>
    <h3>Peugeot 408 : $v1 = new Voiture("Peugeot","408");<br>
        BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);</h3>
        <h2>Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :<br></h2>
        <h3>echo $v1->getInfos()<br/>
            echo $ve1->getInfos();<br/></h3>

    <?php
    
        require "VoitureClas.php";
        require "VoitureElec.php";

        $v1 = new VoitureClas("Peugeot","408");
        $ve1 = new VoitureElec("BMW","I3",100);

        echo "Véhicule 1 (Classique) : <br> *************************** <br>" . $v1->getInfos() . "<br>";
        echo "Véhicule 2 (Éléctrique) : <br> *************************** <br>" .  $ve1->getInfos() . "<br>";

    ?>


</body>
</html>