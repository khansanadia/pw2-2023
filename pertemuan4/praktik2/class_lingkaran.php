<?php

    class Lingkaran {
        // property
        private $r;
      const  PHI = 3.14;

      // method
      function __construct($jari) {
          $this->r = $jari;
      }
      function getLuas() {
        $luas = self: :PHI * pow($this->r,2);
        return $luas;
      }


      function getkel() {
        $kel = 2 * self: :PHI * $this->r;
        return $kel
      }
    }

?>    