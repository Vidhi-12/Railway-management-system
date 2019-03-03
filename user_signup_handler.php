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
$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];

$con=mysqli_connect('localhost','root','','railway');

$query="INSERT INTO user VALUES ('$name','$password','$email','$mobile','$dob','$gender')";

if(mysqli_query($con,$query))
{


	echo "<h1>You are registered</h1>";
	echo "<br><a href='userLogin.php' style='text-decoration:none;background-color:black;color:skyblue;'><h1>LOGIN HERE</h1></a>";
	
}
else{
	echo "<h1>You are not registered</h1>";
	echo "<br><a href='userRegister.php' style='text-decoration:none;background-color:black;color:skyblue;'><h1>REGISTER HERE</h1></a>";
}
?>
    </body>
</html>