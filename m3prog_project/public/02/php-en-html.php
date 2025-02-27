<?php 
    $titel = "Een php html voorbeeld pagina";
    $afbeeldingurl = "https://i0.wp.com/redhistoria.com/wp-content/uploads/2022/05/historia-de-internet.jpeg?fit=1200%2C862&ssl=1";
    $alternatieveTekst = "afbeelding van het internet";
    $auteur = "jnw0007";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titel; ?></title>
</head>
<body>
    <img src="<?php echo $afbeeldingurl; ?>"
    alt= "<?php echo $alternatieveTekst; ?>">
    <section>Auteur: <?php echo $auteur; ?></section>
</body>
</html>