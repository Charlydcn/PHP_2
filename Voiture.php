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

                public function getMarque() // CHECK
                {
                    return $this->_marque;
                }
                
                public function getModele() // CHECK
                {
                    return $this->_modele;
                }
                
                public function getnbPortes() // CHECK
                {
                    return $this->_nbPortes;
                }
                
                public function getvitesseActuelle() // CHECK
                {
                    return $this->_vitesseActuelle;
                }

                public function getcarState() // CHECK
                {
                    return $this->_carState;
                }

                public function getcarStateText() // CHECK
                {
                    if ($this->_carState) {
                        return "Le véhicule" . " " . $this->_marque . " " . $this->_modele . " " . "est démarré";

                    } else {
                        return "Le véhicule" . " " . $this->_marque . " " . $this->_modele . " " . "est à l'arrêt";
                    }
                } 

                // *******************************************************************************
                // ******************************* MUTATEURS (set) *******************************

                public function setMarque($marque) // CHECK
                {
                    $this->_marque = $marque;
                }

                public function setmodele($modele) // CHECK
                {
                    $this->_modele = $modele;
                }

                public function setnbPortes($nbPortes) // CHECK
                {
                    $this->_nbPortes = $nbPortes;
                }

                public function setvitesseActuelle($vitesseActuelle) // CHECK
                {
                    $this->_vitesseActuelle = $vitesseActuelle;
                } 

                public function setcarState($carState) // CHECK
                {
                    $this->_carState = $carState;
                }

                // *******************************************************************************

                public function demarrer() // CHECK
                {
                    if (!$this->_carState) {                                                                                // Si carState est false, alors
                                                                                                          
                        $this->_carState = true;                                                                            // carState devient true
                        echo "<span class='instruction'>Démarre le véhicule </span>";                                       // echo de l'instruction donnée
                        return "Le véhicule" . " " . $this->_marque . " " . $this->_modele . " " . "démarre";               // return "Le véhicule 'marque' démarre"

                    } else {                                                                                                // Sinon, (si carState est true) alors
                                                                                                                    
                        echo "<span class='instruction'>Démarre le véhicule </span>";
                        return "Le véhicule" . " " . $this->_marque . " " . $this->_modele . " " . "est déjà démarré !";    // return "Le véhicule 'marque' est déjà démarré !"
                    }
                }

                
                public function stopper() // CHECK
                {
                    if ($this->_carState) {                                                                                // Si carState est true, alors

                        echo"<span class='instruction'>Stoppe le véhicule </span>";                                        // echo de l'instruction donnée
                        $this->_carState = false;                                                                          // carState devient false
                        $this->_vitesseActuelle = 0;                                                                       // vitesseActuelle passe à 0 car le véhicule est à l'arrêt
                        return "Le véhicule" . " " . $this->_marque . " " . $this->_modele . " " . "est stoppé";           // return "Le véhicule 'marque' est stoppé"

                    } else {                                                                                               // Sinon, (si carState est false) alors

                        echo"<span class='instruction'>Stoppe le véhicule </span>";                                        // echo de l'instruction donnée
                        return "Le véhicule" . " " . $this->_marque . " " . $this->_modele . " " . "est déjà stoppé !";    // return "Le véhicule 'marque' est déjà stoppé !"

                    }
                }

                public function accelerer($nbAccel) // CHECK
                {
                    if ($this->_carState) {                                                                                                 // Si carState est true

                        echo "<span class='instruction'>Accélère de " . $nbAccel . " km/h </span>";                                         // echo de l'instruction donnée
                        $this->_vitesseActuelle += $nbAccel;                                                                                // On additionne nbAccel à la vitesse actuelle
                        return "Le véhicule" . " " . $this->_marque . " " . $this->_modele . " " . "accélère de " . $nbAccel . " km/h";     // return "Le véhicule..."

                    } else {                                                                                                                // Sinon, (si carState est false) alors

                        echo "<span class='instruction'>Accélère de " . $nbAccel . " km/h </span>";                                         // echo de l'instruction donnée
                        return "Pour accélérer, il faut démarrer le véhicule" . " " . $this->_marque . " " . $this->_modele . " " . " ! ";  // return "Pour accélérer, il faut..."

                    }
                }

                public function ralentir($nbRal) // CHECK
                {
                    if ($this->_carState) {                                                         // Si carState est true
                        
                        echo "<span class='instruction'>Ralentis de " . $nbRal . " km/h </span>";   // echo de l'instruction donnée
                        $this->_vitesseActuelle -= $nbRal;                                          // On soustrais nbRal à la vitesseActuelle

                        if ($this->_vitesseActuelle < 0) {                                          // Après les instructions, si la vitesseActuelle < 0, alors
                            
                            $this->_vitesseActuelle += $nbRal;                                      // vitesseActuelle + nbRal pour annuler le ralentissement car la vitesseActuelle devient négative
                            return "Le véhicule ne peux pas aller en dessous de 0 km/h !";          // return "Le véhicule..."

                        } else

                        return "Le véhicule" . " " . $this->_marque . " " . $this->_modele . " " . "ralenti de " . $nbRal . " km/h"; // return "Le véhicule..."

                    } else {                                                                                                                        // Sinon (si carState est false)
                        
                        echo "<span class='instruction'>Ralentis de " . $nbRal . " km/h </span>";                                                   // echo de l'instruction donnée
                        return "Pour ralentir, il faut que le véhicule " . " " . $this->_marque . " " . $this->_modele . " " . " soit démarré ! ";  // return "Pour ralentir, ..." 

                    }
                }

                public function getCarInfos() // CHECK
                {
                    $infos = "Nom et modèle du véhicule : " . " " . $this->_marque . " " . $this->_modele . "<br>";
                    $infos .= "Nombre de portes : " . " " . $this->_nbPortes . "<br>";
                    $infos .= $this->getcarStateText() . "<br>";
                    $infos .= "Sa vitesse actuelle est de : " . $this->_vitesseActuelle . " km / h";
                    return $infos;
                }
                
            }
    
    ?>


</body>
</html>