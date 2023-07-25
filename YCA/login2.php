<?php
// database connection code
if(isset($_POST['EMAIL']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','mysql');

// get the post records

$email = $_POST['EMAIL'];
$password = $_POST['PASSWORD'];


// database insert SQL code
$sql = "INSERT INTO  register (EMAIL,PASSWORD) VALUES ( '$email', '$password')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "login sucessfull!!";
}
}
else
{
	echo "login denied !";
	
}
$con->close();
?>

