<?php
    function berekenRitKosten($afstand_km, $km_per_liter, $liter_prijs)
    {
        $aantal_liters = $afstand_km / $km_per_liter;
        $kosten_euro = $aantal_liters * $liter_prijs;
        return $kosten_euro;
    }
    $berlijn = berekenRitKosten(663, 15, 1.90);
    $stockholm = berekenRitKosten(1439, 20, 1.46);
    $kyiv = berekenRitKosten(1991, 18.47, 2.23);

    echo "Berlijn: ". number_format($berlijn, 2). "<br>";
    echo "Stockholm: ". number_format($stockholm, 2). "<br>";
    echo "Kyiv: ". number_format($kyiv, 2);