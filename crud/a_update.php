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
    $id = $_POST['id'];
    
    
    $uploadError = '';


    $photo = file_upload($_FILES['picture']);
    if($photo->error===0){
        ($_POST["picture"]=="product.png")?: unlink("../pictures/$_POST[picture]");           
        $sql = "UPDATE objects SET  city = '$location', name = '$pname', price = '$price', description = '$description', longitude = '$longitude', latitude = '$latitude', picture = '$photo->fileName'  WHERE id = {$id}";
    }else{
        $sql = "UPDATE objects SET city = '$location', name = '$pname', description =price = '$price', description= '$description', longitude = '$longitude', latitude = '$latitude' WHERE id = {$id}";
    }    
    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($photo->error !=0)? $photo->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
        $uploadError = ($photo->error !=0)? $photo->ErrorMessage :'';
    }
    mysqli_close($connect);    
} 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <?php require_once "../components/boot.php" ?>
        <link rel="stylesheet" href="../css/style.css">
        <title>Update</title>
    
        
    </head>
    <body>
    <?php require_once "../components/navbar.php" ?>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Update request response</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../admin.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
        
        <?php require_once "../components/footer.php" ?> 
    </body>
</html>

