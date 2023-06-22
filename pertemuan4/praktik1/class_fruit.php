<?php

    class fruit {
        // property
        public $name = "Apple";
        public $color = "Red";

        // Method
        function getName() {
           return $this->name;


        function getcolor() {
            return $this
        }
        }
     } 

    $apple = new fruit();
    $apple->name = "Apple";
    $apple->color = "Red"
   echo $apple->getName();

    $banana = new fruit();
    $banana->name = "Banana"
    $banana->color = "Yellow";
    echo $banana->getName();

?>