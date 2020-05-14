<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

$conn = new PDO('mysql:host=localhost;dbname=uczelnia', 'root', '');

$conn -> exec("INSERT INTO studenci (imie, nazwisko, email, id_rok_studiow) VALUES ('Jan', 'Kowalski', 'jk@gmail.com', 1)");  
$conn -> exec("INSERT INTO studenci (imie, nazwisko, email, id_rok_studiow) VALUES ('Paweł', 'Nowak', 'Pn@wp.pl', 2)");        
$conn -> exec("INSERT INTO studenci (imie, nazwisko, email, id_rok_studiow) VALUES ('Ala', 'Kot', 'alak@interia.pl', 3)");        
$conn -> exec("INSERT INTO rok (nazwa, kierunek, stopien) VALUES (1, 'Informatyka', 1)");        
$conn -> exec("INSERT INTO rok (nazwa, kierunek, stopien) VALUES (2, 'Matematyka', 2)");        

?>
</body>
</html>
