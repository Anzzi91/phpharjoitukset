<?php
// Määritellään muuttujat
$oikein = 37;
$yhteensä = 45;
$prosentti = ($oikein / $yhteensä) * 100;
echo "Oikein vastattujen määrä: " . $oikein . "<br>";
echo "Yhteensä kysymyksiä: " . $yhteensä . "<br>"; 
echo "Oikeita vastauksia: " . round($prosentti, 2) . " %";