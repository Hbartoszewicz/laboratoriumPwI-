<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

$conn = new PDO('mysql:host=localhost;dbname=uczelnia', 'root', '');
$conn -> exec("UPDATE studenci SET nazwisko = 'Malinowski' WHERE id = 3"); 
 
?>
</body>
</html>
