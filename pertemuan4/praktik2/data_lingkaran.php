<?php

   require_once 'class_lingkaran.php';

   echo 'Nilai PHI ='. Lingkaran :: PHI;

   $Lingkar1 = new Lingkaran(7);
   $Lingkar2 = new Lingkaran(15);

   echo "<br>Luas Lingkaran 1 = " . $lingkar1->getLuas();
   echo "<br>Luas Lingkaran 2 = " . $lingkar2->getLuas();
   echo "<br>"
   echo "<br>kel Lingkaran 1 = " . $lingkar1->getLuas(); 
   echo "<br>kel Lingkaran 2 = " . $lingkar2->getLuas();

   
?>