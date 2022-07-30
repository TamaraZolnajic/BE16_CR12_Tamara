function getTravel() {
    const request = new XMLHttpRequest();
    request.open("GET", "../displayAll.php", true);
    request.onload = function() {
        if (this.status == 200) {
            let travel = JSON.parse(this.responseText);
            console.log(objects.data);
            let output = '<h1 class="text-center text-primary">Objects</h1><div class="row row-col-12 justify-content-center" >';
            for (let result of objects.data) {
                output += "<div class='card text-center col-3' style='width: 18rem;'><img src='../pictures/" + result.picture + "' class='card-img-top'><div class='card-body'><h5 class='card-title text-center'>" + result.name + "</h5><p class='text-center'>" + result.address + "</p><p class='text-center'>" + result.size + "</p><p class='text-center'>" + result.city + "</p><p class='text-center'>" + result.price + "</p><p class='text-center'>" + result.longitude + "</p><p class='text-center'>" + result.reduction + "</p><p class='text-center'>" + result.latitude + "</p><p class='card-text'>" + result.description + "</p></div></div>";
                console.log(output);
            }

            document.getElementById("content").innerHTML = output;
        }
    }
    request.send();
}