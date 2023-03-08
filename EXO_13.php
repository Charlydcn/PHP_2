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

    <h1>Exo 13</h1>
    <h2>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et vitesseActuelle ainsi que les méthodes demarrer( ),<br>
        accelerer( ) et stopper( ) en plus des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule instancié<br>
         est de 0. Une méthode personnalisée pourra afficher toutes les informations d'un véhicule.</h2>
    <h3> v1 ➔ "Peugeot","408",5<br>
        v2 ➔ "Citroën","C4",3</h3>

    <?php
    
        class Voiture
            {

                // ******************************* ATTRIBUTS *******************************

                
                private string $_marque;
                private string $_modele;
                private int $_nbPortes;
                private float $_vitesseActuelle = 0;

                public function __construct(string $marque, string $modele, int $nbPortes, float $vitesseActuelle)
                {
                    $this->_marque = $marque;
                    $this->_modele = $modele;
                    $this->_nbPortes = $nbPortes;
                    $this->_vitesseActuelle = $vitesseActuelle;
                }

                // ******************************* MÉTHODES ****************************************************************                
                // ******************************* ACCESSEURS (get) *******************************

                public function getMarque() // !! A TESTER !!
                {
                    return $this->_marque;
                }
                
                public function getmodele() // !! A TESTER !!
                {
                    return $this->_modele;
                }
                
                public function getnbPortes() // !! A TESTER !!
                {
                    return $this->_nbPortes;
                }
                
                public function getvitesseActuelle() // !! A TESTER !!
                {
                    return $this->_vitesseActuelle;
                } 

                // *******************************************************************************
                // ******************************* MUTATEURS (set) *******************************

                public function setMarque($marque) // !! A TESTER !!
                {
                    $this->_marque = $marque;
                }

                public function setmodele($modele) // !! A TESTER !!
                {
                    $this->_modele = $modele;
                }

                public function setnbPortes($nbPortes) // !! A TESTER !!
                {
                    $this->_nbPortes = $nbPortes;
                }

                public function setvitesseActuelle($vitesseActuelle) // !! A TESTER !!
                {
                    $this->_vitesseActuelle = $vitesseActuelle;
                } 

                // *******************************************************************************

                public function demarrer() // !! A TESTER !!
                {
                    if ($state = false) {

                        $state = true;

                        if ($state = true) {

                            $stateText = "Le véhicule " . $this->_marque . $this->_modele . "démarre";
                            return $stateText;
                            
                        }

                    } elseif ($state = true) {

                        $alreadyTrue = "Le véhicule " . $this->_marque . "est déjà démarré !";
                        return $alreadyTrue;
                        
                    } else {
                        $stateError = "Erreur de type de donnée de l'état du véhicule.";
                        return $stateError;
                    }

                }

                public function accelerer() // !! A TESTER !!
                {

                }

                public function stopper() // !! A TESTER !!
                {

                }

            }
        
    ?>


</body>
</html>