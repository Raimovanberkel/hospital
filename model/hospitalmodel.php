<?php 

function createclient() {
$servername = "localhost";
$username = "Webdev";
$password = "Raimo";
$dbname = "hospital";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 $werk = $_POST["firstname"];
$werkmee = $_POST["lastname"];

$sql = "INSERT INTO hospital (firstname, lastname)
VALUES ('$werk', '$werkmee')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}







?>