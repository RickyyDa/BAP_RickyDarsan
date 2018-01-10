 <?php
$woonplaats = $_POST['woonplaats'];
$leeftijd = $_POST['leeftijd'];
$email = $_POST['email'];
echo '<h1> Jij woont in ' . $woonplaats . '</h1>';
echo '<h1> Jij bent ' . $leeftijd . ' jaar oud </h1>';
echo '<h1> Jouw E-Mail is ' . $email . ' </h1>';

if ($leeftijd < 18) {
    echo 'Jij mag nog geen alcohol drinken ';
} else {
    echo ' Jij mag alcohol drinken';
}
?>
<br><br>

<?php
switch ($woonplaats) {
    case "Amsterdam";
        echo 'Jij woont in Amsterdam.<br><br>';
        break;
    case "Zaandam";
        echo 'Ricky woont in Zaandam.<br><br>';
        break;
    case "Rotterdam";
        echo 'Rotterdam is een grote stad.<br><br>';
        break;
    case "Utrecht";
        echo 'Utrecht is heel groot.<br><br>';
        break;
    case "Lelystad";
        echo 'Joey woont in Lelystad.<br><br>';
        break;
    default:
        echo 'Jij hebt iets anders gekozen.';
}
?>
<br><br>
<?php

switch ($leeftijd) {
    case "17";
        echo 'Jij bent 17<br><br>';
        break;
    case "18";
        echo 'Jij bent 18<br><br>';
        break;
    case "19";
        echo 'Jij bent 19<br><br>';
        break;
    case "20";
        echo 'Jij bent 20<br><br>';
        break;
    case "21";
        echo 'Jij bent 21<br><br>';
        break;
    default:
        echo 'Jij bent jonger dan 17 of ouder dan 21';
}

?>
 <br><br>

 <?php

switch ($email) {
    case "2349@ma-web.nl";
        echo 'Random schoolmail van iemand<br><br>';
        break;
    case "25296@ma-web.nl";
        echo 'Schoolmail van Ricky<br><br>';
        break;
    case "24539@ma-web.nl";
        echo 'Schoolmail van Mitchel<br><br>';
        break;
    case "j.Schmitz@ma-web.nl";
        echo 'Schoolmail van joey<br><br>';
        break;
    case "24800@ma-web.nl";
        echo 'Schoolmail van oliver<br><br>';
        break;
    default:
        echo 'Dit is geen schoolmail';
}

?>

<style>
    body {
        background-color: aqua;
        font-family: cursive;
    }
</style>
