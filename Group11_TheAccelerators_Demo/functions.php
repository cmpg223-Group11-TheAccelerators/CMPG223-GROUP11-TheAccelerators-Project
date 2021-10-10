<?php
function check_login($con)
{
    if (isset($_SESSION['phoneNumber'])) {
        $phone = $_SESSION['phoneNumber'];
        $query = "select * from customer where phoneNumber = '$phone' limit 1";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $customer_data = mysqli_fetch_assoc($result);
            return $customer_data;
        }
    }
    //header("Location: login.php");
    die;
}
function restaurant_login($con)
{
    if (isset($_SESSION['restaurantName'])) {
        $name = $_SESSION['restaurantName'];
        $query = "select * from restaurant where restaurantName = '$name'";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $restaurant_data = mysqli_fetch_assoc($result);
            return $restaurant_data;
        }
    }
    die;
}
