<?php
session_start();
$connectivity=mysqli_connect("localhost","root","","register");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<style>

#sv{
         float:left;
		 }

</style>

</head>
<body style="background-color:yellow;">

	<svg id="sv">
		   <ellipse cx="60" cy="60" rx="20" ry="30" fill="green" />
		   <ellipse cx="120" cy="60" rx="20" ry="30" fill="green"/>
		   <line x1="90" y1="90" x2="120" y2="120" style="stroke:green;"/>
		   <polyline points="40 130,90 150,140 130" style="stroke:green;fill:none;" />
		   <ellipse cx="90" cy="90" rx="70" ry="80" style="stroke:green;stroke-width:5;fill:none;" />
	</svg>

<h1 style="color:red;">Thank You</h1></center>
<h3>
<?php
if(isset($_SESSION['email']))
{
$a=$_SESSION['email'];
$sql="select * from register where email='$a'";
$result=$connectivity->query($sql);
if($result->num_rows>0)
{
while($row=$result-> fetch_assoc())
{
echo $row['Username']."<br><br><br> You have login using <br>".$row['email'];
}		
}
}
else
{
echo "You have to login first";
}
?>
<br />
<?php
if(isset($_SESSION['email']))
{
echo '<form action="job.php">';
echo '<input type="submit" name="submit" value="logout" style="position:fixed; top:20px; left:960px; border-radius:40px 0 0 40px; height:50px; width:100px;">';
echo '</form>';
}
else
{
echo '<form action="index.php">';
echo '<input type="submit" name="submit" value="login">';
echo '</form>';
}
?>
</h3>
</center>
<marquee style="color:red;"><h3>You are now a member of our family</h3></marquee>
</body>
</html>