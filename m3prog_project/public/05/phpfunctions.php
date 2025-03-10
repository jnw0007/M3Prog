<?php
    $hoeLangIsDitWoord = "scrabbleWoord";
    $woordLengte = strlen($hoeLangIsDitWoord);
    $hoeLangIsDitAndereWoord = "Supercalifragilisticexpialidocious";
    print($woordLengte). "<br>";
    echo strlen($hoeLangIsDitWoord). "<br>";
    echo strlen($hoeLangIsDitAndereWoord). "<br>";
    // vraag 1 : string
    // vraag 2 : int
    //vraag 3 : de nummer wat strlen teruggeeft is de lengte van de gegeven string (strlen = string length)
    // vraag 4: 3 keer

    print pow(2,2). "<br>";
    print pow(2,10). "<br>";

    $derdeMacht = pow(3,4);
    echo $derdeMacht;
    print("<br>");
    print(pow(3,4)). "<br>";
    //vraag 1: je geeft het resultaat door met print/echo

    //https://www.php.net/manual/en/function.strtoupper.php
    $naam = "Wario";
    $naamGroot = strtoupper($naam);
    $naamKlein = strtolower($naamGroot);

    echo $naam. "<br>";
    echo $naamGroot. "<br>";
    echo $naamKlein. "<br>";
?>