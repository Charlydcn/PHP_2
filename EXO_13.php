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

        .instruction {
            opacity:60%;
            font-weight:300;
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

        echo "<h2>SERIE DE TEST<br>*********************</h2>";

        echo ($v1->demarrer())."<br>";
        echo ($v1->accelerer(50))."<br>";
        echo ($v1->ralentir(20))."<br>";
        echo ($v2->demarrer())."<br>";
        echo ($v2->stopper())."<br>";
        echo ($v2->accelerer(20))."<br>";
        echo "La vitesse du véhicule" . " " . $v1->getMarque() . " " . $v1->getModele() . " est de : " . ($v1->getvitesseActuelle())." km / h <br>";
        echo "La vitesse du véhicule" . " " . $v2->getMarque() . " " . $v2->getModele() . " est de : " . ($v2->getvitesseActuelle())." km / h <br>";

        echo "<h2>INFOS VÉHICULE 1<br>*********************</h2>" . $v1->getCarInfos();

        echo "<h2>INFOS VÉHICULE 2<br>*********************</h2>" . $v2->getCarInfos();



        // ********************************************* TESTS *********************************************

        // echo "<h2>TEST FONCTION DEMARRER</h2>";
 
        // echo ($v1->getcarState())."<br>";
        // echo ($v1->demarrer())."<br>";
        // echo ($v1->getcarState())."<br>";
        // echo ($v1->demarrer())."<br>";
        // echo ($v1->stopper())."<br>";
        // echo ($v1->getcarState())."<br>";


        // echo "<h2>TEST FONCTION STOPPER</h2>"; 

        // echo ($v1->getcarState())."<br>";
        // echo ($v1->stopper())."<br>";
        // echo ($v1->demarrer())."<br>";
        // echo ($v1->getcarState())."<br>";
        // echo ($v1->stopper())."<br>";
        // echo ($v1->getcarState())."<br>";
        

        // echo "<h2>TEST FONCTION ACCELERER</h2>";

        // echo ($v1->demarrer())."<br>";
        // echo ($v1->getvitesseActuelle())."<br>";
        // echo ($v1->accelerer(20))."<br>"; 
        // echo ($v1->getvitesseActuelle())."<br>";
        // echo ($v1->stopper())."<br>";
        // echo ($v1->getvitesseActuelle())."<br>";
        // echo ($v1->accelerer(20))."<br>";


        // echo "<h2>TEST FONCTION RALENTIR</h2>";

        // echo ($v2->ralentir(20))."<br>"; 
        // echo ($v2->demarrer())."<br>";
        // echo ($v2->getvitesseActuelle())."<br>";
        // echo ($v2->ralentir(20))."<br>";
        // echo ($v2->accelerer(20))."<br>";
        // echo ($v2->ralentir(20))."<br>";
        // echo ($v2->getvitesseActuelle())."<br>";
        // echo ($v2->accelerer(20))."<br>";
        // echo ($v2->getvitesseActuelle())."<br>";
        // echo ($v2->ralentir(200))."<br>";


        
    ?>


</body>
</html>