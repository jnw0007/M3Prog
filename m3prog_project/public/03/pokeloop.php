<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $pokemons = ["pikachu", "primarina", "espeon", "minccino", "dratini"];
        $images = ["https://vignette.wikia.nocookie.net/ssbb/images/b/b8/025Pikachu_LG.png/revision/latest?cb=20190520161120&path-prefix=es", "https://th.bing.com/th/id/OIP.ec6ube6Ek6BlxTc_C1eKSgHaHx?rs=1&pid=ImgDetMain", "https://th.bing.com/th/id/OIP.WvgqfvXnO4ukfOq2awVGJAHaG1?rs=1&pid=ImgDetMain", "https://i.pinimg.com/originals/88/94/4a/88944a3f7f3d187bbf8929c5f49453e9.jpg", "https://vignette.wikia.nocookie.net/roblox-pokemon-project/images/a/af/Tumblr_static_dratini_hd.png/revision/latest?cb=20161114230350"];
        
        $lengte = count($pokemons);
        for ($i = 0; $i < $lengte; $i++)
        {
            echo $i. "<img src=$images[$i]>". "<h2>$pokemons[$i]</h2>". "<br>";
        }
   ?>
</body>
</html>