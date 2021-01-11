<?php
class Animate{
    function translate($x,$y){
        echo 'Translate';
        return $this;
    }
    function rotate($deg){
        echo 'rotate';
        return $this;
    }
    function scaling($ratio){
        echo 'scaling';
        return $this;
    }
}

    $ob = new Animate();            //create an object of animate class
    $ob->translate(20,50);          //method translate call
    $ob->scaling(20,50);            // method translate call
    $ob->rotate(20);                   //method rotate call
    $ob->scaling(200);                 //method scaling call
    $ob->translate(200,500);            //method translate call
    $ob->translate(20,50)->scaling(20)->rotate(20)->scaling(200)->translate(200,500); //method chaining occurs


?>