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

    <h1>Exo 7</h1>
    <h2>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
        dans le tableau associatif si la case est cochée ou non.
        </h2>

    <?php

        $elements = [
        "Choix 1"=>"",
        "Choix 2"=>"Checked",
        "Choix 3"=>""
        ];

        echo genererCheckbox($elements);

        function genererCheckbox(array $elements) {
            foreach ($elements as $choix => $check) { 
                echo 
                "<input type='checkbox' id='$choix' $check>
                <label for='$choix'>$choix</label><br>";
            };
        }
    ?>


</body>
</html>