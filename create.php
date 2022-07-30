<?php
require_once 'components/db_connect.php';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'components/boot.php' ?>
    <link rel="stylesheet" href="css/style.css">
    <title>Add Property</title>
    <style>
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 60%;
        }
    </style>
</head>

<body>
<?php require_once "components/navbar.php" ?>
    <fieldset>
        <legend class='h-text text-center my-5'>Add Property</legend>
        <form action="crud/a_create.php" method="post" enctype="multipart/form-data">
            <table class='table' style='margin-bottom:20%'>
                <tr>
                    <th>Property name</th>
                    <td><input class='form-control' type="text" name="name" placeholder="Property name" /></td>
                </tr>
                <tr>
                    <th>Location</th>
                    <td><input class='form-control' type="text" name="city" placeholder="Location" /></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><input class='form-control' type="number" name="price"  placeholder="Price" /></td>
                </tr>
                <tr>
                    <th>Photo</th>
                    <td><input class='form-control' type="file" name="picture" /></td>
                </tr>
                <tr>
                    <th>Longitude</th>
                    <td><input class='form-control' type="decimal" name="longitude"  placeholder="Longitude" /></td>
                </tr>
                <tr>
                    <th>Latitude</th>
                    <td><input class='form-control' type="decimal" name="latitude"  placeholder="Latitude" /></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><input class='form-control' type="text" name="description"  placeholder="Description" /></td>
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
                    <td><button class='btn btn-success' type="submit">Insert Product</button></td>
                    <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                </tr>
            </table>
        </form>
        
    </fieldset>
    <?php require_once "components/footer.php" ?> 
</body>
</html>


