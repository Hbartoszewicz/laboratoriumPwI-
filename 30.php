<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
$file = 'plik.txt';
$current = file_get_contents($file);
$current = "Hello, World!";
file_put_contents($file, $current);
?>
</body>
</html>