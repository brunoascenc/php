<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <form method = "GET">
<input type = "text" name="nome">
<button>Enviar</button>
</form> -->
   
    <?php

    $blogs = [
        ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'links' => 30],
        ['title' => 'mario kart', 'author' => 'toad', 'content' => 'lorem', 'links' => 25],
        ['title' => 'zelda', 'author' => 'link', 'content' => 'lorem', 'links' => 50]
    ];

    // print_r($blogs[1][1);
    // echo $blogs[2]['author'];
    // echo count($blogs)
    $blogs[] = ['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem', 'likes' => 100];
    print_r($blogs);
    
    ?>


</body>
</html>