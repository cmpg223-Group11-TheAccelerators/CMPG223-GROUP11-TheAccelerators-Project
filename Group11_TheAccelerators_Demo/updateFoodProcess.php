<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "easyfood";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$foodName = $_POST['name'];
$price = $_POST['price'];
$i = $_SESSION["id"];

$sqlUpdate = "UPDATE Menu SET name = '$foodName', Price ='$price' WHERE Id = $i";

if (isset($_POST['update'])) {
    if ($conn->query($sqlUpdate) === TRUE) {
        header('Location:menuTable.php');
    } else {
        echo "Error: " . $sqlUpdate . "<br>" . $conn->error;
    }
}
