<?php
// Määritellään muuttujat
$euroa = 150;
$kurssi = 1.08;
// Lasketaan dollarimäärä
$dollareita = $euroa * $kurssi;
echo "Dollarit: " . round($dollareita, 2) . " $";