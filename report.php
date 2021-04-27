<?php
session_start();
$connectivity=mysqli_connect("localhost","root","","register");
if(isset($_POST["commentsubmit"]))
{
$uid=$_POST['uid'];
$message=$_POST['message'];

$query2 = "select * from comments ";
$query3=mysqli_query($connectivity,$query2);
if(mysqli_fetch_array($query3))
{
$query="insert into comments(Uid,message) values ('$uid','$message')";
mysqli_query($connectivity,$query);
}
}
 
function getcomments(){
$conn = mysqli_connect('localhost','root','','register');
$sql = "SELECT * FROM comments";
$result = mysqli_query($conn,$sql);
while($row=$result->fetch_assoc())
{
echo "<div class='commentbox'>";
echo $row['uid']."<br>";
echo $row['message'];
echo "</div>";
}
}
    

?>   
   

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>

textarea{
	background-color:#fff;
	resize:none;
	width:400px;
	height:80px;
	border-radius:20px;
	}
.commentsubmit{
	width:100px;
	height:30px;
	background-color:red;
	border:none;
	color:#fff;
	border-radius:10px;
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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>


<body style="background-color:#ffff11">

<a href="login.php" style="float:right; height:30px; width:80px;"><button style="border-radius:30px 0px 0px 30px; color:red; font-size:15px;"><b>Login Here</b></button></a>

<form method='post' action='#'>
      <input type='email' name='uid' style='padding:10px; border-radius:10px;' placeholder='Email'><br />
	  <textarea name='message' style='padding:10px;' placeholder='Please Give Us Reviews'></textarea><br><br>
	  <input name='commentsubmit' class='commentsubmit' type='submit'>
</form>
	 
<?php
getcomments();
?>	 


</body>
</html>
