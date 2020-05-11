<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

$conn = new PDO('mysql:host=localhost;dbname=uczelnia', 'root', '') ;

$sql = "SELECT s.imie, s.nazwisko, r.kierunek, r.stopien FROM studenci s JOIN rok r ON (s.id_rok_studiow = r.id)";
foreach ($conn->query($sql) as $row) {
    print $row['imie'] . "\t";
    print $row['nazwisko'] . "\t";
    print $row['kierunek'] . "\t";
    print $row['stopien'] . "<br>\n";
}
?>
</body>
</html>
