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

    <h1>Exo 13</h1>
    <h2>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et vitesseActuelle ainsi que les méthodes demarrer( ),<br>
        accelerer( ) et stopper( ) en plus des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule instancié<br>
         est de 0. Une méthode personnalisée pourra afficher toutes les informations d'un véhicule.</h2>
    <h3> v1 ➔ "Peugeot","408",5<br>
        v2 ➔ "Citroën","C4",3</h3>

    <?php
    
        require "Voiture.php";

        $v1 = new Voiture("Peugeot","408", 5, 0, false);
        $v2 = new Voiture("Citroën","C4", 3, 0, false);

        
        
    ?>


</body>
</html>