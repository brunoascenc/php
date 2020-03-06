<?php
   include('config/db_connect.php');

   //check get request id parameter
   if(isset($_GET['id'])){

      $id = mysqli_real_escape_string($conn, $_GET['id']);

      //make sql
      $sql = "SELECT * FROM pizzas WHERE id = $id";

      // get the query result
      $result = mysqli_query($conn, $sql);

      // fetch result in array format
      $pizza = mysqli_fetch_assoc($result);

      mysqli_free_result($result);
      mysqli_close($conn);

    //   print_r($pizza);

   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include('templates/header.php');?>
<div class = "container">
  <?php if($pizza): ?>
    <h4><?php echo htmlspecialchars($pizza['title']);?></h4>
    <p>Created by: <?php echo htmlspecialchars($pizza['email']); ?></p>
    <p><?php echo date($pizza['created_at']); ?></p>
    <h5>Ingredients:</h5>
    <p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>
    
  <?php else: ?>
   <h5>Not found</h5>
  <?php endif; ?>
</div>

<?php include('templates/footer.php');?>
    
</body>
</html>