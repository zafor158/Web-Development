<?php
include ('dbconnection.php');
 if(isset($_GET['deleteid'])){
 	$Name=$_GET['deleteid'];

 	$sql="DELETE FROM contact WHERE name='$Name'";
 	$result=mysqli_query($con,$sql);
 	if($result){
 		echo"Delete successfully";
 		header("Location:display_contactinfo.php");
 	}else{
 		die(mysqli_error($con));
 	}
 }
?>