<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

$conn = new PDO('mysql:host=localhost;dbname=uczelnia', 'root', '');

$sql1 = "INSERT INTO studenci (imie, nazwisko, email, id_rok_studiow) VALUES (?,?,?,?)";
        
$conn->prepare($sql1)->execute(["Jan", "Kowalski", "jk@gmail.com", "1"]);
$conn->prepare($sql1)->execute(["Paweł", "Nowak", "Pn@wp.pl", "2"]);
$conn->prepare($sql1)->execute(["Ala", "Kot", "alak@interia.pl", "3"]);

$sql2 = "INSERT INTO rok (nazwa, kierunek, stopien) VALUES (?,?,?)";

$conn->prepare($sql2)->execute(["1", "Informatyka", "1"]);
$conn->prepare($sql2)->execute(["2", "Matematyka", "2"]);

?>
</body>
</html>