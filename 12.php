
<?php
if($_GET["liczba1"] == NULL or $_GET["liczba2"] == null)
{
    echo "nie podano pierwszej/drugiej liczby<br>";
}
else{
    echo "Liczba pierwsza: ".$_GET["liczba1"]."<br>";
    echo "Liczba druga: ".$_GET["liczba2"]; 
}

?>