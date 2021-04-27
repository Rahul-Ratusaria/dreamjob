<?php
session_start();
$connectivity=mysqli_connect("localhost","root","","register");
if(isset($_POST["postjob"]))
{
$name=$_POST['name'];
$companyname=$_POST['companyname'];
$contactnumber=$_POST['contactnumber'];
$email=$_POST['email'];
$cityname=$_POST['city'];	
$description=$_POST['description'];
$jobtype=$_POST['jobtype'];
$personquality=$_POST['personquality'];

$query2 = "select * from recruiter ";
$query3=mysqli_query($connectivity,$query2);
if(mysqli_fetch_array($query3))
{
$query="insert into recruiter(name,companyname,contactnumber,email,cityname,description,jobtype,personquality) values('$name','$companyname','$contactnumber','$email','$cityname','$description','$jobtype','$personquality')";
mysqli_query($connectivity,$query);
}
}

function getcomments()
{
$conn = mysqli_connect('localhost','root','','register');
$sql="SELECT * FROM recruiter";
$result = mysqli_query($conn,$sql);
while($row=$result->fetch_assoc())
{
echo "<div class='commentbox'>";
echo "Name:&nbsp&nbsp".$row['name']."<br>";
echo "Company Name:&nbsp&nbsp".$row['companyname']."<br>";
echo "Number:&nbsp&nbsp".$row['contactnumber']."<br>";
echo "Email:&nbsp&nbsp".$row['email']."<br>";
echo "City:&nbsp&nbsp".$row['cityname']."<br>";
echo "Description About Company:&nbsp&nbsp".$row['description']."<br>";
echo "Type Of Job:&nbsp&nbsp".$row['jobtype']."<br>";
echo "Quality in a Person Needed:&nbsp&nbsp".$row['personquality'];
echo "</div>";
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<style>
    input{
		width:300px;
		height:10px;
		padding:10px;
		border-color:red;
		background:transparent;
		border-radius:20px;
		}
	textarea{
		resize:none;
		width:300px;
		height:30px;
		padding:10px;
		border:solid 2px red;
		border-radius:10px;
		background:transparent;
		}
	input[type=submit]{
	    background-color:lightgrey;
		height:30px;
		}		
	.socialmedia1{
	     height:47px;
	     width:45px;
	     border-radius:30px;
		 background:transparent url('facebook0.png');
		 position:relative;
		 top:110px;
		 left:990px;
		 }
	.socialmedia1:hover{
	     height:45px;
		 width:45px;
		 border-radius:30px;
		 background:transparent url('facebook1.png');
		 }
    .socialmedia2{
	     height:47px;
		 width:45px;
		 border-radius:30px;
		 background:transparent url('insta0.png');
		 position:relative;
		 top:110px;
		 left:990px;
		 }
	.socialmedia2:hover{
	     height:45px;
	     width:45px;
		 border-radius:30px;
		 background:transparent url('insta1.png');
		 }
    .socialmedia3{
	     height:47px;
		 width:45px;
		 border-radius:30px;
		 background:transparent url('twitter0.png');
		 position:relative;
		 top:110px;
		 left:990px;
		 }
	.socialmedia3:hover{
	     height:45px;
		 width:45px;
	     border-radius:30px;
		 background:transparent url('twitter1.png');
		 }	 
	.commentbox{
    	 margin-top:10px;
		 padding-top:15px;
		 padding-left:10px;
		 background-color:lightgrey;
		 border-radius:10px;
		 padding-bottom:15px;
		 }	 	 		
</style>

</head>

<body style="background-color:#ffff11;">

<a href="login.php" style="float:right; height:30px; width:80px;"><button style="border-radius:30px 0px 0px 30px; color:red; position:fixed; font-size:15px;"><b>Login Here</b></button></a>

<div style="position:fixed;">
<div class="socialmedia1">
<a href="https://www.facebook.com/" target="_blank"><svg width="45px" height="47px"><circle fill="green"></circle></svg></a>
</div>
<div class="socialmedia2">
<a href="https://www.instagram.com/" target="_blank"><svg width="45px" height="47px"><circle fill="green"></circle></svg></a>
</div>
<div class="socialmedia3">
<a href="https://www.twitter.com/" target="_blank"><svg width="45px" height="47px"><circle fill="green"></circle></svg></a>
</div>
</div>

<center>
<form method='post' action='#'>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type='text' name='name' placeholder=' Name' required /><br />
<input type='text' name='companyname' placeholder=' Company Name' required /><br />
<input type='text' name='contactnumber' placeholder=' Contact Number' minlength='10' maxlength='10' required /><br />
<input type='email' name='email' placeholder=' Email' required /><br />
<input type='text' name='city' placeholder=' City Name' required /><br />
<textarea name='description' placeholder=' Description about your company' required ></textarea><br />
<input type='text' name='jobtype' placeholder=' Enter type of job you want to post' name='jobtype' required /><br />
<textarea name='personquality' placeholder=' Enter the qualities you want in a person for this job' required ></textarea><br />
<input type='submit' class="postjob" name='postjob' />
</form>
</center>

<?php
getcomments();
?>

<?php
require ('copyright.php');
?>
</body>
</html>
