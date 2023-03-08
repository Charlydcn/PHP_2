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

        table, td, th {
            border:1px solid black;
            border-collapse:collapse;
        }
    </style>
</head>
<body>

    <h1>Exo 2</h1>
    <h2>Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
        s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
        une fonction personnalisée.<br>
        Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);
    </h2>

    <?php
    
    $capitales = [
        "France"=>"Paris",
        "Allemagne"=>"Berlin",
        "USA"=>"Washington",
        "Italie"=>"Rome"
    ];

    echo afficherTableHTML($capitales); // ON PEUT APPELER LES FONCTIONS N'IMPORTE QUAND

    function afficherTableHTML(array $capitales) {
        ksort($capitales);
        $result = "<table border=1> 
                    <thead>
                        <tr>
                            <th>Pays</th>
                            <th>Capitale</th>
                        </tr>
                    </thead>
                    <tbody>";
                    foreach ($capitales as $pays => $capitale) { // ".=" POUR CONCATENER LES ELEMENTS AU PRECEDENT
                        $result .=
                            "<tr>
                                <td>".mb_strtoupper($pays)."</td>
                                <td>".ucfirst($capitale)."</td>
                            </tr>";
                    }
        $result .= "</tbody></table>";
        return $result;
    }


    ?>


</body>
</html>