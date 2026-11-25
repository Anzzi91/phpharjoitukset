<?php
// Määritellään muuttujat
$ruoka = 24.50;
$juoma = 6.80;
$tippiprosentti = 10;
$summa = $ruoka + $juoma;
$tippi = $summa * ($tippiprosentti / 100);
echo "Ruoan hinta: " . $ruoka . " €<br>";
echo "Juoman hinta: " . $juoma . " €<br>";
echo "Tipin prosentti: " . $tippiprosentti . " %<br>";
echo "Summa: " . $summa . " €<br>";
echo "Tippi: " . round($tippi, 2) . " €<br>";
echo "Kokonaiskustannukset: " . round($summa + $tippi, 2) . " €";
