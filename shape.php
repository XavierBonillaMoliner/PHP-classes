<?php

    class Shape {

        protected $ample;
        protected $alt;
        protected $resultat;

        public function __construct($ample, $alt){
            $this->ample=$ample;
            $this->alt=$alt;
        }

        public function imprimirResultat() {
            echo $this->resultat."\n";
        }



    }

?>