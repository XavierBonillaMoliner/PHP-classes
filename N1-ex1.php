<?php

    class Employee {

        private $nom;
        private $sou;

       public function initialize($nom, $sou){
            $this->nom=$nom;
            $this->sou=$sou;

        }

        public function print(){
            define("MAXSOU", 6000);
            echo "Hola, ".$this->nom."\n";
            if ($this->sou>MAXSOU){
                echo "Has de pagar impostos".$this->nom;
            }
            else{
                echo "No has de pagar impostos";
            }

        }
    }

    $treballador = new Employee();
    $treballador->initialize('Ferran', 700);
    $treballador->print();



?>