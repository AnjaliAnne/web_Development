<?php
$uname=$_POST['email'];//username
$password=$_POST['pass'];//password 
session_start();
include "../conn.php";
$result=mysqli_query($conn,"SELECT * FROM `login_table` WHERE `email`='$uname' && `password`='$password'");
$count=mysqli_num_rows($result);
if($count==1)
{
	//echo "$password";
	//echo "Login success";
	$_SESSION['log']=1;
	$_SESSION["favanimal"] = "cat";
	$row = mysqli_fetch_array($result);
	$ee = $row['id'];
	if($row['mode'] == "DHSE"){
		header("refresh:0;url=dhselogin.php?p1=$ee");
	}
	else{
		header("refresh:0;url=selection.php?p1=$ee");
	}
}
else
{
	echo "Invalid Username or Password";
	header("refresh:2;url=index.php");// it takes 2 sec to go index page
}


?>
