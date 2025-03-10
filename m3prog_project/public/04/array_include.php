<?php
    $reviews = [
        ["demon's souls", 10, "Best souls game ever!"],
        ["mario wonder", 9.5, "conclusie"],
        ["mega man 2", 8, "conclusie sequel"],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $announcements = [
            "a.html",
            "b.html",
            "c.html",
            "d.html",
            "e.html"
        ];
        $lengte = count($announcements);
        for ($i = 0; $i < $lengte; $i++)
        {
            $announcement = $announcements[$i];
            include "announcements/$announcement";
        }
        $lengte = count($reviews);
        for ($i = 0; $i < $lengte; $i++)
        {
            $review = $reviews[$i];
            $title = $review[0];
            $cijfer = $review[1];
            $conclusie = $review[2];
            echo "<h1>$title</h1>". "<p>$cijfer</p>". "<br>". "<p>$conclusie</p> <br>";
        }
    ?>
</body>
</html>