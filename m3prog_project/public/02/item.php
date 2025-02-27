<?php 
    $name = "Immortal King's Soul Cage";
    $defense = 400;
    $hitrec = 25;
    $coldres = 40;
    $fireres = 40;
    $lightningres = 40;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $name; ?></h1>
    <ul>+<?php echo $defense; ?> Defense</ul>
    <ul>+<?php echo $hitrec; ?>% Faster hit recovery</ul>
    <ul>+<?php echo $coldres; ?>% Cold resistance</ul>
    <ul>+<?php echo $fireres; ?>% Fire resistance</ul>
    <ul>+<?php echo $lightningres; ?>% Lightning resistance</ul>
</body>
</html>