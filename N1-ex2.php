<?php
    include('shape.php');
    include('fgeom.php');

    $triangle1 = new Triangle(10,5);
    $triangle1->areaTriangle();
    $triangle1->imprimirResultat();
    $rectangle1 = new Rectangle(10,6);
    $rectangle1->areaRectangle();
    $rectangle1->imprimirResultat();

?>