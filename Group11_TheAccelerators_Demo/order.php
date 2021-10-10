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

    <style>
        h4 {
            color: gray;
            margin-left: 200px;
            text-transform: uppercase;
        }

        hr {
            width: 50%;
            margin-left: 20px;
            margin-right: 20px;
        }

        .a {
            width: 115px;
            height: 20px;
            background: #4E9CAF;
            padding: 7px;
            text-align: center;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            line-height: 25px;
            text-decoration: none;
            margin-left: 200px;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1>Eazi Food</h1>
            </div>

            <nav>
                <?php
                if ($_SESSION['customerName'] != null) {

                    echo '<div>Welcome ' . $_SESSION['customerName'] . '</div>'
                        . '<ul>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>';
                } else {
                    echo '<div>Welcome please login or signup to order</div>'
                        . '<ul>
                                <li><a href="login.php">login</a></li>
                            </ul>';
                }
                ?>


            </nav>
        </div>
    </header>
    <?php


    $id = $_GET["rn"];
    /*if( $_POST["quantity"]!= 0)
    {*/

    $query = "select * from menu where Id = '$id' limit 1";
    $result = mysqli_query($con, $query);

    $price = $_SESSION['price' . $id];
    $foodList = $_SESSION['foodName' . $id];
    $contacts = $_SESSION['contacts'];
    $address = $_SESSION['address'];
    $restaurantName = $_SESSION['restaurantName'];


    $orderNum = rand();


    $amount = $price * 1;
    $sqlAdd = "INSERT INTO ordertable (orderNum, phoneNumber, restaurantName, total,foodList,address)
            VALUES ('$orderNum', '$contacts', '$restaurantName', '$amount','$foodList','$address')";
    if ($con->query($sqlAdd) === TRUE) {

        echo "<h4>The order was successfully sent<br>"
            . "Order number is :" . $orderNum . "<br>"
            . "Restaurant : " . $restaurantName . "<br>"
            . "Amount : " . "R" . $amount . "<br>"
            . "You order will be delivered at " . $address . "</h4>" . "<br>" . "<hr>";
        echo " <a href='customerPage.php' class='a'>Back</a>";
        //header('Location:restaurantsTable.php');
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    ?>