<?php
    function Retourprijs($afstand_km, $literprijs_kerosine, $kilo_bagage, $bus_class)
    {
      $retourprijs = $literprijs_kerosine * $afstand_km / 30 + (5 * $kilo_bagage);
      if($bus_class == true){
        return $retourprijs * 1.5;
      }
      else{
        return $retourprijs;
      }
    }
?>