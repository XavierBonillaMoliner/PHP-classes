<?php

    class Triangle extends Shape{

        public function __construct($ample, $alt){
            Shape::__construct($ample, $alt);
        }

        public function areaTriangle(){
            $this->resultat=($this->ample+$this->alt)/2;
            return $this->resultat;
        }

    }

    class Rectangle extends Shape{

        public function __construct($ample, $alt){
            Shape::__construct($ample, $alt);
        }

        public function areaRectangle(){
            $this->resultat=$this->ample*$this->alt;
            return $this->resultat;
        }
    }


?>