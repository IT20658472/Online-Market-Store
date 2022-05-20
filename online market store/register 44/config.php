<?php

	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];
	$phonenumber = $_POST['phonenumber'];
	$address = $_POST['address'];
	// Database connection
	$conn = new mysqli('localhost','root','','online');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registerdeatails(fullname,email,phonenumber,address,password,confirmpassword) values(?, ?, ?, ?, ?,?)");
		$stmt->bind_param("ssssss", $fullname,$email,$phonenumber,$address,$password,$confirmpassword);
		$execval = $stmt->execute();
		echo $execval;
		
		header("location:home.html");
		$stmt->close();
		$conn->close();
	}
?>