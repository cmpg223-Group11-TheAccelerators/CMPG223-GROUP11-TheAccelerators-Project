<?php
session_start();
include("connection.php");
include("functions.php");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Restaurant Site</title>
  <link rel="stylesheet" href="./css/style.css">
  </style>
</head>

<body>
  <header>
    <div class="container">
      <div id="branding">
        <h1><?php echo $_SESSION['restaurantName'] ?></h1>
      </div>
      <nav>
        <ul>
          <li><a href="restaurantPage.php">Back</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <section id="showcase">
    <div class="container">
      <form action="addFoodProcess.php" method="post" enctype="multipart/form-data" class='quote'>
        <label for="name">
          <bold>Name:</bold>
        </label>
        <input type="text" id="name" name="name"><br><br>

        <label for="foodImage">Select image:</label>
        <input type="file" name="file"><br><br>

        <label for="price">Price :</label>
        <input type="number" id="price" name="price"><br><br>
        <button class="button_2" type="submit" name="add">Add</button>
        <button class="button_2" type="submit">Cancel</button>
      </form>
    </div>
  </section>
  <script src="index.js"></script>
</body>

</html>