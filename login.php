<?php
session_start();
$connectivity=mysqli_connect("localhost","root","","register");
if(isset($_POST["submit"]))
{
$email=$_POST["b1"];
$password=$_POST["b2"];

$_SESSION["email"] = $_POST["b1"];
$myquery = "select * from register where email='$email' and Password='$password'";
$implementquery=mysqli_query($connectivity,$myquery);
if(mysqli_fetch_array($implementquery))
{
header('location:thankyou.php');
echo "<script>alert('You are successfully Logged In');</script>";
}
else
{
echo "<script>alert('Please check your email or password');</script>";
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>login</title>
<style>
    .background{
	    height:500px;
		width:1050px;
	    background-image:url('jobs.png');
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
		}	
	.details{
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
</style>		
</head>

<body>
<div class="background">
<div class="login">
<img src="avatar.png" class="avatar" height="80px" width="80px" />
<div class="details">
<h1 style="position:relative;left:80px;">Login</h1>
<form method="post" action="#" >
Email
<br />
<input type="text" name="b1" placeholder="Enter Email" class="fill" required />
<br /><br />
Password
<br />
<input type="password" name="b2" placeholder="Enter Password" class="fill" pattern=".{6,}" required />
<br /><br />
<input type="submit" name="submit" value="Login" class="submit" />
</form>
<br />
<a href="">Forgot Password?</a>
<br /><br />
<a href="register.php">Not Having Account? Register Here</a>
</div>
</div>
</div>
<div>
</div>
<?php
include('copyright.php');
?>
</body>
</html>
