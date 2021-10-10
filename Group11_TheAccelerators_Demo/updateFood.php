<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <?php
  include("menuTable.php");
  $id = $_GET['rn'];

  $_SESSION["id"] = $id;
  ?>

  <form class="updateFood" action="updateFoodProcess.php" method="post">
    <label for="name">Name :</label>
    <input type="text" id="name" name="name" value="<?php echo $_SESSION["name" . $id]; ?>"><br><br>

    <label for="price">Price :</label>
    <input type="number" id="price" name="price" value="<?php echo $_SESSION["price" . $id]; ?>"><br><br>

    <button type="Submit" name="update">Update</button>
    <button type="button" name="cancel">Cancel</button>
  </form>

</body>

</html>