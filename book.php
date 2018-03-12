<?php

include ("connection.php");

$conn    = Connect();
$name    = $_POST["firstname"];
$email   = $_POST["emailUser"];
$phone   = $_POST["phoneUser"];
$dateStay = $_POST["dateStay"];
$lengthstay = $_POST["lengthStay"];
$roomType = $_POST["roomType"];
$extraBed = $_POST["extraBed"];
$airport = $_POST["shuttle"];
$ubud = $_POST["ubudTour"];
$query   = "INSERT into booking_room (name,email,phone,bookdate,length_stay,room_type,extra_bed,airport_shuttle,ubud_tour) VALUES
('$name','$email','$phone','$dateStay','$lengthstay','$roomType','$extraBed','$airport','$ubud')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}else{
  header("location: succesfully.html");
}



$conn->close();



 ?>
