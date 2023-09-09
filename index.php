
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-image: url('images/bike.jpg'); 
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: white; 
            font-size: 18px;
        }

      
        a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            display: inline-block;
            margin: 10px;
            background-color: rgba(0, 0, 0, 0.5); 
            border-radius: 5px;
        }

        
        a:hover {
            background-color: rgba(3, 0, 0, 0.7); 
        }

        
        .links-container {
            text-align: center;
            margin-top: 20%;
        }
    </style>
</head>
<body>
    <div class="links-container">
        <a href="owner.php">Sign up as a bike owner</a>
        <a href="login.php">Login as a bike owner</a>
        <a href="userstatus.php">Login as a user</a>
    </div>
</body>
</html>
