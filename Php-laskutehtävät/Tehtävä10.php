<?php
// Määritellään muuttujat
$hinta = 89.90;
$alennus = 25;
$saasto = $hinta * ($alennus / 100);
$uusi_hinta = $hinta - $saasto;
echo "Alkuperäinen hinta: " . round($hinta, 2) . " €<br>";
echo "Alennus: " . $alennus . " %<br>";
echo "Saasto: " . round($saasto, 2) . " €<br>";
echo "Uusi hinta: " . round($uusi_hinta, 2) . " €";