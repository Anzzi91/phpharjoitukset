<?php
// Määritellään muuttujat
$sekunnit = 5000;
$minuutit = floor(($sekunnit % 3600) / 60);
$tunnit = floor($sekunnit / 3600);
$sekunnit_jaljella = $sekunnit % 60; 
echo "Tunnit: " . $tunnit . "<br>";
echo "Minuutit: " . $minuutit . "<br>";
echo "Sekunnit jäljellä: " . $sekunnit_jaljella . "<br>";