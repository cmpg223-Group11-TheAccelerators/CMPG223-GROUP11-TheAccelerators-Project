<?php
session_start();
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<style>
  .contain h4 {
    text-align: left;
    margin: 0;
  }

  .price h4 {
    margin: 0;
  }

  .anchor a {
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
  }
</style>

<body>
  <header>
    <div class="container">
      <div id="branding">
        <h1>Eazi Food</h1>

      </div>
      <nav>
        <ul>
          <li><a href="addFood.php">Add Food</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <form class="container" action="MenuFromRestaurantPerspective.php" method="get">
    <?php


    $restaurantName = $_SESSION['restaurantName'];
    $sql = "SELECT * FROM menu WHERE restaurantName = '$restaurantName'";
    $results = $con->query($sql);

    if ($results->num_rows > 0) {
      while ($row = mysqli_fetch_assoc($results)) {

        $_SESSION["name" . $row["Id"]] = $row["name"];
        $_SESSION["image" . $row["Id"]] = $row["image"];
        $_SESSION["price" . $row["Id"]] = $row["Price"];

        echo "<div class='contain'>" . "<tr><td>" . "<h4 class='title'>" . $row["name"] . "</h4>" . "</td><td>" . "</div>"
          . '<image src="foodImages/' . $row["image"] . '" style=" height: 200px;">'
          . "<div class='price'>" . "</td><td>" . "<h4>R" . $row["Price"] . "</h4>" . "<div>"
          . "<div class ='anchor'>" . "</td><td>" . '<a href="updateFood.php?rn=' . $row["Id"] . '">edit</a> ' . "</td></tr>"
          . "</td><td>" . '<a href="deleteMenuRow.php?rn=' . $row["Id"] . '">delete</a> ' . "</div>" . "</td></tr><hr>";
      }
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
    ?>
    <br><br>

  </form>

</body>
<script>
  $DO
</script>

</html>