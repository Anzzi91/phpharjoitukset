<?php
// Määritellään muuttujat
$matka = 380;
$nopeus = 95;
$matkakestaa = $matka / $nopeus;
$tunnit = floor($matkakestaa);
$minuutit = ($matkakestaa - $tunnit) * 60;
echo "Matka kestää: " . $tunnit . " h " . round($minuutit) . " min";





