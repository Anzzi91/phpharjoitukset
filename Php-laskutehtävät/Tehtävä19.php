<?php
// Määritellään muuttujat
$matka = 300;
$kulutus = 6.5;
$co2PerLitra = 2.3;
// Lasketaan hiilidioksidipäästöt
$co2Paaastot = $matka / 100 * $kulutus * $co2PerLitra;
// Tulostetaan tulos
echo "Auton hiilidioksidipäästöt: " . round($co2Paaastot, 2) . " kg";