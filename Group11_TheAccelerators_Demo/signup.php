<?php
session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //SOMETHING IS POSTED
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $phoneNumber = $_POST['phoneNumber'];
    $confirm = $_POST['confirm'];
    $_SESSION['customerName'] = $_POST['firstName'];

    $query = "insert into customer (firstName,lastName,address,password,phoneNumber,confirm) 
    values ('$firstName','$lastName', '$address','$password','$phoneNumber','$confirm' )";
    mysqli_query($con, $query);

    header("Location: customerPage.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>EaziFood/Login</title>
</head>

<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1>Eazi Food</h1>
            </div>
        </div>
    </header>
    <div class="container">
        <h2>Delicious Food awaits</h2>
        <p>All we need is your phone number and </p>
        <form class='quote' action="signup.php" method="POST">
            <br>
            <div>
                <input type="text" placeholder="First Name" id="first-name" name="firstName">
            </div>
            <div>
                <input type="text" placeholder="Last Name" id="last-name" name="lastName">
            </div>
            <div>
                <input type="text" placeholder="address" id="address" name="address">
            </div>
            <div>
                <input type="text" placeholder="Password" id="password" name="password">
            </div>
            <div>
                <input type="text" placeholder="Phone numner" id="phoneNumber" name="phoneNumber">
            </div>
            <div>
                <input type="text" placeholder="Confirm number" id="confirm" name="confirm">
            </div>
            <br>
            <button class="button_2" type="submit">Submit</button>
        </form>
    </div>
</body>