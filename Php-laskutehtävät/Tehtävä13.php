<?php
// Määritellään muuttujat
$matka = 210;
$aika = 2.5;
$nopeus = $matka / $aika;
echo "Matka: " . $matka . " km<br>";
echo "Aika: " . $aika . " h<br>";
echo "Nopeus: " . round($nopeus, 2) . " km/h";