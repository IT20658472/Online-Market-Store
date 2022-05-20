
<?php

// Database connection
	$conn = new mysqli('localhost','root','','online');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}
if(isset($_POST["Sumbit"]))
{   
     
	$fullname=$_POST['fullname'];
	$email =$_POST['email'];
    $phonenumber =$_POST['phonenumber'];
	$address =$_POST['address'];
	$password =$_POST['password'];
	$confirmpassword=$_POST['confirmpassword'];
	
	$sql="INSERT INTO registerdeatails(fullname,email,phonenumber,address,Password,confirmpassword) VALUES  ('$fullname' , '$email' , '$phonenumber' , '$address' , '$password' , '$confirmpassword')";
	

	if($conn->query($sql)){
		
		header("Location:insert.php");
	}
	else
	{
		echo "<script>alert('failed')</script>" .$conn->error;
	}
}


$conn->close();

	?>
	