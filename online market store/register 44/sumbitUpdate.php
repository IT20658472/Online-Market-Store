<?php
// Database connection
	$conn = new mysqli('localhost','root','','online');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}
 ?>

<?php
    
    if isset($_POST['sumbit'])
    {
        echo "hello" ;


   	$ID = $_POST['ID'];
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
	$address = $_POST['address'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];



    $query = "UPDATE registerdeatails SET fullname='$fullname', email='$email', phonenumber='$phonenumber', address='$address', Password='$password', confirmpassword='$confirmpassword' WHERE ID= '$ID' ";

    $data = mysqli_query($conn,$query);

    if($data)
    {
		
        echo "<script> alert ('Record Update Successfully !')</script>";
			header("Location:update.php");
    }
    else
    {
        echo " <script> alert ('Error in updating record')</script>";
    }

?>
