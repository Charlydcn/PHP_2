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

    <h1>Exo 8</h1>
    <h2>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg<br>
        Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran</h2>

    <?php

        $url = "http://my.mobirise.com/data/userpic/764.jpg";

        function repeterImage($url, $n) {
            for ($i = 0; $i < $n; $i++) { // $i = 0, POUR QUE $i SOIT SUPERIEUR A $n (nombre de fois où l'on répète l'image), EXECUTER '$i++' DONC i +1, 
                echo '<img src="'.$url.'">'; // POUR CHAQUE BOUCLE DE FOR, CETTE INSTRUCTION EST EXECUTEE
            }
        }

        repeterImage("http://my.mobirise.com/data/userpic/764.jpg", 3);
        
    ?>


</body>
</html>