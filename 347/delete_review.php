<?php
include ('dbconnection.php');
 if(isset($_GET['deleteid'])){
 	$Email=$_GET['deleteid'];

 	$sql="DELETE FROM review WHERE email='$Email'";
 	$result=mysqli_query($con,$sql);
 	if($result){
 		echo"Delete successfully";
 		header("Location:display_review.php");
 	}else{
 		die(mysqli_error($con));
 	}
 }
?>