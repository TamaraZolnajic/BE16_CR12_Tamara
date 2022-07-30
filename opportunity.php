<?php

require_once 'components/db_connect.php';
$sql = "SELECT * FROM objects WHERE reduction = 'yes' "; 
$result = mysqli_query($connect, $sql);

$tbody="";

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        
        $tbody .= "
        <div class='card col-lg-6 col-md-6 col-xs-12 m-5 card shadow-lg p-0 justify-content-center' style='width: 30rem;'>
        <img src='pictures/{$row['picture']}' class='card-img-top' style='height:25rem; object-fit:cover'>
        <div class='card-body p-0'>
        <h5 class='card-title text-center p-2'>{$row['name']}</h5> <hr>
        <div>
        <p class='card-text text-center'><b>City: </b>{$row['city']}</p>
        <p class='card-text text-center'><b>ZIP Code: </b>{$row['address']}</p>
        <p class='card-text text-center mb-5'><b>Size: </b>{$row['size']}&#x33A1</p>
        
        </div>
        
        </div>
      </div>";
    }
}else {
    $tbody="
       <tr>
         <td> colspan='5' class='text-center'>Not Data </td>
        </tr>
    
    ";

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "components/boot.php"?>
    <link rel="stylesheet" href="css/style.css">
   
    <title>Opportunity site</title>
    
</head>

<body>

<?php require_once "components/navbar.php" ?>

    <div class="container">
      
     <div class="row justify-content-center text-center">
        <?php echo $tbody ?>
        <a href= 'index.php'><button class='btn btn-success btn-lg w-25 mb-5 text-center' type='button'>Go Back</button></a>
     </div>
    </div>


<?php require_once "components/footer.php" ?>
</body>
</html>