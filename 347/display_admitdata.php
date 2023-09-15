<?php
include("dbconnection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Crud Operation</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
	<style >

		body{
			background-image: url('PL1NGm.jpeg');
		}
		/* Style the container */
.add-patient {
    text-align: left;
    margin-top: 20px;
}

/* Style the link */
.add-patient a {
    display: inline-block;
    background-color: #007bff; /* Background color */

    color: #fff; /* Text color */
    padding: 10px 20px;
    text-decoration: none; /* Remove underlines */
    border-radius: 5px; /* Rounded corners */
    font-weight: bold; /* Bold text */
    transition: background-color 0.3s; /* Smooth background color transition */
}

/* Hover effect */
.add-patient a:hover {
    background-color: #0056b3; /* Darker background color on hover */
}

	</style>
	<div class="container mt-5">
          <div class="add-patient">
    <a href="hospital_ad.php">Add Patient</a>
    <a href="admin.html">Admin Home</a>
</div>
</div>

</div>
<div class="container mt-3">
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Problem</th>
                <th scope="col">Specialist Doctor</th>
                <th scope="col">Location</th>
                <th scope="col">Operation</th>
            </tr>
        </thead>
        <tbody>
        	<?php

        	$sql="select * from Hospital_Admit";
        	$result=mysqli_query($con,$sql);
        	if($result){
        		while($row=mysqli_fetch_assoc($result)){
        			$Name=$row['Name'];
        			$Phone=$row['Phone'];
        			$Address=$row['Address'];
        			$Problem=$row['Problem'];
        			$Specialist_doctor=$row['Specialist_doctor'];
        			$Location=$row['Location'];

        			echo '<tr>
        			<th scope="row">'.$Name.'</th>
        			<td>'.$Phone.'</td>
        			<td>'.$Address.'</td>
        			<td>'.$Problem.'</td>
        			<td>'.$Specialist_doctor.'</td>
        			<td>'.$Location.'</td>
        			<td> 
 				<button class="btn btn-primary"><a href="update.php?updateid='.$Phone.'"class="text-light">Update</a></button>
 				
 				<button class="btn btn-danger"><a href="delete.php?deleteid='.$Phone.'"class="text-light">Delete</a></button>
        	    </td>
        			</tr>';

        		}
        	}
        

        	?>

        	
            
        </tbody>

    </table>
              


              
</div>
           


</body>
</html>