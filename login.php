<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-image: url('images/bike2.jpg'); 
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
        }

        .form-container {
            background-color: rgba(0, 0, 0, 0.7); 
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            margin: 0 auto;
            margin-top: 100px;
        }

        .form-container input[type="text"],
        .form-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            background-color: rgba(255, 255, 255, 0.9); 
            border-radius: 5px;
        }

        .form-container input[type="submit"] {
            background-color: #ff6600;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover {
            background-color: #ff4500; 
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="dashboard.php" method="POST">
            <img src="images/bike3.jpg" alt="Bike Logo" width="100">
            <h2>Login</h2>
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</body>
</html>
