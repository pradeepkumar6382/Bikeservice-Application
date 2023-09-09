<style>
    body {
       background-image: url('images/bike6.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: Arial, sans-serif;
        color: white;
        text-align: center;
        padding: 20px;
    }

    .user-info {
        background-color: #333;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .user-info h3 {
        margin: 0;
    }

    .user-links {
        margin-top: 10px;
    }

    .user-links a {
        text-decoration: none;
        color: #ff9900; /* Set the link color to a bike-themed color */
        margin-right: 10px;
    }

    .user-links a:hover {
        text-decoration: underline;
    }
</style>

<?php 
if(isset($_GET['id'])){
    $value = $_GET['id'];
    $con = mysqli_connect("localhost", "root", "", "bikeservice");
    $query = "SELECT * FROM `owners` INNER JOIN `users` ON owners.ownerid = users.bookingid";
    $result = mysqli_query($con, $query);
    while($fetch = mysqli_fetch_array($result)){
        if($value == $fetch['bookingid']){
            echo '<div class="user-info">';
            echo '<h3>User Information</h3>';
            echo '<p>Booking ID: ' . $fetch['bookingid'] . '</p>';
            echo '<p>Username: ' . $fetch['username'] . '</p>';
            echo '<p>Email: ' . $fetch['email'] . '</p>';
            echo '<p>Booking Status: ' . $fetch['booking'] . '</p>';
            echo '<div class="user-links">';
            echo '<a href="change.php?id1=' . $fetch['uid'] . '">Completed</a>';
            echo '<a href="change.php?id2=' . $fetch['uid'] . '">Set for Delivery</a>';
            echo '</div>';
            echo '</div>';
        }
        echo "<br>";
    }
}
?>
