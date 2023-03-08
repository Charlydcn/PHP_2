<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100&display=swap" rel="stylesheet">
    <title>PHP 2</title>
</head>
<body>

    <?php
    
    class Voiture
            {

                // ******************************* ATTRIBUTS *******************************

                
                private string $_marque;
                private string $_modele;
                private int $_nbPortes;
                private float $_vitesseActuelle = 0;
                private bool $_carState = false;

                public function __construct(string $marque, string $modele, int $nbPortes, float $vitesseActuelle, bool $carState)
                {
                    $this->_marque = $marque;
                    $this->_modele = $modele;
                    $this->_nbPortes = $nbPortes;
                    $this->_vitesseActuelle = $vitesseActuelle;
                    $this->_carState = $carState;
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

                public function getcarState() // CHECK
                {
                    return $this->_carState;
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

                public function setcarState($carState) // !! A TESTER !!
                {
                    $this->_carState = $carState;
                }

                // *******************************************************************************

                public function demarrer() // CHECK
                {
                    if (!$this->_carState) {                                                                              // Si carState est false, alors
                        $this->_carState = true;                                                                          // carState = true
                        return "Le véhicule" . " " . $this->_marque . " " . $this->_modele . " " . "démarre";             // return "Le véhicule 'marque' démarre"
                    } else {                                                                                              // Sinon, si carState est true, alors
                        return "Le véhicule" . " " . $this->_marque . " " . $this->_modele . " " . "est déjà démarré !";  // return "Le véhicule 'marque' est déjà démarré !"
                    }
                }
                
                public function stopper() // CHECK
                {
                    if ($this->_carState) {                                                                                // Si carState est true, alors
                        $this->_carState = false;                                                                          // carState = false
                        return "Le véhicule" . " " . $this->_marque . " " . $this->_modele . " " . "est stoppé";           // return "Le véhicule 'marque' 
                    } else {                                                                                               // Sinon, si carState est false, alors
                        return "Le véhicule" . " " . $this->_marque . " " . $this->_modele . " " . "est déjà stoppé !";    // return "Le véhicule 'marque' est déjà stoppé !"
                    }
                }

                public function accelerer($nbAccel) // !! A TESTER !!
                {
                    if ($this->_carState) {
                        $this->_vitesseActuelle += $nbAccel;
                        return "Le véhicule" . " " . $this->_marque . " " . $this->_modele . " " . "accélère de" . $nbAccel . " km/h";
                    } elseif (!$this->_carState) {
                        return "Pour accélérer, il faut démarrer le véhicule" . " " . $this->_marque . " " . $this->_modele . " " . " ! ";
                    } else {
                        return "Erreur de type de donnée sur l'état du véhicule";
                    }
                }

                public function ralentir() // !! A TESTER !!
                {
                    
                }

                

            }
    
    ?>


</body>
</html>