<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht 4</title>
</head>
<body>
<form action="readform.php" method="post">
   <label>Woonplaats:</label>
    <input type="text" name="woonplaats" placeholder="woonplaats" />
<br>
    <label>Leeftijd:</label>
    <input type="number" name="leeftijd" placeholder="Leeftijd" />
<br>
    <label>Email:</label>
    <input type="email" name="email" placeholder="Vul hier jouw e-mail in" />
    <br>
    <br>
    <input type="submit" name="submit" value="verzenden" />
</form>
<style>
body {
    background-color: aqua;
    font-family: cursive;
}
</style>

</body>
</html>