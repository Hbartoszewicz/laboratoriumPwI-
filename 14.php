
<?php
if($_POST["liczba1"] == NULL or $_POST["liczba2"] == null)
{
    echo "nie podano pierwszej/drugiej liczby<br>";
}
else{
    echo "dodawanie: ".($_POST["liczba1"]+$_POST["liczba2"])."<br>";
    echo "odejmowanie: ".($_POST["liczba1"]-$_POST["liczba2"])."<br>";
    echo "mnożenie: ".($_POST["liczba1"]*$_POST["liczba2"])."<br>";
    if($_POST["liczba2"] == 0){
        echo "nie wolno dzielić przez 0!<br>";
    }
    else{
    echo "dzielenie: ".($_POST["liczba1"]/$_POST["liczba2"])."<br>";
    }
}

?>