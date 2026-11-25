<?php
// Määritellään muuttujat
$perusaineenvaihdunta = 1750; // kcal
$aktiivisuus = 1.4;
$lisaAerobinen = 300; // kcal
// Lasketaan päivittäinen energiantarve
$paivittainenEnergiantarve = $perusaineenvaihdunta * $aktiivisuus + $lisaAerobinen;
// Tulostetaan tulos
echo "Päivittäinen energiantarve: " . round($paivittainenEnergiantarve, 2) . " kcal";
