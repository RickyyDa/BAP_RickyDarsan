<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht 3</title>
</head>
<body>

<h1>Opdracht 3</h1>

<?php

$voornaam = 'Ricky';
$woonplaats = 'Assendelft';
$achternaam = 'Darsan';
$leeftijd = '17 jaar oud';
$hobby = 'voetbal';
$leeftijd2 = 18;

echo '<p>Hallo mijn naam is ' . $voornaam . ' ' . $achternaam . ' ik ben ' . $leeftijd .  ' een van mijn hobbys is ' . $hobby . ' en ik woon in ' . $woonplaats . '</p>';


    if ($leeftijd2 >= 18) {
        echo 'Jij bent jonger dan 18';
   } else {
        echo 'Jij bent 18 jaar of ouder';
    }




?>

</body>
</html>