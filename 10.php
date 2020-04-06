<?php

for ($i = 1; $i <= 15; $i++) {
    echo $i."<br>";
}

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15);

foreach ($arr as &$value) {
   echo $value."<br>";
}

$i = 1;
while ($i <= 15) {
    echo $i++."<br>";  
}
?>