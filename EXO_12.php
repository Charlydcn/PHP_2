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

    <h1>Exo 12</h1>
    <h2>La fonction var_dump($variable) permet d’afficher les informations d’une variable.<br>
        Soit le tableau suivant :<br>
        $tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));<br>
        A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.</h2>

    <?php
    
        $tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));

        foreach ($tableauValeurs as $valeur) { // Pour chaque $valeur dans $tableauValeurs, exéctuer les instructions
            var_dump($valeur); // var_dump : affiche les informations d'une variable
            echo "<br>";
        }
        
    ?>


</body>
</html>