<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

$conn = new PDO('mysql:host=localhost;dbname=motoryzacja', 'root', '');

$sql = 'SELECT marka, model, pojemnosc FROM samochody where id = 1 or id = 3 ';
foreach ($conn->query($sql) as $row) {
    print $row['marka'] . "\t";
    print $row['model'] . "\t";
    print $row['pojemnosc'] . "\n";
}

?>
</body>
</html>