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

    <h1>Exo 6</h1>
    <h2>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau 
        de valeurs.</h2>

    <?php

        $elements = ["Monsieur", "Madame", "Mademoiselle"];

        echo alimenterListeDeroulante($elements);

        function alimenterListeDeroulante(array $elements) {
            $select =
            "<select id='select' required>
            <option value='' disabled selected hidden>Sexe</option>"; // PLACEHOLDER DE LA LISTE GRACE A DISABLED SELECTED ET HIDDEN 

            foreach ($elements as $element) {
                $select .= "<option value='$element'>$element</option>";
            };
            $select .= "</select>";
            return $select."<br>";
        }
        
    ?>


</body>
</html>