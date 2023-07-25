<?php

// database connection code
if(isset($_POST['ccid']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con=mysqli_connect('localhost','root','','mysql');

// get the post records

$ccid = $_POST['ccid'];
$cname = $_POST['cname'];
$tot_views = $_POST['tot_views'];
$uploads = $_POST['uploads'];
$subscribers = $_POST['subscribers'];
$ylink = $_POST['ylink'];
// database insert SQL code
$sql= "INSERT INTO  suggestion (ccid,cname,tot_views,uploads,subscribers,ylink) VALUES( '$ccid','$cname','$tot_views','$uploads','$subscribers','$ylink')";

// insert in database 
$rs=mysqli_query($con,$sql);
if($rs)
{
	echo "congragulation! your channel is begin added";
}
}
else
{
	echo "oops! something went wrong";
	
}
$con->close();
?>