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

    <h1>Exo 4</h1>
    <h2>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra 
        le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un 
        nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).<br>
        On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
        https://fr.wikipedia.org/wiki/<br>
        Le tableau passé en argument sera le suivant :
        $capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
        "USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");</h2>
        
    <?php

    $capitales = [
        "France"=>"Paris",
        "Allemagne"=>"Berlin",
        "USA"=>"Washington",
        "Italie"=>"Rome",
        "Espagne"=>"Madrid"
    ];
   

    echo afficherTableHTML($capitales); // ON PEUT APPELER LES FONCTIONS N'IMPORTE QUAND

    function afficherTableHTML(array $capitales) {
        ksort($capitales);
        $result = "<table border=1> 
                    <thead>
                        <tr>
                            <th>Pays</th>
                            <th>Capitale</th>
                            <th>Lien wiki</th>
                        </tr>
                    </thead>
                    <tbody>";
                    foreach ($capitales as $pays => $capitale) { // ".=" POUR CONCATENER LES ELEMENTS AU PRECEDENT
                        $result .=
                            "<tr>
                                <td>".mb_strtoupper($pays)."</td>
                                <td>".ucfirst($capitale)."</td>
                                <td><a href='https://fr.wikipedia.org/wiki/$capitale' target='_blank'>Wiki</a></td> 
                            </tr>";
                    }
        $result .= "</tbody></table>";
        return $result;
    }


    ?>


</body>
</html>