<?php
$title = "Mijn mooie website";
$datum = date('d-m-Y');
$tijd = date("H:i");
$favorieteGame = " Portal";
$mooisteGetal= 7;
$favFilm= "Murder Mystery";
$leuksteStad="Alkmaar";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h2>De datum vandaag is: <?php echo$datum;?>, en de tijd is <?php echo$tijd;?> uur.</h2>
    <h3>Mijn favoriete game is: <?php echo$favorieteGame;?></h3>
    <p>Mijn favoriete getal is: <?= $mooisteGetal?></p>
    <P>Mijn favoriete film is: <?= $favFilm?></p>
    <P>Ik kom uit: <?= $leuksteStad?></p>
</body>
</html>