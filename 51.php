<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

$conn = new PDO('mysql:host=localhost;dbname=uczelnia', 'root', '');

if($_GET["imie"] == NULL or $_GET["nazwisko"] == null or $_GET["email"] == null or $_GET["rok"] == null)
{
    echo "nie wypełniono wszystkich pól";
}
else{
$stmt = $conn->prepare("INSERT INTO studenci (imie, nazwisko, email, id_rok_studiow) VALUES (?, ?, ?, ?)");
$stmt->bindValue(1, $_GET["imie"], PDO::PARAM_STR);
$stmt->bindValue(2, $_GET["nazwisko"], PDO::PARAM_STR);
$stmt->bindValue(3, $_GET["email"], PDO::PARAM_STR);
$stmt->bindValue(4, $_GET["rok"], PDO::PARAM_INT);
$stmt->execute();
}
?>
</body>
</html>
