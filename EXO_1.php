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
        
        .red {
            color: red;
        }
    </style>
</head>
<body>

    <h1>Exo 1</h1>
    <h2>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
        caractère passée en argument en majuscules et en rouge. <br>
        Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;</h2>
    
    <?php
    
    $text = "Mon texte en paramètre";

    echo convertirMajRouge($text);

    // echo convertirMajColor($text, "#555ABC"); // Méthode permettant de le faire en changeant la couleur à sa guise

    function convertirMajRouge(string $phrase){
        return "<p class='red'>".mb_strtoupper($phrase)."</p>";
    }

    // function convertirMajColor(string $phrase, string $color) {
    //     return "<p style='color:$color'>".mb_strtoupper($phrase)."</p>";
    // }
    
    ?>

</body>
</html>