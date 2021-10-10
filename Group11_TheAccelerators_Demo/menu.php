<?php
session_start();
include("connection.php");
include("functions.php");
$restName = $_GET['rn'];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>customer home page</title>
</head>
<style>
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
        padding-top: 5px;
    }

    .restaurants {
        margin-left: 200px;
    }
</style>

<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1>Eazi Food</h1>
            </div>

            <nav>

                <div>Welcome <?php echo $_SESSION['customerName'] ?></div>
                <ul>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>

    </header>
    <section>
        <div>
            <h4> Welcome to <?php echo $restName ?></h4>
        </div>
        <?php
        $_SESSION['restaurantName'] = $restName;
        $sql = "SELECT * FROM menu WHERE restaurantName= '$restName'";
        $results = $con->query($sql);

        if ($results->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($results)) {
                $_SESSION['price' . $row["Id"]] = $row["Price"];
                $_SESSION['foodName' . $row["Id"]] = $row["name"];
                echo "<img class='image-style' src='foodImages/" . $row['image'] . "'><br>"
                    . "<div style='font-size: 16px; font-weight:bold;'>" . $row["name"] . "</div>"
                    . "<a href='order.php?rn=" . $row["Id"] . "' class='a'>Buy</a> ";
            }
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }

        ?>


        </form>
    </section>
</body>

</html>