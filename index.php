<?php

$host=getenv("MARIADB_SERVICE_HOST");
$user=getenv("db-user");
$pass=getenv("db-password");
$con=mysqli_connect($host,$user,$pass,"student_registration");
$row="SELECT * FROM news order by Time DESC";

$re=mysqli_query($con,$row);
 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="navbar.css">

</head>
<body style="background-image: url(index.jpg);">

<nav  class="navbar-fixed-top">
      <input  type="checkbox" id="check">
      <label style="width: 0px;" for="check" class="checkbtn">
        <i   class="glyphicon glyphicon-th-list"></i>
      </label>
       <label  class="logo"><a href="#" style="text-decoration: none;color: #d8b566"> Student Info</a></label>
      <ul>
        <li><a href="login.html">Login</a></li>
      <li ><a href="signup.html">Signup</a></li>
      </ul>
    </nav>
<div class="row" style="margin-top:100px;">
  <div class="col-md-3">
         
       </div>
       <div class="col-md-6">
	        <h1>hi</h1>
         <?php  
        while($row1=mysqli_fetch_array($re))  { ?>
       
	      
          
         <form style="border: 3px solid rgba(0, 0, 0,.2);margin-top:50px;border-radius: 10px;background-color: rgba(255,255,255);box-shadow:  0 0 10px rgba(255,255,255,.3);padding: 30px;padding-bottom: 50px;">

            <h3 style="text-align: center;font-weight: bold;">ADITYA EDUCATIONAL INSTITUTIONS</h3><br>
            <br>
            <h5 style="text-align: right;">Date: <?php echo $row1['Time']?></h5><br>

            <h4 style="margin-top:20px;font-weight: bold;text-align: center;text-transform: uppercase;"><u><?php echo $row1['Heading']?></u></h4><br><br>

           <p style="margin-top:0px;">
             <?php echo $row1['Description']?>
           </p>
           <p style="text-align:center;">Thank you</p>
          <br><br>
          <h5 style="margin-top:20px;float: right;">Posted by: <?php echo $row1['Name']?></h5>
          <br>
         </form> 
             
  <?php }



  ?>
</div>
       <div class="col-md-3">
         
       </div> 

</div>
    
    
</body>
</html>
