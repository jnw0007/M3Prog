<?php
    //amsterdam > bordeaux
    //1L:15KM
    $afstand = 1083.30;
    $Euro95 = 0.83;
    $treinReis = 60;
    $tankInhoud = 50;
    $literTanken = 72.22;
    $keerTanken = 2;
    $autoKosten = ($Euro95*$literTanken);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reis naar Bordeaux</title>
</head>
<body>
    <h1>
        <?php 
        if($autoKosten > $treinReis)
        {
          echo "Ik ga met de trein<br />";
        }
        else
        {
            echo "Ik ga met de auto<br />";
        }
        ?>    
    </h1>
    <ul><?php echo "de afstand van Amsterdam naar Bordeaux is $afstand km<br />"; ?></ul>
    <ul><?php echo "de treinreis kost $treinReis<br />"; ?></ul>
    <ul><?php echo "de benzine kost $autoKosten<br />"; ?></ul>
    <ul><?php echo "de reis kost $literTanken liter benzine<br />"; ?></ul>
    <ul><?php echo "er moet $keerTanken keer getankt worden<br />"; ?></ul>
</body>
</html>