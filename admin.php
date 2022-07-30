<?php 
require_once "components/db_connect.php";

$sql = "SELECT * FROM objects";
$result = mysqli_query($connect, $sql);

$tbody = '';
if ($result->num_rows > 0) {
  while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
      $tbody .= "<tr>
          <td><img class='img-thumbnail' width='100px' src='pictures/" . $row['picture'] . "' alt=" . $row['name'] . "></td>
          <td>" . $row['name'] . "</td>
          <td><a href='update.php?id=" . $row['id'] . "'><button class='btn btn-warning' type='button'>Edit</button></a>
          <a href='crud/a_delete.php?id=" . $row['id'] . "'><button class='btn btn-danger' type='button'>Delete</button></a></td>
       </tr>";
  }
} else {
  $tbody = "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}
mysqli_close($connect);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <?php require_once 'components/boot.php' ?>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php require_once "components/navbar.php"?>


<div class="container">
<h1 class="text-center mb-5 mt-5 p-3 h-text">Update</h1>
        <div class="d-flex justify-content-center">
               <a href="create.php"><button class='btn btn-primary mb-4 ' type='button'>Add Property</button></a>
        </div>
        <div class="row justify-content-center mb-5">
            <table class='table table-striped w-50 admin-table'>
               <thead class='table-headline'>
                   <tr>
                        <th>Picture</th>
                       <th>Name</th>
                       <th>Actions</th>
                   </tr>
               </thead>
               <tbody>
                  <?=$tbody?>
                </tbody>
           </table>
        </div>
  </div>

  <?php require_once "components/footer.php" ?>
</body>
</html>


