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
<form action="function.php" name="from1" method="POST">
  <div class="container">
    <h1>User data insert</h1>
   

    <label for="cus"><b>Full name</b></label><br>
    <input type="text" placeholder="Enter Full name"   name="fullname" >
     <br>
    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email"   name="email">
     <br>
    <label for="psw"><b>Phonenumber</b></label><br>
    <input type="text" placeholder="Enter Phonenumber"  name="phonenumber" >
     <br>
    <label for="number"><b>Address</b></label><br>
    <input type="text" placeholder="Enter Address"   name="address">
	 <br>
	 <label for="payment"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password"  name="password">
	 <br>
	 <label for="camount"><b>confirmpassword</b></label><br>
    <input type="password" placeholder="Enter confirmpassword"   name="confirmpassword">
	
	<hr>

   	<button type="submit" name="Sumbit"  value="Sumbit" class="registerbtn">Sumbit</button>
	 </div>


  
</form>
</div>

<br>
<br>


  <div class="customerData tb1" style="border-style: groove; border-color: DarkBlue">
    <table border="2" width="100%">
    <tr>
	 
      <th class="col1">fullname</th>
      <th class="col2">email</th> 
      <th class="col3">phonenumber</th> 
      <th class="col4">address</th> 
      <th class="col5">Password</th> 
      <th class="col6">confirmpassword</th>
      <th class="col8">Edit</th> 
     
	 
    </tr> 
</center>

<?php
  error_reporting(0);
    $sql = "select * from registerdeatails";
    $result = $conn->query($sql);

    if($result->num_rows>0)
    { 
      while($row=$result->fetch_assoc())
      {
        echo "</td><td>".$row["fullname"]."</td><td>".$row["email"]."</td><td>".$row["phonenumber"]."</td><td>".$row["address"]."</td><td>".$row["Password"]."</td><td>".$row["confirmpassword"]."</td><td><a href='update.php? id=$row[id]& fullname=$row[fullname]& email=$row[email]& phonenumber=$row[phonenumber]& address=$row[address]& password=$row[Password]& confirmpassword=$row[confirmpassword]'>  <input type = 'submit' value='Edit'></a></td><tr>";
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