<html>
    <head>
        <style>
            body{
            background-image: url(images/rail8.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            }
        </style>
    </head>
    <body>
<?php
$email=$_POST['email'];
$password=$_POST['password'];


$con=mysqli_connect('localhost','root','','railway');

$query="SELECT * FROM admin WHERE email='$email' AND password='$password'";
$result=mysqli_query($con,$query);
$row=mysqli_num_rows($result);

if($row!=0)
{
	echo"<b><h1><a href='location.php' style='text-decoration:none;background-color:black;color:white;'>1. ADD NEW JOURNEY DETAILS</b></h1></a><br>";
	echo"<b><h1><a href='userDetails.php' style='text-decoration:none;background-color:black;color:white;'>2. VIEW USER DETAILS</b></h1></a>";
	
}
else
{
	echo "<h1>You are not registered</h1>";
	echo "<h1><b><a href='userLogin.php' style='text-decoration:none;background-color:black;color:skyblue;'>LOGIN AGAIN</b></h1></a>";
}
?>
    </body>
</html>