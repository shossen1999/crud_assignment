<?php
	session_start(); 
	include "connect.php";
	
	
	
	$msg=""; 
	$x=0;
	if(isset($_POST['login'])){  
	
		$email=$_POST['email'];
		$password=$_POST['password'];
		$sql="SELECT * FROM crud WHERE email='$email'";

    //     $name=$_POST['name'];
    // $email=$_POST['email'];
    // $mobile=$_POST['mobile'];
    // $password=$_POST['password'];
		
        $result=mysqli_query($con,$sql);
		$row=$result->fetch_assoc();
		//echo $result->num_rows;
		if($result->num_rows==1){
			$_SESSION['name']=$row['name'];
			$_SESSION['email']=$row['email'];
			$_SESSION['password']=$row['password'];
			
			header('location:display.php');
			// echo "successfully logged in";
		}
		else {
			$x=1;
			$msg="<span style='color:red; font-weight:bold;'>  Email or Password is wrong </span>";
            // echo "wrong email or password";
		}
	}
		


?>

<!DOCTYPE html>
<html lang="en">
<body>	
	<center>
		<h1>Login</h1>
		<?php
			//if password or username wrong then this code will be executed
			if($x==1){ 
			 echo $msg;
			 }
		?>
		<form method="POST" action="login.php">
			<label>Email</label>
			<input type="email" placeholder="Enter your email" name="email"> <br> <br>
			<label>Password</label>
			<input type="password"  placeholder="Enter your password" name="password" > <br> <br>
			<input type="submit" name ="login" value="Login">
		</form>
	</center>	
	
</body>
</html>