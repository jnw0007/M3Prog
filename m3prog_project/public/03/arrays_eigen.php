<?php
    $games = ["minecraft", "portal", "halo", "slime rancher", "supermarket simulator"];
    
    echo "<h2>print_r</h2><br>";
    print_r($games);
    //echo nu het 3de en 5de element van jouw array in arrays_uitleg.php
    //???^^^^
    echo "<br><h2>var_dump</h2><br>";
    var_dump($games);
    //array functions:
    //count = als je wilt weten hoeveel dingen in een array zitten, gebruik je count()
    //array_push = iets toevoegen aan een array kan met array_push of []
    //implode = met implode() kan je alle elementen aan elkaar plakken en omzetten tot een string met een scheidingsteken
    //sort = sorteert je array op alfabetische volgorde
    echo "<br><h2>array functions</h2>";

    echo "<h4>count()</h4>";
    echo count($games), "<br>"; 

    echo "<h4>array push()</h4>";
    array_push($games, "super meat boy");
    $games[] = "team fortress 2";
    echo count($games), "<br>";
 
    echo "<h4>implode()</h4>";
    echo implode(", ", $games);
    echo "<br>";
    // ", " is het scheidingsteken
    echo implode(",<br>", $games);

    echo "<br>";
    echo "<br>";
    sort($games);
    print_r($games);
    echo implode(",<br>", $games);
?>