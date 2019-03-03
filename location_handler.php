<html>
    <head>
        <style>
            body{
            background-image: url(images/rail9.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            }
        </style>
    </head>
    <body>
<?php
$tno=$_POST['tno'];
$source=$_POST['source'];
$destination=$_POST['destination'];
$distance=$_POST['distance'];
$price=$_POST['price'];
$seats=$_POST['seats'];

$con=mysqli_connect('localhost','root','','railway');

$query="INSERT INTO travel VALUES ('$tno','$source','$destination','$distance','$price','$seats')";
if(mysqli_query($con,$query))
{
	echo "<h1>Data added successfully</h1>";
	echo "<br><a href='index.php' style='color:skyblue;text-decoration:none;'><h1>LOG OUT</h1></a>";
}
else{
	echo "<h1>Unsuccessfully</h1>";
    echo "<br><a href='adminLogin.php' style='color:skyblue;text-decoration:none;'><h1>LOG IN</h1></a>";
}
?>
    </body>
</html>