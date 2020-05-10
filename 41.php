<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

$conn = new PDO('mysql:host=localhost;dbname=uczelnia', 'root', '');

$sql = "UPDATE studenci SET nazwisko = 'Malinowski' WHERE id = 3";
$conn->query($sql);
?>
</body>
</html>