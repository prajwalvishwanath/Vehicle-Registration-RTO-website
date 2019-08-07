<?php
session_start();
?>


	<!doctype html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>

<title>Register</title>
    <style> 
      body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:18px;
	    font-color : white;
         }

         label {
            font-weight:bold;
            width:150px;
            font-size:14px;
            font-color : white;
         }
         
         .box {
            border:#708090 solid 1px;
         }   
            
    
	
	.logo {
			position: absolute;
			left: 20px;
			top: 5px;
		 }
		 
		 .login {
			position: absolute;
			left: 700px;
			top: 0px;
		 }
		 
		  #navbar {
			position: absolute;
			left: 290px;
			top: 15px;
			width:76%;
		 }
		 
		 hr 
		{
			margin-top :120px;
			
		}
		
		.event 
		 {
			position: absolute;
			left: 650px;
			top: 80px; 
			
		 }
		 
		 .event_usrname {
			
			position: absolute;
			left: 100px;
			top: 0px;
		}
		
		.event_date {
			
			position: absolute;
			left: 130px;
			top: 45px;
		}
		
		.eventtype 
		{
			position: absolute;
			left: 150px;
			top: 185px;
		}
		

		.eventcost	{
			
			position: absolute;
			left: 150px;
			top: 225px;
		}
		
		.eventguest	{
			
			position: absolute;
			left: 150px;
			top: 265px;
		}
		
		#event_book {
			position: absolute;
			left: 70px;
			top: 320px;
		}
		
		.event_address {
				position: absolute;
			left: 150px;
			top: 45px;
			
		}
		
		#event_cancel
		{
			position: absolute;
			left: 150px;
			top: 320px;
		}
		
		.event_details {
			position: absolute;
			left: 450px;
			top: 130px;
			width:25%;
		}
}
            
        
    </style>
</head>
<body>
   
    <div id="interestsWrapper" class="wrapper">
<body background="wood.jpg" width=500px; bgcolor = "#FFFFFF">
			<div class = "logo">
				<img src="Logo.jpg" class="float-right" width = 250px; height = 100px; >
			</div>
			
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark" id="navbar">
				  <ul class="navbar-nav">
					<li class="nav-item active">
					  <a class="nav-link" href="admin_page.php">Home</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="about_page.php">About US</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link " href="contact_page.php">Contact Us</a> 
					</li>
					<li class="nav-item" style="position:absolute;right:150px;">
					  <a class="nav-link " href="#">Welcome : <i><?php echo $_SESSION['loggedInUserId']; ?></i></a>
					  
					</li>
					<li class="nav-item" style="position:absolute;right:30px;">
					  <a class="nav-link" href="login_page.php">Log Out</a>	
					</li>
				  </ul>
			</nav>
		
		
		
		
		<legend class ="event" style="color:#000000"> Enter Registration Details </legend>
	
	<hr>
		

	</div>
	  



<div class = "event_details">
	<form action="" method="POST">
		
		<div class="form-group">
			<label style="position:absolute;left:0px;top:0px;" class="control-label col-sm-2" >Reg Number:</label>
				
					<input style= "position:absolute;left:100px;top:0px;" type="text" class="form-control" id="reg_no" placeholder="Enter number" name="reg_no">
				
		</div>

		<div class="form-group">
			<label style="position:absolute;left:0px;top:50px;" class="control-label col-sm-2" for="email">Reg Date:</label>
				<input style="position:absolute;left:100px;top:50px;" class="form-control" id="date" name="reg_date" placeholder="MM/DD/YYY" type="text"/>
      				
				</div>

		<div class="form-group">
			<label style="position:absolute;left:0px;top:100px;" class="control-label col-sm-2" >Chassis Number:</label>
				
					<input style= "position:absolute;left:100px;top:100px;" type="text" class="form-control" id="cha_no" placeholder="Enter number" name="chassis_no">
				
		</div>

		<div class="form-group">
			<label style="position:absolute;left:0px;top:150px;" class="control-label col-sm-2" for="email"> FC Upto:</label>
				<input style="position:absolute;left:100px;top:150px;" class="form-control" id="date" name="fc_upto" placeholder="MM/DD/YYY" type="text"/>
      				
				</div>

		
		<div class="form-group">
			<label style="position:absolute;left:0px;top:200px;" class="control-label col-sm-2" >Engine Number:</label>
				
					<input style= "position:absolute;left:100px;top:200px;" type="text" class="form-control" id="eng_no" placeholder="Enter number" name="engine_no">
				
		</div>		
		
		<div class="form-group">
			<label style="position:absolute;left:0px;top:250px;" class="control-label col-sm-2" >Insurance No:</label>
				
					<input style= "position:absolute;left:100px;top:250px;" type="text" class="form-control" id="ins_no" placeholder="Enter number" name="insurance_no">
				
		</div>

		
		  <div class="container">
			  <button style="position:absolute;left:150px;top:350px;" type="submit" id= "event_book" class="btn btn-primary" name="submit">ADD</button>
			  <button style="position:absolute;left:250px;top:350px;" type="submit" id ="event_cancel" class="btn btn-primary" name="submit">Refresh</button>
		</div>
						
</form>		
</div>

		<div class="view_event" style="position:absolute;left:600px;top:550px;">
			  <a href="owner_details.php">NEXT:- OWNER DETAILS </a>
		</div>



<?php

if(isset($_POST["submit"]))
{
	
	if(isset($_SESSION['loggedInUserId']) != NULL)
	{
		
	if(!empty($_POST['reg_no']) && !empty($_POST['reg_date']) && !empty($_POST['chassis_no']) && !empty($_POST['fc_upto']) && !empty($_POST['engine_no']) && !empty($_POST['insurance_no'])) 
		{
			$reg    = $_POST['reg_no'];
			$rdate    = $_POST['reg_date'];
			$chass    = $_POST['chassis_no'];
			$fcdate    = $_POST['fc_upto'];
			$eng    = $_POST['engine_no'];
	          	$insu   = $_POST['insurance_no'];

			$con = mysqli_connect('localhost','root','') or die(mysqlii_error());
			
			mysqli_select_db($con,'vehicle_registration') or die("cannot select DB");
			
			$sql="INSERT INTO registration_details(reg_no,reg_date,chassis_no,fc_upto,engine_no,insurance_no) VALUES('$reg','$rdate','$chass','$fcdate','$eng','$insu')";
	
			$result = mysqli_query($con,$sql);
					
			if($result)
			{
				echo "<div style='position:absolute;top:80px;left:400px;width:50%;' class='alert alert-success'><strong>Success!</strong></div>";
				
			} 
			else 
			{
				echo "<div style='position:absolute;top:80px;left:400px;width:50%;' class='alert alert-warning'><strong>Failure!</strong></div>";
			}

		} 
		else 
		{
			//echo "All fields are required!";
		}
	}
}
?>


    
</body>
</html>
