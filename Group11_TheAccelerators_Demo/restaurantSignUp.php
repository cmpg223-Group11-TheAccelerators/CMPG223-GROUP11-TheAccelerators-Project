<?php

include("connection.php")
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
    <h2>A world of customers now within your reach</h2>
    <p>Eazi Food's global platform gives you the flexibility, visibility and customer insights you need to connect with more customers. Partner with us today.</p>
    <form class='quote' action="restaurantSignUpProcess.php" method="POST" enctype="multipart/form-data">
      <br>
      <h3>Get Started</h3>
      <div>
        <input type="text" placeholder="Store Name" name="restaurantName">
      </div>
      <div>
        <input type="text" placeholder="Store address" id="address" name="address">
      </div>
      <div>
        <input type="text" placeholder="Floor/Suite(Optional)" name="cuisine">
      </div>
      <br>
      <h2>Enter your contact details</h2>
      <div>
        <input type="text" placeholder="First name" name="firstName">
      </div>
      <div>
        <input type="text" placeholder="last name" name="lastName">
      </div>
      <div>
        <input type="email" placeholder="Email" name="email">
      </div>
      <div>
        <input type="text" placeholder="Phone number" name="phoneNumber">
      </div>
      <div>
        <input type="text" placeholder="password" name="password">
      </div>
      <br>
      <input type="file" name="file">
      <button class="button_1" type="submit" name="add">Submit</button>
    </form>
  </div>
</body>