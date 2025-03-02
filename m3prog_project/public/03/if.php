<?php 
    $eenBoolVariable =false;
    $aantalOpVoorraad = 10;
    $opvoorraad = $aantalOpVoorraad > 0;
    if($opvoorraad == false)
    {
        echo "niet op voorraad<br>";
    }
    else{
        echo "artikel is op voorraad<br>";
    }

    if($aantalOpVoorraad < 0)
    {
        echo "niet op voorraad<br>";
    }
    else{
        echo "artikel is op voorraad<br>";
    }
?>