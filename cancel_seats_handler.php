<html>
    <head>
        <style>
            body{
            background-image: url(images/rail10.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            }
        </style>
    </head>
    <body>
<?php
$seats=$_POST['seats'];
$email1=$_COOKIE['email'];
$trainno=$_COOKIE['tno'];

$con=mysqli_connect('localhost','root','','railway');

$query="SELECT * FROM journey WHERE email ='$email1'";
$result=mysqli_query($con,$query);
$row=mysqli_num_rows($result);

if($row=mysqli_fetch_array($result))
{
	$seats2=$row[2];
	$seats3=0;
	$seats3=$seats2-$seats;
	$result1="UPDATE journey set seats ='$seats3' WHERE email ='$email1'";
	if(mysqli_query($con,$result1)){
		echo "<h1><b>CANCELLATION DONE SUCCESSFULLY</b></h1>";
		echo "<h1><a href='index.php' style='text-decoration:none;background-color:black;color:skyblue;'><b>LOG OUT</b></a></h1>";
	
	$query2="SELECT * FROM travel WHERE tno='$trainno'";
	$result2=mysqli_query($con,$query2);
	
		if($row2=mysqli_fetch_array($result2)){
			
			$seats4=$row2[5];
			$seats5=0;
			$seats5=$seats4+$seats;
			$travelupdate1="UPDATE travel set seats='$seats5' WHERE tno='$trainno'";
			if(mysqli_query($con,$travelupdate1)){
			}
		}
	}
	else{
		echo "<h1><b>FAILED CANCELLATION. TRY AGAIN</b></h1>";
        echo "<h1><b><a href='userLogin.php' style='text-decoration:none;background-color:black;color:skyblue;'>LOGIN AGAIN</b></h1></a>";
	}
}
?>
    </body>
</html>