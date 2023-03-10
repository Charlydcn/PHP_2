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

    <h1>Exo 10</h1>
    <h2>En utilisant l'ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
        complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
        « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».<br>
        Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
        de validation (submit).</h2>

    <?php

        $coordonnees = ["Nom"=>"text", "Prénom"=>"text", "Ville"=>"text", "E-Mail"=>"email"]; // Je créer mes 3 tableaux (le premier est associatif pour contenir l'input type allant avec l'info)
        $sexe = ["Masculin", "Féminin", "Autre"];
        $formations = ["Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet"]; 

        echo formulaire($coordonnees, $sexe, $formations); // J'echo ma fonction globale permettant de tout afficher

        function formulaire(array $coordonnees, array $sexe, array $formations) { // Je remplis mon $result contenant tout mon code qui sera return à la fin et qui sera echo si j'echo la fonction
            $result = "<h2>FORMULAIRE</h2>";                                      // Titre
            $result .= "<form action='#' method='POST' autocomplete='off'>";      // J'ouvre ma balise form 
            $result .= input($coordonnees);                                       // Je concatène le $result de chaque fonction (coordonnees, sexe, formations)
            $result .= radio($sexe);                                              // Concaténisation de la fonction radio(array $sexe)
            $result .= dropdown($formations);                                     // Concaténisation de la fonction dropdown(array $formations)
            $result .= "<br><input type='submit' value='Envoyer'>";               // Bouton submit
            $result .= "</form>";                                                 // Je mets ma balise fermante form à part pour pouvoir ajouter des sections si besoin sans avoir à tout déplacer
            return $result;
        }

        function input(array $coordonnees) {                                          // Ma fonction (input)
            $result = "";                                                             // Je crée le résult qui sera renvoyer à la fin
            foreach ($coordonnees as $info=>$type) {                                  // Pour chaque $info et son $type à l'intérieur de $coordonnees, exéctuer les instructions below
                $result .=                                                            // .= pour AJOUTER le code au résultat et non $result = le code
                "<label for='input'>$info</label><br>       
                <input type='$type' id='$info' name='$info' value='' required> <br>"; // Je labellise mon input (le petit "Nom" au dessus), et je l'insère avec chaque info et type du tableau associatif 
            }
            return $result;  
        }

        function radio(array $sexe) {
            $result = "";
            foreach ($sexe as $genre) {
                $result .= 
                "<input type='radio' id='radiogenre' name='genre' value='genre'>
                <label for='radiogenre'>$genre</label><br>";
            }
            return $result;
        }
        
        function dropdown(array $formations) {
            $result = "<select name='formations' required>
                        <option disabled selected hidden>Formation désirée</option>";
            foreach ($formations as $formation) {
                $result .= "<option value='$formation'>$formation</option>";
            }
            $result .= "</select>";
            return $result;
        }


    ?>


</body>
</html>