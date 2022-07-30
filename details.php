<?php

require_once "components/db_connect.php";

//Get destination details 
if(isset($_GET["id"]) && !empty($_GET["id"])) {
    $sql ="SELECT * FROM objects WHERE id = $_GET[id]";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
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
   
    <title>Details</title>
    <style>
        #map {
            height: 90%;
        }
       html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>

<?php require_once "components/navbar.php" ?>

    <div class="container">

        <div class="row justify-content-center mb-5">

        <div class="card col-lg-6 p-0 shadow border-0 details-card">
            
                <img src="pictures/<?=$row["picture"]?>" class="card-img-top rounded-2 mt-5">
                <h3 class="card-title p-3 text-center"><?=$row["name"]?> </h3><hr>
                <h5 class="card-title p-3 text-center">Price: <?=$row["price"]?> €</h5> <hr>
                <div class="card-body">
                    <p class="card-text text-center"><?=$row["description"]?></p>
                    <div class="justify-content-center">
                    <p class="card-text text-center"><b>City: </b><?=$row["city"]?></p>
                    <p class="card-text text-center"><b>Address: </b><?=$row["address"]?></p>
                    <p class="card-text text-center"><b>Size: </b><?=$row["size"]?>&#x33A1</p>
                    </div>
                    <a href="index.php" class="btn btn-primary">Go Back</a>
                </div>
            </div>
        </div>
    </div>

    <div class=" container-fluid my-1 w-25 h-50 mb-5" id="map"></div>

<script>
      var map;
    function initMap() {
        var location = {
            lat: <?=$row["latitude"]?>,
            lng: <?=$row["longitude"]?>
        };
        map = new google.maps.Map(document.getElementById('map'), {
            center: location,
            zoom: 10
        });
        var pinpoint = new google.maps.Marker({
            position: location,
            map: map
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap" async defer></script>

<?php require_once "components/footer.php" ?>
</body>
</html>