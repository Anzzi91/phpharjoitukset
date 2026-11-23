<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muuttujat</title>
</head>
<body>

<?php
echo "Muuttujat määritellään näin php kielessä";
echo "<br>";
$etunimi = "Anssi";
$ika = 35;
//tulostus
echo $etunimi;
echo "<br>";
echo $ika;
echo "<br>";

echo $etunimi . " on " . $ika . " vuotta vanha.";
echo "<br>";
// näinkin voi tehdä
echo "Nimi on $etunimi";




?>

    
</body>
</html>