

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>register page</title>

    <link rel="stylesheet" href="Styles/styleregister.css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">

    <!-- Google fonts -->
       
    <link href='https://fonts.googleapis.com/css?family=Delius Unicase' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css2?family=Original+Surfer&display=swap' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Copse' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Delius Unicase' rel='stylesheet'>

</head>


<body>
    <!--Header-->
    <body style="background-image:url(wp2960635-solid-color-wallpaper.jpg)">
        <div class="head">
            <header class="home_nav_bar">
                <!--<img class="home_logo" src="home_logo.png" alt="home_tab_logo">-->
                    <img class="title" src="title.png" alt="home_tab_title">
                    <input type="text" placeholder="Serch your item...">
                    <ul class="home_nav_order">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Cart</a></li>
                        <li><a href="#">Wish list</a></li>
                        <li><a href="#">Account</a></li>
                    </ul> 
                </header> 
            
            <!------------------------------------------------------------------------------------------------------------>    
              <!--login navigation bar-->  
                <header class="login_nav_bar">
                    <ul class="login_nav_order">
                        <li><a href="#">Payment method</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Help</a></li>
                    </ul> 
                    <a href="#"><button class="log_btn">User Login</a></button> 
                    <a href="adminpage.php"><button class="sign_btn">Admin Login</a></button> 
                </header>
            </header>
        </div> 
        <div class="category_nav">
            <h3 class="category_name">Category</h3><br>
            <ul class="cat">
                <li><a class="cat" href="#" id="fashion_link">Fasion</a></li>
                <li><a class="cat" href="#" id="electronics_link">Electronics</a></li>
                <li><a class="cat" href="#" id="sports_link">Sports</a></li>
                <li><a class="cat" href="#" id="home_and_garden_link">Home & Garden</a></li>
            </ul>
    </div>
	<div class="topic">
    <h1 class="topic"><b>CREATE YOUR OWN ACCOUNT</b></h1>
    </div>   	
       
       
        
        
        
           
 
     <!--Text format-->   
  <div class="container">
    <section class="selection1">
        <div class="sss">
            <div style="margin-bottom: 50px;">
            <h1><b><u>Our valuable benefits..</b></h1><u></div>
            <div>
            <ul>
              <li>Better Prices</li><br>
              <li>Discreet Shopping</li><br>
              <li>You Can Send Gifts More Easily</li><br>
              <li>Less Compulsive Shopping.</li><br>
              <li>Discreet Purchases are Easier</li><br>
              <li>Price Comparisons</li><br>
              <li><p>Fewer Expenses</p></li><br>
              <li>Convenience</li>
            </ul>
          </div>
    
        
        </section> 
      
        <section class="section2">
         
          <!--register from-->
		   
         <div class="main">
            <div class="register"> 
<h2> Register for an account</h2>
     <form action="config.php" id="register" method="post">
	  <label >Full Name :</label><br>
        <input type="text1" placeholder="Full name" name="fullname"> <br> <br><br>
        <label >Enter Email :</label><br>		
        <input type="email" placeholder="Email" name="email"> <br> <br><br>
		<label >Enter phonenumber :</label><br>		
        <input type="text1" placeholder="Phone Number" name="phonenumber"> <br> <br><br>
       <label >Enter Address :</label><br>		
        <input type="text1" placeholder="Address" name="address"> <br> <br><br>
       
         <label >Enter Password :</label><br>		
        <input type="password" placeholder="Password" name="password"><br><br><br>
		 <label >Enter Confirm Password :</label><br>
        <input type="password" placeholder=" Confirm Password" name="confirmpassword"> <br><br><br>
    <input type="Submit" value="Sumbit" name="Sumbit" id="Sumbit">
              
    </div>
	</div>
   
              </form>
             
             
            
        </section>
        </div>
        <!-------------------------Footer---------------------------------->

    <div class="fixed-footer secondary-color">
        <a class="right-end" href="#">About Us</a>
    </div>
    
</body>
</html>
