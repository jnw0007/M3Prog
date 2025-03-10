<?php
    function mijnFunction()
    {
        return 1;
    }
    
    function returnVariable()
    {
        $result = rand();
        return $result;
    }

    $mijnFunctionResultaat = mijnFunction();
    echo $mijnFunctionResultaat;
    echo "<br>";
    echo returnVariable();
    echo "<br>";
    echo returnVariable();
    echo "<br>";
    echo returnVariable();
?>