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
/*$source=$_POST['source'];
$destination=$_POST['destination'];*/
$tno=$_POST['tno'];
$seats=$_POST['seats'];
$email1=$_COOKIE['email'];

setcookie('tno',$tno,time()+(86400*30),'/');
$con=mysqli_connect('localhost','root','','railway');

$query="SELECT * FROM travel WHERE tno='$tno'";
$result=mysqli_query($con,$query);
$row=mysqli_num_rows($result);

if($row=mysqli_fetch_array($result))
{
	$seats2=$row[5];
	$seats3=0;
	$seats3=$seats2-$seats;
	$travelupdate="UPDATE travel set seats='$seats3' WHERE tno='$tno'";
	if(mysqli_query($con,$travelupdate)){
		/*$result1="UPDATE journey set email='$email1',tno='$tno',seats ='$seats' WHERE email ='$email1'";*/
		$result1="INSERT INTO journey VALUES ('$email1','$tno','$seats')";
		if(mysqli_query($con,$result1)){
			echo "<h1><b>BOOKING CONFIRMED</b></h1>";
			echo "<h1><a href='index.php' style='text-decoration:none;background-color:black;color:skyblue;'><b>LOG OUT</b></a></h1>";
		} 
		else{
			echo "<h1><b>BOOKING NOT CONFIRMED</b></h1>";
            echo "<h1><a href='userLogin.php' style='text-decoration:none;background-color:black;color:skyblue;'><b>LOGIN AGAIN</b></a></h1>";
		}
	}
}
else{
	echo "<h1><b>BOOKING NOT CONFIRMED</b></h1>";
    echo "<h1><a href='userLogin.php' style='text-decoration:none;background-color:black;color:skyblue;'><b>LOGIN AGAIN</b></a></h1>";
}
?>
    </body>
</html>