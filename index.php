<!DOCTYPE html>
<html lang="en" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>Welcome To Complaint Tracking System</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css' />
	
	<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
</head>

<body>
	<!-- wraper -->
	<div id="wrapper">
		<!-- shell -->
		<div class="shell">
			<!-- container -->
			<div class="container">
				<!-- header -->
				<header id="header">
                                    <h1><a href="index.php"><center>Complaint Tracking System</center></a></h1>
					
				</header>
				<!-- end of header -->
				
				<!-- main -->
				<div class="main">
                    <center><font size="5">Welcome to Customer Help Center.<br />Happy to help you :)<br /><br /></font></center>
					
					<section class="cols">
						<div class="col1">
							<img src="css/images/col-img1.png" alt="" />
							<div class="col-cnt">
								<h2>Customer Login</h2>
								<form method="post" name="f" action="login.php">
								<table>
							<tr><td>Username:</td><td><input type="text" size="15" name="user1" required/></td></tr>
							<tr><td>Password:</td><td><input type="password" size="15" name="pass1" required/></td></tr>
							<tr><td></td><td><input type="submit" value="Login"/></td></tr>
							<tr><td></td></tr>
						</table>
					</form>
                                                                
							</div>
						</div>


<!-- ************************************************************************ -->
						<div class="col1">
							<img src="css/images/col-img2.png" alt="" />
							<div class="col-cnt">
								<h2>Employee Login</h2>
								<form method="post" name="f" action="login.php">
                                                                    <table>
                                                                       <tr><td>Username:</td><td><input type="text" size="15" name="user2" required/></td></tr>
                                                                       <tr><td>Password:</td><td><input type="password" size="15" name="pass2" required/></td></tr>
                                                                       <tr><td></td><td><input type="submit" value="Login"/></td></tr>
                                                                    </table>
                                                                </form>
                                                                
							</div>
						</div>
						<div class="col1">
							<img src="css/images/col-img3.png" alt="" />
                					<div class="col-cnt">
								<h2>Admin Login</h2>
								<form method="post" name="f" action="login.php">
                                                                    <table>
                                                                       <tr><td>Username:</td><td><input type="text" name="user3" size="15" required/></td></tr>
                                                                       <tr><td>Password:</td><td><input type="password" name="pass3" size="15" required/></td></tr>
                                                                       <tr><td></td><td><input type="submit" value="Login"/></td></tr>
                                                                    </table>
                                                                </form>
							</div>
                                                        
						</div>
						<div class="cl">&nbsp;
                                                </div><center>
                                               <?php 
                                                if(isset ($_GET['msg'])){
                                                    if($_GET['msg']==0){
                                                        echo "<br/><font color='maroon'>Invalid Username/Password</font>";
                                                    }
                                                }
                                                ?>
					</center></section>
                                        
				

					
			
				<!-- end of main -->
				
				<div id="footer">
					
					<div class="footer-bottom">
						
						<p class="copy">&copy; Copyright 2017 Complaint Tracking System <span>|</span> <strong>Design by <a href="" target="_blank">Kiran Bhagannavar & Sunil Mirashi </a></strong></p>
						<div class="cl">&nbsp;</div>
					</div>
				</div>
			</div>
			<!-- end of container -->	
		</div>
		<!-- end of shell -->	
	</div>
    </div>
	<!-- end of wrapper -->
</body>
</html>