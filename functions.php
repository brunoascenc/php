<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php
      function firstFunction($name){
          echo "oi $name";
      }
    //   firstFunction('sss');

      function formatProduct($product){
          return "{$product['name']} costs ${$product['price']} to buy <br/>";
      }

    //   $formatted = formatProduct(['name' => 'gold star', 'price' => 20]);
    //   echo $formatted;

    ?>


</body>
</html>