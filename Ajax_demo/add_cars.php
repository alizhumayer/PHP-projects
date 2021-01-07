<?php

include("db.php");


if(isset($_POST['car_name'])) {

echo $car_name = $_POST['car_name'];
$query = "INSERT INTO cars(title) VALUES('$car_name') ";
$update_car_name = mysqli_query($connection, $query);
    
if(!$update_car_name) {

die("QUERY FAILED");

}
    
    
header("Location: index.html");



}




?>