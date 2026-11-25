<?php
// Määritellään muuttujat
$laina = 12000;
$kuukausia = 36;
$kuukausimaksu = $laina / $kuukausia;
echo "Kuukausimaksu: " . round($kuukausimaksu, 2) . " €";