<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Products</h1>
<ul>
  <?php foreach($products as $product){ ?>
  <h3><?php echo $product['name'];?></h3>
  <p><?php echo $product['price'];?></p>
    
   <?php } ?>
</ul>
   
    <?php
    $nomes = ['bruno', 'ana', 'joao'];

    // for($i = 0; $i < count($nomes); $i++){
    //     echo $nomes[$i] . '<br/>';
    // }

    // foreach($nomes as $nome){
    //     echo $nome . '<br/>';
    // }

    $products = [
        ['name' => 'shiny star', 'price' => 20],
        ['name' => 'green shell', 'price' => 10],
        ['name' => 'red shell', 'price' => 15],
        ['name' => 'gold coin', 'price' => 5],
        ['name' => 'lightning bolt', 'price' => 40],
        ['name' => 'banana skin', 'price' => 2]
    ];

    // foreach($products as $product){
    //     echo $product['name'] . ' - ' . $product['price'];
    //     echo '<br/>';
    // }

    // $i = 0;
    // while($i < count($products)){
    //     echo $products[$i]['name'];
    //     echo '<br/>';
    //     $i++;
    // }






    ?>


</body>
</html>