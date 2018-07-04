<?php
session_start();
$user_id=$_SESSION['user_id'];
if(empty($user_id))
{
	header('location:login.php');
}

else{
	header('location:shipping.php');
} 
?>