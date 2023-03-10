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
    
    class VoitureElec extends VoitureClas

            {

                // ******************************* ATTRIBUTS *******************************

                private string $_autonomie; 

                public function __construct(string $marque, string $modele, int $autonomie) 
                {
                    parent::__construct($marque, $modele);
                    $this->_autonomie = $autonomie;
                }

                // ******************************* MÉTHODES ****************************************************************                
                // ******************************* ACCESSEURS (get) *******************************

                public function getAutonomie() // CHECK
                {
                    return $this->_autonomie;
                }
                               
                // *******************************************************************************
                // ******************************* MUTATEURS (set) *******************************

                public function setAutonomie($autonomie) // CHECK
                {
                    $this->_autonomie = $autonomie;
                }
                
                // *******************************************************************************

                public function getInfos()
                {
                    $infos = "La marque et le modèle du véhicule sont : " . " " . $this->getMarque() . " " . $this->getModele() . "<br>";
                    $infos .= "Son autonomie est de " . $this->getAutonomie() . " km";
                    return $infos;
                }


            }
    
    ?>


</body>
</html>