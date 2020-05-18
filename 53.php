<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
</head>
<body>
        <?php

        $conn = new PDO('mysql:host=localhost;dbname=uczelnia', 'root', '');

        $stmt = 'DELETE FROM studenci WHERE id = :id';
        $stmt = $conn->prepare($stmt);
        $stmt->bindValue(':id', $_POST["studenci"], PDO::PARAM_INT);
        $stmt->execute();
        ?>
</body>
</html>
