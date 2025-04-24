<?php
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];

$conn = new mysqli('localhost','root','','john');
if($conn->connect_error){
    die('connection Failed : '.$conn->connect_error);
}else{
    
    $stmt = $conn->prepare("insert into register(name, email, date)values(?, ?, ?)");
    $stmt->bind_param("ssi",$name,$email,$date);
    $stmt->execute();
    echo"<h1>Booking is Successful, Thank You for Booking</h1>";
    echo "<h1>Your request will be approved in half hour</h1>";
    $stmt->close();
    $conn->close();
}

?>