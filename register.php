<?php
session_start();
	session_destroy();
$connectivity=mysqli_connect("localhost","root","","register");
if(isset($_POST['submit']))
{
	$username=$_POST["a1"];
	$email=$_POST["a2"];
	$password=$_POST["a3"];
	$confirmpassword=$_POST["a4"];
	
	$query2 = "select * from register where email='$email'";
	$query3=mysqli_query($connectivity,$query2);
	if(mysqli_fetch_array($query3))
       echo ("<script> alert('You are already registered. Please choose another email');</script>");
	elseif($password==$confirmpassword)
	{
	   $query="insert into register(Username,email,Password,confirmpassword) values ('$username','$email','$password','$confirmpassword')";
	   echo ("<script> alert('You are successfully registered');</script>");
	   mysqli_query($connectivity,$query);
	}
	else
	   echo ("<script> alert('Password not match');</script>");
}	   
?>	     
	   	  

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
	.background{
	    height:500px;
		width:1050px;
	    background-image:url('job2.png');
		background-position:center;
		background-size:cover;
		position:relative;
		}
	.login{
	    background:transparent;
		top:10%;
		width:300px;
		height:400px;
		border:1px solid lightgrey;
		border-radius:30px;
		position:absolute;
		left:30%;
		}
	.login:hover{
	    background-color:lightgrey;
		top:10%;
		width:300px;
		height:400px;
		border-radius:30px;
		position:absolute;
		left:30%;
		}
	.avatar{
	    position:absolute;
		top:-10%;
		left:37%;
		border-radius:50px;
		}
	details{
	    padding-top:50px;
		padding-left:30px;
		font-weight:bold;
		}
	.fill{
	    border:none;
		border-bottom:1px solid black;
		background:transparent;
		padding-top:10px;
		width:90%;
		}	
	.submit{
	    height:30px;
	    width:90%;
		}	
	.details a{
	    font-size:13px;
		color:black;
		text-decoration:none;
		}		
	.details a:hover{
	    text-decoration:underline;
		}
	.submit:hover{
	    cursor:pointer;
		border:1px solid black;	
		}
	.data{
	    padding-top:30px;
		padding-left:20px;
		}	
</style>	
</head>

<body>
<div class="background">
<div class="login">
<img src="avatar.png" class="avatar" height="80px" width="80px" />
<div class="details">
<h1 style="position:relative;left:90px;top:30px;">Register</h1>
<div class="data">
<form method="post" action="#">
<b>Username</b>
<br />
<input type="text" name="a1" placeholder="Enter Username" class="fill" required />
<br /><br />
<b>Email</b>
<br>
<input type="email" name="a2" placeholder="Enter your email" class="fill" required>
<br><br>
<b>Password</b>
<br />
<input type="password" name="a3" placeholder="Enter Password (mininum 6 characters)" class="fill" pattern=".{6,}" required />
<br /><br />
<b>Confirm Password</b>
<br />
<input type="password" name="a4" placeholder="Confirm Your Password" class="fill" required />
<br /><br />
<input type="submit" name="submit" />
</form>

</div>
</div>
</div>
</div>
<div style="position:absolute;top:500px;left:50%;">
<?php
include('copyright.php');
?>
</div>
</body>
</html>