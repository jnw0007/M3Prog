<?php
    function add($getal1, $getal2)
    {
        $som = $getal1 + $getal2;
        return $som;
    }

    //print add(100, 100);
    echo "<br>";
    print add(4, 9);
    echo "<br>";
    print add(33, 33);
    echo "<br>";

    function subtract($getal1, $getal2)
    {
        $som = $getal1 - $getal2;
        return $som;
    }

    function divide($getal1, $getal2)
    {
        $som = $getal1 / $getal2;
        return $som;
    }

    function multiply($getal1, $getal2)
    {
        $som = $getal1 * $getal2;
        return $som;
    }

    print subtract(100, 24);
    echo "<br>";
    print divide(4, 2);
    echo "<br>";
    print multiply(4, 4);
?>