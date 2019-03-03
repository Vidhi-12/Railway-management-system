<html>
    <head>
        <style>
            body{
            background-image: url(images/rail7.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            }
        </style>
    </head>
    <body>
<?php
$email=$_POST['email'];
$password=$_POST['password'];

setcookie('email',$email,time()+(86400*30),'/');
$con=mysqli_connect('localhost','root','','railway');

$query="SELECT * FROM user WHERE email='$email' AND password='$password'";
$result=mysqli_query($con,$query);
$row=mysqli_num_rows($result);

if($row!=0)
{
	$query1="INSERT INTO journey VALUES('$email','NULL','NULL','NULL')";
	mysqli_query($con,$query1);
	echo"<a href='showStatus.php' style='text-decoration:none;color:blue;'><b><h1>1. Show Trian Status</h1></b></a><br>";
	echo"<a href='bookseat.php' style='text-decoration:none;color:blue;'><b><h1>2. Book Train</h1></b></a><br>";
	echo"<a href='cancelSeats.php' style='text-decoration:none;color:blue;'><b><h1>3. Cancel Seats</h1></b></a><br>";
	echo"<a href='cancelJourney.php' style='text-decoration:none;black;color:blue;'><b><h1>4. Cancel journey</h1></b></a><br>";
	echo"<a href='userLogin.php' style='text-decoration:none;background-color:black;color:red;'><b><h1>Logout</h1></b></a><br>";
	
	
}
else
{
	echo "<h1>You are not registered</h1>";
	echo "<br><h1><a href='userRegister.php' style='text-decoration:none;background-color:black;color:red;'>REGISTER HERE</a></h1>";
}
?>
    </body>
</html>