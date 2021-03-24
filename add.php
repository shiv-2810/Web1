<?php
include('config.php');
?>
<?php
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];

	$sql="INSERT INTO `users` ( `username`, `email`, `contact`) VALUES ( '$username', '$email', '$contact')";
	mysqli_query( $conn,$sql);
} 
else
{
	echo "Please click submit to submit the data";
}
?>
<html>
<head>
	<title>Form</title>
</head>
<body>
<form  action="add.php" method="POST">
	USERNAME <input type="text" name="username" placeholder="Name" required=""><br>
	E-MAIL<input type="email" name="email" placeholder="Email" required=""><br>
	CONTACT<input type="text" name="contact" placeholder="Mobile Number">
	<input type="submit" name="submit">
	
</form>
</body>
</html>
