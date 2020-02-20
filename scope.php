<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php
      // local vars
      function myFunc(){
          $price = 10;
          echo $price;
      }
    //   myFunc();

      //global vars

      $name = 'mario';

    //   function sayHello(){
    //       global $name;
    //       echo "hello $name";
    //   }

    //   sayHello();

    function sayBye($name){
        echo "bye $name";
    }

    sayBye($name);

    ?>


</body>
</html>