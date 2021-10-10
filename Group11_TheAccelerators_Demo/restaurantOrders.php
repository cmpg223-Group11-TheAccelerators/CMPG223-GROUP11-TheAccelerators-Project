<?php
session_start();
include("connection.php");
include("functions.php");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Customer home page</title>
</head>
<style>
    table th {
        padding: 10px;
    }

    table tr {
        border-bottom: 1px solid gray;
    }

    table {
        background-color: white;
        margin-left: 300px;
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
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>

    </header>
    <section>
        <form method="POST" action="order.php" enctype=multipart/form-data>
            <h2 style="margin-left: 200px; background-color:green;color:white;width:50%;">Here are your orders from your beloved customers</h2>
            <table>
                <tr style="background-color: gray;">
                    <th>Order Number </th>
                    <br>
                    <th>Contact </th>
                    <th>Amount </th>
                    <th>food list </th>
                </tr>

                <?php
                $restaurantName = $_SESSION['restaurantName'];
                $sql = "SELECT * FROM ordertable WHERE restaurantName= '$restaurantName'";
                $results = $con->query($sql);

                if ($results->num_rows > 0) {
                    while ($row = mysqli_fetch_assoc($results)) {

                        echo  "<tr><td>" . $row["orderNum"] . "</td>"
                            . "<td>" . $row["phoneNumber"] . "</td>"
                            . "<td>" . $row["total"] . "</td>"
                            . "<td>" . $row["foodList"] . "</td></tr>";
                    }
                } else {
                    echo "Error: " . $sql . "<br>" . $con->error;
                }

                ?>
            </table>

        </form>
    </section>
</body>

</html>