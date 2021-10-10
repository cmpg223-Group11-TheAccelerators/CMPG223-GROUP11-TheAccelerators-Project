<?php
session_start();
include("connection.php");
include("functions.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Restaurants</title>
</head>
<style>
    #menu {
        font-size: 45px;
        color: green;
        margin: 0;
    }

    .restaurantPage {
        align-items: center;
        display: block;
        justify-content: center;
        margin-left: 300px;
        padding-top: 130px;
        border: 2px solid black;
        width: 50%;
        padding-bottom: 150px;
    }
</style>

<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1 style="padding-top: 5px;">EAZI FOOD</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>

    </header>
    <section>
        <div style="margin-bottom: 5px;"></div>
    </section>

    <section id="showcase">
        <div class="restaurantPage">
            <div class="container">
                <h1 style="padding:15px; color:white;background-color:green;margin-bottom:50px;margin-top:7px"><?php echo $_SESSION['restaurantName'] ?></h1>
                <span class="material-icons" id="menu">restaurant_menu</span><a href="menuTable.php">Menu</a>
            </div>
            <br>
            <div class="container">
                <span class="material-icons" id="menu">delete</span><a href="deleteMenuRow.php">Remove food</a>
            </div>
            <br>
            <div class="container">
                <span class="material-icons" id="menu">notifications_active</span><a href="restaurantOrders.php">Orders</a>
            </div><br>
            <div class="container">
                <span class="material-icons" id="menu">summarize</span><a href="deleteMenuRow.php">Report</a>
            </div><br>
            <div class="container">
                <span class="material-icons" id="menu" style="color: gray;">face</span><a href="index.php">Logout</a>
            </div>
        </div>
    </section>

</body>

</html>