<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
</head>
<body>
<form action="53.php"  method="POST">
    <select name="studenci" id="studenci">
        <?php

        $conn = new PDO('mysql:host=localhost;dbname=uczelnia', 'root', '');


        $stmt = "SELECT id, imie, nazwisko FROM studenci";

        foreach ($conn->query($stmt) as $row) {
            print
            "<option value = '$row[id]' >"
             .$row['imie']. " "
             .$row['nazwisko']
             ."</option>";
        }
        
        ?>
        </select>
        <button>Usuń</button>
    </form>
</body>
</html>
