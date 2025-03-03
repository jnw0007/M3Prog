<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $announcements - [
            "a.html",
            "b.html",
            "c.html"
        ];
        $lengte = count($announcements);
        for ($i =0; $i < count($lengte) ; $i++)
        {
            $announcement = $announcements[$i];
            include "announcements/$announcement";
        }
    ?>
</body>
</html>