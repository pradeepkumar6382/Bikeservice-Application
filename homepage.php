<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-image: url('images/bike_background.jpg'); /* Set a bike-themed background image */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
            padding: 20px;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent background */
            border: 2px solid #fff; /* White border */
            border-radius: 10px;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #fff; /* White border for cells */
        }

        th {
            background-color: #333;
        }

        tr:nth-child(even) {
            background-color: #555;
        }

        tr:nth-child(odd) {
            background-color: #444;
        }

        a {
            text-decoration: none;
            color: #ff9900; /* Set the link color to a bike-themed color */
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php
    include('index.php');
    ?>
    
    <table>
        <tr>
            <th>ownerid</th>
            <th>username</th>
            <th>services</th>
            <th>description</th>
            <th>price</th>
            <th>Booking status</th>
            <th></th>
        </tr>
        <?php
        $con = mysqli_connect("localhost", "root", "", "bikeservice");
        $query = "SELECT * FROM `owners`";
        $result = mysqli_query($con, $query);
        while($fetch=mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $fetch['ownerid'] . "</td>";
            echo "<td>" . $fetch['username'] . "</td>";
            echo "<td>" . $fetch['services'] . "</td>";
            echo "<td>" . $fetch['description'] . "</td>";
            echo "<td>" . $fetch['price'] . "</td>";
            echo "<td><a href='users.php?id={$fetch['ownerid']}'>BOOK</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
