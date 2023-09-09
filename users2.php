<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-image: url('images/bike7.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .login-table {
            width: 300px;
            margin: 0 auto;
            background-color: rgba(0, 0, 0, 0.6);
            border: 2px solid #fff;
            border-radius: 10px;
            padding: 20px;
        }

        .login-table th, .login-table td {
            padding: 5px;
        }

        .login-table th {
            background-color: #ff9900;
        }

        .login-table td {
            background-color: rgba(255, 255, 255, 0.1); 
        }

        .login-table td:first-child {
            font-weight: bold; 
        }

        .error-message {
            color: red;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <?php
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $con = mysqli_connect("localhost", "root", "", "bikeservice");

        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $query = "SELECT * FROM `users` WHERE `username`='$username'";
        $result = mysqli_query($con, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($con));
        }

        if (mysqli_num_rows($result) > 0) {
            $fetch = mysqli_fetch_array($result);

            if ($password == $fetch['password']) {
                echo "<div class='login-table'>";
                echo "<table>";
                echo "<tr><th>bookingid</th><th>username</th><th>email</th><th>phno</th><th>booking</th>";
                echo "<tr>";
                echo "<td>" . $fetch['bookingid'] . "</td>";
                echo "<td>" . $fetch['username'] . "</td>";
                echo "<td>" . $fetch['email'] . "</td>";
                echo "<td>" . $fetch['phonenumber'] . "</td>";
                echo "<td>" . $fetch['booking'] . "</td>";
                echo "</tr>";
                echo "</table>";
                echo "</div>";
            } else {
                echo "<p class='error-message'>Invalid password</p>";
            }
        } else {
            echo "<p class='error-message'>User not found</p>";
        }

        mysqli_close($con);
    }
    ?>
</body>
</html>
