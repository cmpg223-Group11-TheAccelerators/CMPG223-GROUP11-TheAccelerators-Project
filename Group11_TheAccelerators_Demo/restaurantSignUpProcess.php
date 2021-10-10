<?php
session_start();
$_SESSION;
include("connection.php");
include("functions.php");


if (isset($_POST['add'])) {
    //echo "rtrtt";
    //SOMETHING IS POSTED
    $restaurantName = $_POST['restaurantName'];
    $address = $_POST['address'];
    $cuisine = $_POST['cuisine'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];

    $imageName = $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];

    $target = "restaurantImages/" . basename($imageName);
    $query = "insert into restaurant (restaurantName,address,cuisine,firstName,lastName,email, phoneNumber,password,image) values ('$restaurantName','$address', '$cuisine','$firstName','$lastName','$email','$phoneNumber','$password','$imageName' )";

    //mysqli_query($con, $query);
    if ($con->query($query) === TRUE) {
        if (move_uploaded_file($tmp, $target)) {
            $_SESSION['restaurantName'] = $_POST['restaurantName'];
            header("Location: restaurantPage.php");
        }
    } else {
        echo "Error: " . $query . "<br>" . $con->error;
    }
}
