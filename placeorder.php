<?php
extract($_POST);
session_start();
$sessid = session_id();
//echo $payment;
$user_id=$_SESSION['user_id'];
require_once"admin/libraries/dbconnect.php";
require_once"admin/libraries/curd.php";
$query="SELECT * FROM cart_tbl where added_by= '$sessid' ";
$result=mysqli_query($conn, $query) or die (mysqli_error($query));
 $ttl=0;
 $qty=0;
 while ($row = mysqli_fetch_assoc($result)){
    $value = $row['total'];
    $ttl += $value;
    $value1 = $row['prod_qty'];
    $qty += $value1;
    }

$orderqty=$qty;
$orderttl=$ttl;
date_default_timezone_set('asia/kolkata');
$date=date('Y-m-d');
$exp= date('d-m-Y',strtotime('+6 day'));
$orderno="shoppycart".rand(1000,9999);
$data=array(
'order_no'=>$orderno,
'order_qty'=>$orderqty,
'order_total'=>$orderttl,
'order_by'=>$user_id,
'order_date'=>$date,
'order_status'=>1
);

//$_SESSION['total_amount']=$orderttl;
$_SESSION['order_no']=$orderno;
if($payment=="cod"){
  $succ=insert_query('orders_tbl',$data,$conn);
  if($succ){
    $sql=" UPDATE cart_tbl SET status = '1',order_no= '$orderno' where added_by='$sessid'";
  mysqli_query($conn,$sql);
  $username = "sanjeevchoudhary1004@gmail.com";
  $hash = "7b70f76feb82b24bb291498c4ae955fb96bc37d06c76921aaf37b0e65482a1ac";

  // Config variables. Consult http://api.textlocal.in/docs for more info.
  $test = "0";

  // Data for text message. This is the text message data.
  $sender = "TXTLCL"; // This is who the message appears to be from.
  $numbers = "7909018279"; // A single number or a comma-seperated list of numbers
  $message = "Dear User, Thanks For shopping with us. "."\n"."Expected DOD: "."$exp. "."\n"."Order No: "."$orderno. "."\n"."www.eshopper.com";
  // 612 chars or less
  // A single number or a comma-seperated list of numbers
  $message = urlencode($message);
  $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
  $ch = curl_init('http://api.textlocal.in/send/?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch); // This is the result from the API
  curl_close($ch);
  	
  }
	header('location:ordersucc.php');
}
else{
  
  $suc=insert_query('orders_tbl',$data,$conn);
  if($suc){
   header('location:payuform.php');
  }
}


?>