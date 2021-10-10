<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "easyfood";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$foodName = $_POST['name'];
$foodImage = $_POST['foodImage'];
$price = $_POST['price'];

$sql = "SELECT * FROM menu";
$results = $conn->query($sql);

if ($results->num_rows > 0) {
    //  while($row = $results-> assoc())
    {
        echo "<tr><td>" . $row["name"] . "</td><td>" . $row["image"] . "</td><td>" . $row["Price"] . "</td></tr>";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
