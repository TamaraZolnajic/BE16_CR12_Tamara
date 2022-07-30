<?php
 
require_once 'components/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM objects WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $pname = $data['name'];
        $location = $data['city'];
        $price = $data['price'];
        $description = $data['description'];
        $longitude = $data['longitude'];
        $latitude = $data['latitude'];
        $photo = $data['picture']; 
    } else {
        header("location: ../error.php");
    }
    mysqli_close($connect);
} else {
   header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Property</title> 
       
        <?php require_once 'components/boot.php' ?>
        <link rel="stylesheet" href="css/style.css">
         
    </head>
    <body>
    
    <?php require_once 'components/navbar.php' ?>
    
        <div class="container">
            <div class="row text-center justify-content-center">
                 <h3 class="h-text my-5">Update request</h3>
                 <img class="" src='pictures/<?php echo $photo ?>' alt="<?php echo $photo ?>">
                    
            </div>

        
        
        


        <fieldset>
            <form action="crud/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table text-dark">
                <tr>
                    <th>Property name</th>
                    <td><input class='form-control' type="text" name="name" placeholder="Property name" value="<?php echo $pname ?>" /></td>
                </tr>
                <tr>
                    <th>Location</th>
                    <td><input class='form-control' type="text" name="city" placeholder="Location" value="<?php echo $location ?>" /></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><input class='form-control' type="number" name="price"  placeholder="Price" value="<?php echo $price ?>" /></td>
                </tr>
                <tr>
                    <th>Photo</th>
                    <td><input class='form-control' type="file" name="picture"  placeholder="Photo"/></td>
                </tr>
                <tr>
                    <th>Longitude</th>
                    <td><input class='form-control' type="decimal" name="longitude"  placeholder="Longitude" value="<?php echo $longitude ?>" /></td>
                </tr>
                <tr>
                    <th>Latitude</th>
                    <td><input class='form-control' type="decimal" name="latitude"  placeholder="Latitude" value="<?php echo $latitude ?>" /></td>
                </tr>
                <tr>
                    <th>Price reduction</th>
                    <td>
		 	           <select id="inputState" class="form-control" name="reduction"  value="<?php echo $reduction ?>">
		 		        <option value="yes">Yes</option>
		 		        <option value="no">No</option> 
		 	           </select>
                    </td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><input class='form-control' type="text" name="description"  placeholder="Description" value="<?php echo $description ?>" /></td>
                </tr>


                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" /> 
                        <input type= "hidden" name= "picture" value= "<?php echo $data['picture'] ?>" />
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>

        </div>
        <?php require_once 'components/footer.php' ?>
    </body>
</html>
