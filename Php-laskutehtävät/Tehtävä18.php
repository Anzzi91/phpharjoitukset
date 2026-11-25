<?php
// Määritellään muuttujat
$askeleet = 8500;
$kcAskeleet = 0.04;
$kalorit = $askeleet * $kcAskeleet;
echo "Kulutetut kalorit: " . round($kalorit, 2) . " kcal";