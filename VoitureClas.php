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
    
    class VoitureClas

            {

                // ******************************* ATTRIBUTS *******************************

                
                protected string $_marque;
                protected string $_modele;
                

                public function __construct(string $marque, string $modele)
                {
                    $this->_marque = $marque;
                    $this->_modele = $modele;
                    
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
                
               
                // *******************************************************************************
                // ******************************* MUTATEURS (set) *******************************

                public function setMarque($marque) // CHECK
                {
                    $this->_marque = $marque;
                }

                public function setModele($modele) // CHECK
                {
                    $this->_modele = $modele;
                }

                
                // *******************************************************************************

                public function getInfos()
                {
                    $infos = "La marque et le modèle du véhicule sont : " . " " . $this->getMarque() . " " . $this->getModele() . "<br>";
                    return $infos;
                }                

            }
    
    ?>


</body>
</html>