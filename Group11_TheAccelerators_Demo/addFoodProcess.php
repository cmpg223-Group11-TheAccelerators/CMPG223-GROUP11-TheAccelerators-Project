<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "easyfood";

$link = new mysqli($servername, $username, $password, $dbname);

if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

$imageName = $_FILES['file']['name'];
$tmp = $_FILES['file']['tmp_name'];
$restaurantName = $_SESSION['restaurantName'];

$msg = "";
if (isset($_POST['add'])) {

    $target = "foodImages/" . basename($imageName);
    if (!$_POST['name']) {
        $msg = "food name is missing!";
    } else
        if (!$_POST['price']) {
        $msg = "Rest name is missing!";
    } else
        if (!$imageName) {
        $msg = "Rest name is missing!";
    } else {
        $query = "INSERT INTO menu(image,name,Price,restaurantName)
         VALUES ('" . mysqli_real_escape_string($link, $imageName) . "','" . mysqli_real_escape_string($link, $_POST['name']) . "' ,'"
            . mysqli_real_escape_string($link, $_POST['price']) . "','" . $restaurantName . "')";
        mysqli_query($link, $query);
        if (move_uploaded_file($tmp, $target)) {
            $msg = "Image uploades successfully";
            header("Location: menuTable.php");
        } else {
            $msg = "There was a problem uplaoding image";
        }
    }
}
