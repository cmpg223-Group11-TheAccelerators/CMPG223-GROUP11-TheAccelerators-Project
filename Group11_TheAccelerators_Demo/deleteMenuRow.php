<?php
include("menuTable.php");
include("connection.php");
$id = $_GET['rn'];
$sqlDelete = "DELETE FROM menu WHERE Id = $id";

//if(isset($_POST['delete'])){

if ($conn->query($sqlDelete) === TRUE) {
     echo "Record successfully deleted";
     header('location:menuTable.php');
} else {
     echo "Error: " . $sqlDelete . "<br>" . $conn->error;
}
//}