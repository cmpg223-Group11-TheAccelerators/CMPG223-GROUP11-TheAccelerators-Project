<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];
    $query = " select * from customer where phoneNumber = '$phoneNumber' limit 1";
    $result = mysqli_query($con, $query);

    if ($result) {
        if ($result && mysqli_num_rows($result) > 0) {
            $customer_data = mysqli_fetch_assoc($result);


            if ($customer_data['password'] === $password) {
                $_SESSION['customerName'] = $customer_data['firstName'];
                $_SESSION['contacts'] = $customer_data['phoneNumber'];
                $_SESSION['address'] = $customer_data['address'];
                header("Location:  customerPage.php");
                die;
            }
        }
    }
}   //SOMETHING IS POSTED

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Login</title>
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
        <h2>Welcome Back!</h2>
        <p>You're moments away from good, hot food!</p>
        <br><br>
        <form class="quote" method="POST">
            <div>
                <input type="text" placeholder="phone number" name="phoneNumber">
            </div>
            <div>
                <input type="text" placeholder="password" name="password">
            </div>
            <br>
            <button class="button_2" style="padding: 8px;">Login</button><br>
            <a href="restaurantLogin.php" style="color: green;font-size:medium;text-decoration:none;margin-top: 50px;">Login as restaurant?Click here</a>

    </div>
    </form>
    <section id="boxes">
        <div class="container">
            <div class="box">
                <img src="./icons/scooter.jpg" alt="">
                <h3>Online food Delivery</h3>
                <p>
                    Track your order.
                    Track every step of your order. From when the chef accepts the order to the time it arrives at your door.</p>
            </div>
            <div class="box">
                <img src="./icons/cash.jpg" alt="">
                <h3>Cash On Delivery</h3>
                <p>You undertake to ensure that you have sufficient cash on hand at the time of delivery to cover the order charges.</p>
            </div>
            <div class="box">
                <img src="./icons/restaurant.jpg" alt="">
                <h3>Put your restaurant online</h3>
                <p>A world of customers now within your reach</p>
            </div>
        </div>
    </section>
</body>