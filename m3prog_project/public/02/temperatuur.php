<?php
   //fahrenheit naar celsius
   $fahrenheit = 74;
   $celsius = ($fahrenheit-32)/1.8;
   echo "{$fahrenheit} graden fahrenheit = {$celsius} graden celsius. <br/>";
   
   //celsius naar fahrenheit
   $celsius = 44;
   $fahrenheit = ($celsius+32)*1.8;
   echo "{$celsius} graden celsius = {$fahrenheit} graden fahrenheit. <br/>";

   //celsius naar kelvin
   $celsius = 66;
   $kelvin = $celsius+273.15; 
   echo "{$celsius} graden celsius = {$kelvin} graden kelvin. <br/>";

   //fahrenheit naar kelvin
   $fahrenheit = 82;
   $kelvin = ceil(($fahrenheit-32)*5/9+273.15); 
   echo "{$fahrenheit} graden celsius = {$kelvin} graden kelvin. <br/>";
?>