<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title>Vliegkosten</title>
</head>
<body>
    <?php
        include_once "vliegkostenfunctions.php";
        $reis1 = Retourprijs(3722, 2.05, 20, false);
        $reis2 = Retourprijs(9276, 3.11, 10, false);
        $reis3 = Retourprijs(803, 2.83, 0, true);
    ?>
<div>
    <h1>Vliegkosten</h1>
    <li><?php echo "<p>"."Reis 1 €"."</p>". number_format($reis1, 2). "<br>"; ?></li>
    <li><?php echo "<p>"."Reis 2 €"."</p>". number_format($reis2, 2). "<br>"; ?></li>
    <li><?php echo "<p>"."Reis 3 €"."</p>". number_format($reis3, 2). "<br>"; ?></li>
</div>
</body>
</html>