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

        form {
            width: 300px;
            margin: 0 auto;
            background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent background */
            border: 2px solid #fff; /* White border */
            border-radius: 10px;
            padding: 20px;
        }

        form input[type="text"],
        form input[type="password"] {
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
    </style>
</head>
<body>
    <form action="users2.php" method="POST">
        <h2>User Login</h2>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Login" name="submit">
    </form>
</body>
</html>
