<?php
//Määritellään muuttujat
$matka = 540;
$bensaa = 42;
$kulutus = $bensaa / $matka * 100;
echo "Auton kulutus: " . round($kulutus, 1) . " l/100km";
