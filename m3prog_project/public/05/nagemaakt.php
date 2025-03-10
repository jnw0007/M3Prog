<?php
    function mijnPrint($printText)
    {
        print("$printText");
        print("<br>");
    }

    $dezeGaatMee = "deze waarde wordt meegenomen";
    mijnPrint("regel 1");
    mijnPrint("regel 2");
    mijnPrint("regel 3");
    mijnPrint("de variabele printText heeft geen definitie, dus je moet zelf invullen als je de function mijnPrint oproept");
    mijnPrint($dezeGaatMee);
?>