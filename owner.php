<?php
if (isset($_GET['id'])) {
    $edit = $_GET['id'];
    $con = mysqli_connect("localhost", "root", "", "bikeservice");
    $query = "SELECT * FROM `owners` WHERE `ownerid`='$edit'";
    $result = mysqli_query($con, $query);
	$fetch = mysqli_fetch_array($result);
	$service2 = explode(',', $fetch['services']);
 ?>
 <form action="owner.php" method="POST">
    <input type="hidden" name="ownerid" value="<?php echo $fetch['ownerid']; ?>">
    Username<input type="text" name="username" value="<?php echo $fetch['username']; ?>">
    Password<input type="password" name="password" value="<?php echo $fetch['password']; ?>">
    Email<input type="mail" name="email" value="<?php echo $fetch['email']; ?>">
    Phone Number<input type="text" name="phno" value="<?php echo $fetch['phonenumber']; ?>">
    Services You Offer <br>
    <input type="checkbox" value="oilchange" <?php if (in_array('oilchange', $service2)) { echo "checked"; } ?> name="service[]">Oil Change<br>
    <input type="checkbox" value="general" <?php if (in_array('general', $service2)) { echo "checked"; } ?> name="service[]">General<br>
    <input type="checkbox" value="maintanence" <?php if (in_array('maintanence', $service2)) { echo "checked"; } ?> name="service[]">Maintenance<br>
    <input type="checkbox" value="brake" <?php if (in_array('brake', $service2)) { echo "checked"; } ?> name="service[]">Brake<br>
    <input type="checkbox" value="waterwash" <?php if (in_array('waterwash', $service2)) { echo "checked"; } ?> name="service[]">Water Wash<br>
    <input type="checkbox" value="engine" <?php if (in_array('engine', $service2)) { echo "checked"; } ?> name="service[]">ENGINE<br>
    <textarea name="desc"><?php echo $fetch['description']; ?></textarea>
    Price<input type="number" name="price" value="<?php echo $fetch['price']; ?>">
    <input type="submit" name="submit">
</form>

<?php } else { ?>
 <form action="owner.php" method="POST">
Username<input type="text" name="username">
password<input type="password" name="password">
EMAIL<input type="mail" name="email">
PHONENUMBER<input type="number" name="phno">
services you offer <br>
	<input type="checkbox" value="oilchange" name="service[]" >oilchange<br>
	<input type="checkbox" value="general" name="service[]" >General<br>
	<input type="checkbox" value="maintanence" name="service[]" >maintanence<br>
	<input type="checkbox" value="brake" name="service[]" >Brake<br>
	<input type="checkbox" value="waterwash" name="service[]" >waterwash<br>
	<input type="checkbox" value="engine" name="service[]" >ENGINE<br>
<textarea name="desc">typesomething</textarea>
PRICE<input type="number" name="price">
<input type="submit" name="submit" >
</form>
<?php
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$phno=$_POST['phno'];
	$service=implode(",",$_POST['service']);
    $description=$_POST['desc'];
	$price=$_POST['price'];
	$con=mysqli_connect("localhost","root","","bikeservice");
	if(isset($_POST['ownerid'])){
		$oid=$_POST['ownerid'];
		$query="UPDATE `owners` SET `username`='$username',`password`='$password',
		`email`='$email',`phonenumber`='$phno',`services`='$service',`description`='$description',`price`='$price' WHERE `ownerid`='$oid'";
	}else{
		$query="INSERT INTO `owners`(`ownerid`, `username`, `password`, `email`, `phonenumber`, 
		`services`, `description`, `price`) VALUES ('','$username','$password','$email'
		,'$phno','$service','$description','$price')";
	}
	$result=mysqli_query($con,$query);
}
header("location:login.php");
}
?>
