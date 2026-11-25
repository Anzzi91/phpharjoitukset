<?php
// Määritellään muuttujat
$paaoma = 2000;
$korko = 2.5;
$korkotuotto = $paaoma * $korko / 100;
$kokonaistuotto = $paaoma + $korkotuotto;
echo "Korkotuotto: " . round($korkotuotto, 2)   . " €<br>";
echo "Kokonaistuotto: " . round($kokonaistuotto, 2) . " €";
