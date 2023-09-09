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

        form {
            width: 80%;
            margin: 0 auto;
            background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent background */
            border: 2px solid #fff; /* White border */
            border-radius: 10px;
            padding: 20px;
        }

        form input[type="text"],
        form input[type="password"],
        form input[type="email"],
        form input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #fff; /* White border for input fields */
            border-radius: 5px;
            background-color: transparent;
            color: white;
        }

        form input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #ff9900; /* Set a bike-themed button color */
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #ff6600; /* Hover color */
        }

        .message {
            margin-top: 20px;
            color: #ff9900; /* Message color */
            font-weight: bold;
        }
    </style>


<form action="users.php?id=<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>" method="POST">
    Username<input type="text" name="username">
    Password<input type="password" name="password">
    Email<input type="email" name="email">
    Phone Number<input type="number" name="phno">
    <input type="submit" value="Confirm Booking" name="submit">
</form>

<?php
if(isset($_POST['submit']) && isset($_GET['id'])){
    $bookingid = $_GET['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phno'];
    $var = "made";

    $con = mysqli_connect("localhost", "root", "", "bikeservice");
    $query = "INSERT INTO `users`(`uid`, `bookingid`, `username`, `password`, `email`, `phonenumber`, `booking`) VALUES (NULL, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);

    mysqli_stmt_bind_param($stmt, "isssss", $bookingid, $username, $password, $email, $phonenumber, $var);

    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo "Success";
    } else {
        echo "Error: " . mysqli_error($con);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($con);
	header("location:homepage.php");
}

?>
