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
    <title>Customer Page</title>
    <style>
        .contain h4 {
            margin-top: 5px;
            text-transform: uppercase;

        }

        .contain {
            margin-left: 180px;
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
    <section>
        <form method="POST" action="restaurants.php" class="container">
            <label for="">Search</label>
            <input type=" text" placeholder="What are your craving for?" name="search" />
            <span id="search_results"></span>
            <input type="submit" name="submit"><br><br>

            <?php
            $sql = "SELECT * FROM restaurant";
            $results = $con->query($sql);

            if ($results->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($results)) {
                    $_SESSION["restaurantName" . $row['restaurantName']] = $row['restaurantName'];
                    $_SESSION["address" . $row['address']] = $row['address'];
                    echo "<div class='contain'>" . "<a href ='menu.php?rn=" . $row["restaurantName"] . "'>"
                        . "<img class='image-style' src='restaurantImages/" . $row['image'] . "' style='height: 200px; width:50%';> <a><br>"
                        //. "<div>"  "</div>" . "</div>"
                        . "<div>" . "<h4>" . $row["restaurantName"] . " , " . $row["address"] . "</h4>"  . "</div>" . "</div>" . "<hr>";
                }
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
            ?>


        </form>
    </section>
</body>

</html>