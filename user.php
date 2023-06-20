<?php
include 'connect.php';

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql= "insert into crud (name,email,mobile,password )
    values('$name','$email','$mobile','$password') ";

    $result=mysqli_query($con,$sql);

    if($result)
    {
        // echo "Data inserted successfully";
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }

}

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  
  <body>

 <div class="container my-5">
   
<form method="post">

  <div class="mb-3">
    <label >Name</label>
    <input type="name" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
   
  </div>

  <div class="mb-3">
    <label >Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
   
  </div>

  <div class="mb-3">
    <label >Mobile</label>
    <input type="text" class="form-control" placeholder="Enter your mobile no" name="mobile" autocomplete="off">
   
  </div>

  <div class="mb-3">
    <label >Password</label>
    <input type="text" class="form-control" placeholder="Enter your password" name="password"  autocomplete="off">
   
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>


</form>


    </div>
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> -->
  </body>
</html>