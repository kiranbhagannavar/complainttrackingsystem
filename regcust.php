<?php 
include 'dbconnection.php';

    $query="SELECT * FROM tblcustomer WHERE name='{$_POST['user']}'";
			$result=mysql_query($query);
			if(mysql_num_rows($result)>0) {
				header('location:newuser.php?msg=3');
			}else {
				$query="INSERT INTO tblcustomer(name, password, address, email, mobile) VALUES('{$_POST['user']}', '{$_POST['pass1']}', '{$_POST['addr']}','{$_POST['email']}','{$_POST['mob']}')";
                                $result = mysql_query($query);
                                if($result){
                                    header('Location:newuser.php?msg=1');	
                                }else{
                                    header('location:newuser.php?msg=2');
                                }

}
?>
