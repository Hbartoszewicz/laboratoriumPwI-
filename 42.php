<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

$conn = new PDO('mysql:host=localhost;dbname=uczelnia', 'root', '');

$sql = "DELETE FROM studenci WHERE id = 2";
$conn->query($sql);
?>
</body>
</html>