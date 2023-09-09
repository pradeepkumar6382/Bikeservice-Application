<style>
    body {
        background-image: url('images/bike4.jpg');
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
    }

    th, td {
        padding: 10px;
        text-align: center;
    }

    th {
        background-color: #333;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #555;
    }

    tr:nth-child(odd) {
        background-color: #444;
    }

    a {
        text-decoration: none;
        color: #ff9900; 
    }

    a:hover {
        text-decoration: underline;
    }
</style>

<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $con = mysqli_connect("localhost", "root", "", "bikeservice");
    $query = "SELECT * FROM `owners` WHERE `username`='$username'";
    $result = mysqli_query($con, $query);

    if ($fetch = mysqli_fetch_array($result)) {
        if ($password==$fetch['password']) {
           
            echo "<table>";
            echo "<tr><th>ownerid</th><th>username</th><th>email</th><th>phno</th><th>services</th><th>Description</th><th>price</th><th>Bookingstatus</th><th>delete</th><th>Edit</th></tr>";
            echo "<tr>";
            echo "<td>" . $fetch['ownerid'] . "</td>";
            echo "<td>" . $fetch['username'] . "</td>";
            echo "<td>" . $fetch['email'] . "</td>";
            echo "<td>" . $fetch['phonenumber'] . "</td>";
            echo "<td>" . $fetch['services'] . "</td>";
            echo "<td>" . $fetch['description'] . "</td>";
            echo "<td>" . $fetch['price'] . "</td>";
			echo "<td><a href='status.php?id={$fetch['ownerid']}'>status</a></td>";
			echo "<td><a href='delete.php?id={$fetch['ownerid']}'>Delete</a></td>";
			echo "<td><a href='owner.php?id={$fetch['ownerid']}'>EDIT</a></td>";
            echo "</tr>";
            echo "</table>";
        } else {
            echo "Invalid user";
        }
    } else {
        echo "User not found";
    }
}
?>
</table>