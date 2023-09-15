<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login_sample_bd";


if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to connect!");
}
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
.add-user {
    text-align: left;
    margin-top: 20px;
}

/* Style the link */
.add-user a {
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
.add-user a:hover {
    background-color: #0056b3; /* Darker background color on hover */
}

    </style>
    <div class="container mt-5">
          <div class="add-user">
    <a href="reg_ad.php">Add User</a>
    <a href="admin.html">Admin Home</a>
</div>
</div>

</div>
<div class="container mt-3">
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Photo</th>
                <th scope="col">Gender</th>
                <th scope="col">Address</th>
                <th scope="col">Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $sql="select * from user";
            $result=mysqli_query($con,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $Name=$row['name'];
                    $Number=$row['number'];
                    $Email=$row['email'];
                    $Password=$row['password'];
                    $Photo=$row['photo'];
                    $Gender=$row['gender'];
                     $Address=$row['address'];


                    echo '<tr>
                    <th scope="row">'.$Name.'</th>
                    <td>'. $Number.'</td>
                    <td>'.$Email.'</td>
                    <td>'.$Password.'</td>
                    <td>'.$Photo.'</td>
                    <td>'.$Gender.'</td>
                    <td>'. $Address.'</td>
                    <td> 
                <button class="btn btn-primary"><a href="update.php?updateid='.$Name.'"class="text-light">Update</a></button>
                
                <button class="btn btn-danger"><a href="delete_user.php?deleteid='.$Name.'"class="text-light">Delete</a></button>
                </td>
                    </tr>';

                }
            }
        

            ?>

            
            
        </tbody>

    </table>
              

     <!--<button class="btn btn-primary"><a href="admin.html"class="text-light">Admin Home</a></button>-->
              
</div>
           


</body>
</html>