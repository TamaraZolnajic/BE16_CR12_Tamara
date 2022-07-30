<?php
require_once '../components/db_connect.php';
require_once 'file_upload.php';


if ($_POST) {   
    
    $pname = $_POST['name'];
    $location = $_POST['city'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
    $reduction = $_POST['reduction'];
    $uploadError = '';
    
  $photo= file_upload($_FILES['picture']);  

  
  $sql = "INSERT INTO objects (name, city, price, description, longitude, latitude, picture, reduction) 
  VALUES ('$pname', '$location', '$price', '$description', '$longitude', '$latitude','$photo->fileName','$reduction' )";

  if (mysqli_query($connect, $sql) === true) {
      $class = "success";
      $message = " 
        <div class='container text-center justify-content-center'>
            <div class='row text-center justify-content-center'>
                

            </div>
      
          <table class='table text-center'><tr>
          <td> $pname </td>
          <td> $location </td>
          <td> $price </td>
          <td> $description </td>
          <td> $longitude </td>
          <td> $latitude </td>
          <td> $reduction </td>
          </tr></table><hr>
        </div>";
      $uploadError = ($photo->error !=0)? $photo->ErrorMessage :'';
      
  } else {
      $class = "danger";
      $message = "Error while creating record. Try again: <br>" . $connect->error;
      $uploadError = ($photo->error !=0)? $photo->ErrorMessage :'';
  }
  mysqli_close($connect);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Create Property</title>
        <link rel="stylesheet" href="../css/style.scss">
        <?php require_once "../components/boot.php"?>
        <link rel="stylesheet" href="../css/style.css">
    
    </head>
    <body>
    <?php require_once "../components/navbar.php"?>
            <div class="row text-center justify-content-center my-5">
                
             <div class="conteiner">
                    <h3>You have added a new Property!</h3>
                    </div>
               
         
        <div class="container">

            <div class="text-center justify-content-center my-5 alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../admin.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
        <?php require_once "../components/footer.php"?>

    </body>
</html>
