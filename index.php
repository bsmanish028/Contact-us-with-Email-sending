<?php
	require_once("include/DB.php");
	require_once("include/session.php");
	require_once("include/functions.php");
?>

<?php
if(isset($_POST["Submit"])){
$Username=($_POST["Username"]);
$Password=($_POST["Password"]);
$Messages = ($_POST["Messages"]);
$Mobile = ($_POST["Mobile"]);
if(empty($Username)||empty($Password)){
	$_SESSION["ErrorMessage"]="All Fields must be filled out";
	Redirect_to("index.php");
	
}
else{
		/*$Found_Account=Login_Attempt($Username,$Password);
		$_SESSION["User_Id"]=$Found_Account["id"];
		$_SESSION["Username"]=$Found_Account["username"];
		if($Found_Account){
		$_SESSION["SuccessMessage"]="Welcome  {$_SESSION["Username"]} ";
			Redirect_to('dashboard.php');
		}else{
			$_SESSION['ErrorMessage'] = "Invalid Username/Password";
			Redirect_to('adminlogin.php');
		}*/
		
		
        	$mailto = "manishkr201331@gmail.com";
        	$header = $Password;
        	$subject ="Contact Us Mail from ". $Username;
        	$body = "Sender Mail: ".$Password. "\n"."Sender Mobile No. ".$Mobile."\n"."Message: \n\n".$Messages;
        
        	if(mail($mailto,$subject,$body,$header)){
        		//echo "Mail sent successfully";
        		$_SESSION['SuccessMessage']="Thank you for contacting us. We will be in touch with you shortly.";
        	}else{
        		//echo "Mail sending Fail";
        		$_SESSION['ErrorMessage']="Sorry for the inconvience, Please try again later.";
        	}
        		
	}
	
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Contact 2 Manish Kumar</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery-min-3.2.1.min.js" ></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/adminstyle.css">
<style type="text/css">
	.FieldInfo{
		color:rgb(251,174,44);
		font-size: 1.2em;
		font-family: Bitter,Georgia,"Times New Roman", Times, serif;
	}
	body{
		background: url('images/coffee.jpg');
		height: 100%; 

    /* Center and scale the image nicely */
    /*background-position: center;*/
    background-repeat: no-repeat;
    background-size: cover;
	}
	
	ul li ul.dropdown{
        min-width: 250%;
        background:#f2f2f2;
        display: none;
        position:absolute;
        z-index:999;
    }
    ul li:hover ul.dropdown{
        display: block;	/* Display the dropdown */
    }
    ul li ul.dropdown li{
        display: block;
    }
	
</style>
</head>

<body>
	<div style="height: 10px; background: #27aae1;"></div>
	<nav class="navbar navbar-inverse" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapsed" data-target="#collapse">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php?Page=1" class="navbar-brand">
					<img src="images/manis.png" style="margin-top: -8px;margin-left: -68px" width="250" height="40">
				</a>
				
			</div>
				<div class="collapse navbar-collapse" id="collapse">
		<ul class="nav navbar-nav">
			<li><a href="https://github.com/bsmanish028" target="_blank">GitHub </a></li>
			<li ><a href="https://www.linkedin.com/in/bsmanish028/" target="_blank">Linkedin</a></li>
			<li><a href="https://www.facebook.com/manish.bs.kr" target="_blank">Facebook</a></li>
			<li><a href="#">Projects &#9662;</a>
			  <ul class="dropdown">
                <li><a href="https://bsmanish028.github.io/Bday-Project" target="_blank">B'Day Website</a></li>
                <li><a href="http://sukanyafoundation.in/index.php?Page=1" target="_blank">The Programmer Blog</a></li>
                <li><a href="https://thecollegeroom.tk" target="_blank">The College Room</a></li>
             </ul>
			</li>
			<li class="active"><a href="index.php">Contact Me</a></li>
			
		</ul>
		</div>
		</div>
		</div>
	</nav>
	<div class="Line" style="height: 10px; background: #27aae1;"></div>

	<!---Ending Navigation Bar-->
	<div class="container-fluid">
		<div class="row">
		    <!---About Part starts--->
				<div class="col-sm-offset-1 col-sm-3" style="margin-top: 80px;"><!---Side Area-->
					<div class="panel panel-warning">
				<div class="panel-heading">
					<h2 class="panel-title ">About Me</h2>				
				</div>
				<div class="panel-body background">
					<img class="img-responsive img-circle imageicon" src="images/Manish.jpg">
					<h2>Manish Kumar</h2><span>manishkr201331@gmail.com</span><br><br>
					<p class="panel-title">CSE Undergraduate <br> NIT Silchar <br>Website and Android Developer<br> <a href="https://bsmanish028.sukanyafoundation.in" target="_blank"> Hire Me</a></p>
				</div>
				<div align="center" class="panel-footer">&copy; <a href="https://bsmanish028.sukanyafoundation.in" target="_blank"> Manish Kumar</a></div>
			</div></div
			<!-- Ending of Side Area-->
			
			<div class="col-sm-offset-2 col-sm-4" style="background: #ffffff;margin-top: 44px;">
				

				<div><?php echo Message(); 
							echo SuccessMessage();
					?></div>
				<h1>Contact Me</h1>
				<p class="description">Hey there, am very happy to have you here.Please leave your message.I'll contact to you shortly. <br> Thanks.!</p>
	

				<div><?php echo Message(); 
							echo SuccessMessage();
					?></div>

				<div>
					<form action="index.php" method="POST">
						<fieldset>
						<div class="form-group ">
						<label for="username"><span class="FieldInfo">Name: </span></label>
						<div class="input-group input-group-sm ">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
							</span>
						<input class="form-control" type="text" name="Username" id="username" placeholder="Your Name ">
						</div><br>
						<label for="password"><span class="FieldInfo">E-mail: </span></label>
						<div class="input-group input-group-sm">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-envelope"></span>
							</span>
						
						<input class="form-control" type="mail" name="Password" id="password" placeholder="Your E-mail "></div>
						<br>
						<label for="mobile"><span class="FieldInfo">Mobile Number: </span></label>
						<div class="input-group input-group-sm">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-earphone"></span>
							</span>
						
						<input class="form-control" type="text" name="Mobile" id="mobile" placeholder="Mobile No.(Optional) "></div>
						<br>
						<label for="message"><span class="FieldInfo">Message/Suggestion: </span></label>
						<div class="input-group input-group-lg">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-edit"></span>
							</span>
						<textarea width="500" class="form-control" name="Messages" id="message" placeholder="Enter your Message here...."></textarea></div>
						
					</div>

						
						
					</div>
					<br>
					<input class="btn btn-primary btn-block" type="submit" name="Submit" value="Submit">

				</fieldset>
					<br>
					</form>
				</div>
				
				
				
			</div><!-- Ending of Main Area-->
		</div><!-- Ending of Row-->
	</div><!-- Ending of Container-->
	
	

	

</body>
</html>