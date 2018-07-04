<?php
extract($_POST);
if(isset($login)){
	 require_once "admin/libraries/dbconnect.php";
	 $sql_chk ="select * from ms_users_tbl where ms_email='$email' and ms_password='$password'";
	 $resultset = mysqli_query($conn ,$sql_chk);
	 $count = mysqli_num_rows($resultset);
	 if($count==1){
	 	  $row=mysqli_fetch_assoc($resultset);	
	 	 session_start();
	 	  $sessid = session_id();
		  $_SESSION['user_id']=$row['ms_user_id'];
		  $_SESSION['name']=$row['ms_name'];
		  $_SESSION['ms_email']=$row['ms_email'];
		  $_SESSION['ms_mobile']=$row['ms_mobile'];
          header('location:userpage.php');
	 }
	 else{
	 	header('location:login.php');
	 }
	 
  }
?>