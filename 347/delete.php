<?php
include ('dbconnection.php');
 if(isset($_GET['deleteid'])){
 	$Phone=$_GET['deleteid'];

 	$sql="DELETE FROM Hospital_admit WHERE Phone='$Phone'";
 	$result=mysqli_query($con,$sql);
 	if($result){
 		echo"Delete successfully";
 		header("Location:display_admitdata.php");
 	}else{
 		die(mysqli_error($con));
 	}
 }
?>