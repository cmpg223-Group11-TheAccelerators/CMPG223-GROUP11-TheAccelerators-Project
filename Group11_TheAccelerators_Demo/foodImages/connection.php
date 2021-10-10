<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "easyfood";


if (!$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname)) {
    die("failed to connect!");
}
