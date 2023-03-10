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

        input {
            background-color:white;
            border:1px solid grey;
            outline:none;
        }

    </style>
</head>
<body>

    <h1>Exo 5</h1>
    <h2>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
        précisant le nom des champs associés.</h2>

    <?php

        $nomsInput = ["Nom", "Prénom", "Ville"];

        echo afficherInput($nomsInput);

        function afficherInput(array $nomsInput) {
            foreach ($nomsInput as $nom) { 
                echo 
                "<label for='input'>$nom</label><br>
                <input type='text' id='$name' name='$nom'> <br>";
            };
        }
        
    ?>


</body>
</html>