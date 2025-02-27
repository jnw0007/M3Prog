<?php
    $standaardString = 'hello world<br>';
    $extraString = "extra world<br>";
    $totaleString = "hello" ." ". "world". "<br>";
    $naamLuigi = "Luigi";
    $naamMario = "Mario";
    $fullname1 = "$naamLuigi $naamMario <br>";
    $fullname2 = $naamLuigi. " " .$naamMario ."<br><br>";
    echo $totaleString;
    echo $fullname1;
    echo $fullname2;

    /////

    $naam = "Yoshi";
    $ondertekentDoor = "Directeur Bowser";
    $enemy = "Koopa Troopa";
    $emailTekst = 
    "Beste $naam<br>
    Helaas moeten wij uw verzoek afwijzen.<br>
    Onze $enemy's vinden het niet leuk om opgegeten te worden<br>
    <br>
    Hoogachtend<br>
    $ondertekentDoor<br>
    <br>
    PS:<br>
    De princess is in haar kasteel... voor nu :>";

    echo $emailTekst
?>