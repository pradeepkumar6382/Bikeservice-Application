<?php
if(isset($_GET['id1']) || isset($_GET['id2'])) {
    $a = $_GET['id1'];
    $b = $_GET['id2'];
    $con = mysqli_connect("localhost", "root", "", "bikeservice");
    
    if($a) {
        $query = "UPDATE `users` SET `booking`='completed' WHERE `uid`='$a'";
        $result=mysqli_query($con,$query);
    }
    
    if($b) { 
        $query = "UPDATE `users` SET `booking`='SET FOR DELIVERY' WHERE `uid`='$b'";
        $result=mysqli_query($con,$query);
    }

    header("location:login.php");
}
?>
