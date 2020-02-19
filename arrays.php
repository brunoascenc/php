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

    // indexed arrays
  
    $names =  ['bruno', 'ana', 'luis', 'tiringa'];

    // echo $names[0];

    $names2 = array('ken', 'chun-li');
    // echo $names2[1];

    $ages = [20,30,40,50,60];
    // print_r($ages);

    $ages[1] = 25;
    // print_r($ages);

    $ages[] = 70;
    // print_r($ages);

    array_push($ages, 80);
    // print_r($ages);

    // echo count($ages);

    $teste = array_merge($names, $names2);
    // print_r($teste);

    // associative arrays (keys e valores)

    $nomesOne = ['oksj' => 'black', 'mario'=>'luigi', 'bruno'=>'brown'];
    // echo $nomesOne['mario'];
    // print_r($nomesOne);

    $nomesOne['toad'] = 'pink';
    // print_r($nomesOne);

    echo count($nomesOne);
    ?>


</body>
</html>