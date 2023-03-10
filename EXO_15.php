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

    <h1>Exo 15</h1>
    <h2>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une 
        adresse e-mail a le bon format.</h2>

    <?php

        $email = "contact@elan";

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "$email est une adresse e-mail valide";
        } else {
            echo "$email n'est pas une adresse e-mail valide";
        }

    ?>

</body>
</html>