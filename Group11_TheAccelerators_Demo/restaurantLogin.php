<?php

session_start();
include("connection.php");
if (isset($_POST['login'])) {
    //echo "rtrtt";
    //SOMETHING IS POSTED
    $restaurantName = $_POST['restaurantName'];
    $password = $_POST['password'];

    $query = " select * from restaurant where restaurantName = '$restaurantName' limit 1";
    $results = $con->query($query);

    if ($results->num_rows > 0) {
        $row = mysqli_fetch_assoc($results);
        if ($row['password'] == $password) {

            $_SESSION['restaurantName'] = $row['restaurantName'];
            header("Location: restaurantPage.php");
        }
    } else {
        echo "Error: " . $query . "<br>" . $con->error;
    }
}
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
        <h2>Login to the Sytem!</h2>
        <p>You're moments away from feeding your local customers, fresh and hot food!</p>
        <br><br>
        <form class="quote" method="POST">
            <div>
                <input type="text" placeholder="Store Name" name="restaurantName">
            </div>
            <div>
                <input type="text" placeholder="password" name="password">
            </div>
            <br>
            <button class="button_2" style="padding: 8px;" name="login">Login</button>
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