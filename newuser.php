<!DOCTYPE html>
<html lang="en" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>Curve - Free CSS template by ChocoTemplates.com</title>
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
<script lang="javascript">
function val(){
    var p1=document.f.pass1.value;
    var p2=document.f.pass2.value;

    if(p1!=p2){
        alert('Password does not match');
        return false;
    }
    
        if(isNaN(document.f.mob.value)){
            alert("Please enter valid phone no");
            return false;
        }
       
         if(document.f.mob.value.length<10){
            alert("Please enter valid phone no")
            return false;
        }
    
       var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
       var address = document.f.email.value;
       
       if(reg.test(address) == false) 
       {
          alert("Invalid Email Address");
          return false;
       }
       
    return true;
}

 function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
       
function val1(){
    var p1=document.f1.pass1.value;
    var p2=document.f1.pass2.value;

    if(p1!=p2){
        alert('Password does not match');
        return false;
    }
    
        if(isNaN(document.f1.mob.value)){
            alert("Please enter valid phone no");
            return false;
        }
       
         if(document.f1.mob.value.length<10){
            alert("Please enter valid phone no")
            return false;
        }
    
       var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
       var address = document.f1.email.value;
       
       if(reg.test(address) == false) 
       {
          alert("Invalid Email Address");
          return false;
       }
       
    return true;
}       
</script>
<body>
	<!-- wraper -->
	<div id="wrapper">
		<!-- shell -->
		<div class="shell">
			<!-- container -->
			<div class="container">
				<!-- header -->
				<header id="header">
					<h1 id=""><a href="#"></a></h1>
					<!-- search -->
					
					<!-- end of search -->
				</header>
				<!-- end of header -->
				<!-- navigation -->
				<nav id="navigation">
					<ul>
						<li><a href="adminhome.php">HOME</a></li>
						<li class="active"><a href="newuser.php">New User</a></li>
                                                <li><a href="compview.php">View Comp's</a></li>
						<li><a href="assign.php">Assign Comp's</a></li>
						<li><a href="listengg.php">Engineers</a></li>
						<li><a href="listcust.php">Customers</a></li>
						<li><a href="logout.php">signout</a></li>
					</ul>
				</nav>
				
				<!-- end of slider -->
				<!-- main -->
				<div class="main">
					<section class="cols">
                                             <?php 
                                                if(isset ($_GET['msg'])){
                                                    if($_GET['msg']==1){
                                                            ?>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <?php
                                                        echo "<font color='maroon'>User/Employee created successfully</font>";
                                                    }else if($_GET['msg']==2){
                                                    echo "<font color='maroon'>Cannot create your account please try later</font>";
                                                    }else if($_GET['msg']==3){
                                                    echo "<font color='maroon'>Username already exists</font>";
                                                    }
                                                }
                                                ?>
                                            <div class="footer-cols"><div class="col"></div>
						<div class="col">
							<form name="f" method="post" action="regcust.php" onsubmit="javascript:return val();">
                                            <table cellspacing="12px;">
                                                <h3><font color="maroon">Customer Registration</font></h3>
                                                <tr><td>Username:</td><td><input name="user" type="text" size="40" maxlength="20" required/></td></tr>
                                                <tr><td>Password:</td><td><input name="pass1" type="password"size="40" maxlength="20" required/></td></tr>
                                                <tr><td>Re-Enter Password:</td><td><input name="pass2" type="password"size="40" maxlength="20" required/></td></tr>
                                                <tr><td>Address:</td><td><textarea name="addr" cols="37" rows="4" required></textarea></td></tr>
                                                <tr><td>Mobile No. </td><td><input name="mob" type="text" onkeypress="return isNumberKey(event)" size="40" maxlength="10" required/></td></tr>
                                                <tr><td>E-mail</td><td><input name="email" type="text" size="40" maxlength="50" required/></td></tr>
                                                <tr><td></td><td><input type="submit" value=" Register " /></td></tr>
                                            </table>
                                            </form>
						</div>
						
                                                
                                                
						<div class="col">
							<form name="f1" method="post" action="regemp.php" onsubmit="javascript:return val1();">
                                            <table cellspacing="12px;">
                                                <h3><font color="maroon">Employee Registration</font></h3>
                                                <tr><td>Username:</td><td><input name="user" type="text" size="40" maxlength="20" required/></td></tr>
                                                <tr><td>Password:</td><td><input name="pass1" type="password"size="40" maxlength="20" required/></td></tr>
                                                <tr><td>Re-Enter Password:</td><td><input name="pass2" type="password"size="40" maxlength="20" required/></td></tr>
                                                <tr><td>Address:</td><td><textarea name="addr" cols="37" rows="4" required></textarea></td></tr>
                                                <tr><td>Mobile No. </td><td><input name="mob" type="text" onkeypress="return isNumberKey(event)" size="40" maxlength="10" required/></td></tr>
                                                <tr><td>E-mail</td><td><input name="email" type="text" size="40" maxlength="50" required/></td></tr>
                                                <tr><td></td><td><input type="submit" value=" Register " /></td></tr>
                                            </table>
                                            </form>
						</div>
						
						<div class="cl">&nbsp;</div>
					</div>
                                         
					
					</section>
			
				</div>
				<!-- end of main -->
				
				<div id="footer">
					
					<!-- end of footer-cols -->
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
	<!-- end of wrapper -->
</body>
</html>