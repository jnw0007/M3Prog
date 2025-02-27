<?php 
    $stad = "Amsterdam";
    $weer = "zonnig";
    $aantalMensen = 934.927;
    $huidigTemp = 10.7;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        In <?php echo $stad ?> leven <?php echo $aantalMensen ?> mensen. Het is <?php echo $weer ?>. De temperatuur is nu <?php echo $huidigTemp ?> graden.
    </p>
</body>
</html>