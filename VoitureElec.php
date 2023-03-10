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
