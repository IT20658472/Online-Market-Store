<?php
// Database connection
	$conn = new mysqli('localhost','root','','online');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}
 ?>

<DOCTYPE html>

<head>

<center>
<div class="col-lg-4">

	<form action="sumbitUpdate.php" name="from1" method="POST">
	  <div class="container">
	    <h1>User data Update</h1>

	   	<hr>
	    <label for="id"><b>customer ID</b></label><br>
	    <input type="text" value="" placeholder="Enter customerID" name="id" >
	     <br>

	    <label for="cus"><b>customer Full Name</b></label><br>
	    <input type="text" value="" placeholder="Enter fullname" name="fullname" >
	     <br>

	    <label for="email"><b>Customer Email</b></label><br>
	    <input type="text" value="" placeholder="Enter Email" name="username">
	     <br>

	    <label for="number"><b>Contact Number</b></label><br>
	    <input type="text" value="" placeholder="Enter number" name="phonenumber">
		 <br>

		 <label for="payment"><b>Address</b></label><br>
	    <input type="text" value="" placeholder="Enter Address" name="address">
		 <br>
        <label for="psw"><b>Password</b></label><br>
	    <input type="password" value="" placeholder="Enter Password" name="password" >
	     <br>
		 <label for="camount"><b>Confirmpassword</b></label><br>
	    <input type="text" value="" placeholder="Enter Confirmpassword" name="confirmpassword">
		<hr>

	   	<input type="submit" name="submit"  value="Update" readonly>
		 </div>

</form>
</div>

<br>
<br>


  <div class="customerData tb1" style="border-style: groove; border-color: DarkBlue">
    <table border="2" width="100%">
    <tr>
      <th class="col1">Customer ID</th>
      <th class="col2">Customer Full Name</th> 
      <th class="col3">Email</th> 
      <th class="col4">Phonenumber</th> 
      <th class="col5">Address</th> 
      <th class="col6">Password</th>
      <th class="col7">confirmpassword</th>


    </tr> 
</center>

<?php

    $sql = "select * from registerdeatails";
    $result = $conn->query($sql);

    if($result->num_rows>0)
    { 
      while($row=$result->fetch_assoc())
      {
        echo "<tr><td>".$row["ID"]."</td><td>".$row["fullname"]."</td><td>".$row["email"]."</td><td>".$row["phonenumber"]."</td><td>".$row["address"]."</td><td>".$row["Password"]."</td><td>".$row["confirmpassword"]."</td><tr>";
      }
    }

    else
    {
      echo "0 Result.";
    }

    echo"</table>";
    $conn->close();    

?>



</body>
</html>