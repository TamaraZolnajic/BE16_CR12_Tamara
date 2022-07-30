<?php

require_once 'components/db_connect.php';

$sql = "SELECT * FROM objects";
$result = mysqli_query($connect ,$sql);
$tbody= ''; 
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
      $tbody .= "<div class='card col-lg-4 col-md-6 col-xs-12 m-4 card shadow-lg p-1 gap-2' style='width: 24rem;'>
      <img src='pictures/{$row['picture']}' class='card-img-top' style='height:20rem; object-fit:cover'>
      <div class='card-body p-2 text-center'>
      <h3 class='card-title text-center p-2'>{$row['name']}</h3> <hr>
      <h6 class='card-text text-center p-2'> Usable area: {$row['size']} m2</h6>
      <h6 class='card-text text-center p-2'>Price: {$row['price']} €</h6>
      <a href='details.php?id={$row['id']}' class='btn btn-primary btn-lg w-100  '>Show Details</a>
    </div>
    </div>";
      
   };
} else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "components/boot.php"?>
  <link rel="stylesheet" href="css/style.css">

    <title>La casa mia</title>
</head>

<body>

<?php require_once "components/navbar.php" ?>

<div class="hero">
    <img class="hero-img" src="pictures/hero.jpg">

</div>

    <div class="container">
        <h1 class="text-center my-5 p-3 h-text" >See what we can offer: </h1>
    
      
          

      <div class="row justify-content-center">
         <?php echo $tbody; ?>
      </div>
    
      

   
</div>
 
 

  <?php require_once "components/footer.php" ?> 
</body>
</html>