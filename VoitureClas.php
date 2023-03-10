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

