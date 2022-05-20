<?php
    require 'config.php';


    $faces = $_POST["face"];
	$cat = $_POST["category"];
	$com = $_POST["comment"];
	
	$sql = "insert into Feedback(ID,Opinion,Category,Comment)values('',' $faces','$cat','$com')";
	
	
	
	if($con->query($sql) ) {
		echo "Inserted successfuly";
		header("location: Successful.html");

	}
	else{
		echo "record insert not succesful. Error :" . $con->error;
	}
	$con->close();




?>