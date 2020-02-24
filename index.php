<?php 
  // connect to database
  $conn = mysqli_connect('localhost', 'bnx', 'test123', 'pizza');

  // check conn
  if(!$conn){
      echo 'connection error: ' . mysqli_connect_error();
  }

  // query for all pizzas
  $sql = 'SELECT title, ingredients, id FROM pizzas';

  // make query n get result
  $result = mysqli_query($conn, $sql);

  // fetch the result as an array
  $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // free result from memory
  mysqli_free_result($result);

  //close connection
  mysqli_close($conn);


  print_r($pizzas);


?>
<!DOCTYPE html>
<html>

<?php include('templates/header.php');?>

<?php include('templates/footer.php');?>
    
</html>