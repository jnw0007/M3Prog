<?php
    function berekenRitKosten($afstand_km, $km_per_liter, $liter_prijs)
    {
        $aantal_liters = $afstand_km / $km_per_liter;
        $kosten_euro = $aantal_liters * $liter_prijs;
        return $kosten_euro;
    }
    $kosten = berekenRitKosten(500, 20, 2.45);
    echo $kosten. "<br>";
    echo berekenRitKosten(1000, 20, 1.87);
?>
