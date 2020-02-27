<?php 
include('config/db_connect.php');
$errors = array('email' =>'', 'title' => '', 'ingredients' => '');
$email = '';
$title = '';
$ingredients = '';


if(isset($_POST['submit'])){
    // echo htmlspecialchars($_POST['email']);
    // echo htmlspecialchars($_POST['title']);
    // echo htmlspecialchars($_POST['ingredients']);
    
    //check 
    if(empty($_POST['email'])){
        $errors['email']= 'Email required <br/>';
    }else{
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email']= 'invalid email';
        }
    }

    if(empty($_POST['title'])){
        $errors['title']= 'Title required <br/>';
    }else{
        $title = $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
            $errors['title']= 'invalid title';
        }
    }

    if(empty($_POST['ingredients'])){
        $errors['ingredients']= 'Ingredients required <br/>';
    }else{
        $ingredients = $_POST['ingredients'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
            $errors['ingredients']=  'dont forget comma';
        }
    }

    if(!array_filter($errors)){
        header('Location: content2.php');
    }  else{
        $email = mysqli_real_scape_string($conn, $_POST['email']);
        $title = mysqli_real_scape_string($conn, $_POST['title']);
        $ingredients= mysqli_real_scape_string($conn, $_POST['ingredients']);
        // echo 'form is valid';

        //create sql
        $sql = "INSERT INTO pizzas(title,email,ingredients) VALUES('$title', '$email', '$ingredients')";

        //save to db and check
        if(mysql_query($conn, $sql)){
            //success
            header('Location: indexdd.php');
        }else{
            //error
            echo 'query error: ' . mysqli_error($conn);
        }
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<?php include('templates/header.php');?>

<section class="container">
    <h4 class="center">Add a Pizza</h4>
    <form class = "white" action="form.php" method="POST">
        <label for="">Your Email:</label>
        <input type="text" name="email" value="<?php echo $email?>">
        <div class = "red-text"><?php echo $errors['email']; ?></div>
        <label for="">Pizza Title:</label>
        <input type="text" name="title" value="<?php echo $title?>">
        <div class = "red-text"><?php echo $errors['title']; ?></div>
        <label for="">Ingredients (comma separated):</label>
        <input type="text" name="ingredients" value="<?php echo $ingredients?>">
        <div class = "red-text"><?php echo $errors['ingredients']; ?></div>
        <div class ="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0" >
        </div>
    </form>
</section>

<?php include('templates/footer.php');?>
    
</html>