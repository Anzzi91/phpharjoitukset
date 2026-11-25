<?php
//Määritellään muuttujat
$paino = 70;
$pituus = 1.75;
$ika = 30;
$kalorit = 10 * $paino + 6.25 * $pituus * 100 - 5 * $ika + 5;
echo "Päivittäinen kaloritarve: " . round($kalorit, 2) . " kcal";