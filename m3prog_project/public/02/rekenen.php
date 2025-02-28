<?php
    $getal = 3.54326;
    $roundUp = ceil($getal);
    echo "Als je $getal naar boven afrond krijg je: $roundUp<br><br>";

    $getal2 = 329.63352;
    $roundDown = floor($getal);
    echo "Als je $getal2 naar beneden afrond krijg je: $roundDown<br><br>";

    $random1 = rand();
    $random2 = rand();
    $random3 = rand();
    $berekening1 = $random1+$random2;
    $berekening2 = ($random1+$random2)/$random3;
    echo "$berekening1 <br><br>";
    echo $berekening2;
?>