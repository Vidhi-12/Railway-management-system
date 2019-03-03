<html>
    <head>
        <style>
            body{
            background-image: url(images/rail6.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            }
        </style>
    </head>
    <body>
<?php
$email1=$_COOKIE['email'];
$trainno=$_COOKIE['tno'];


if(isset($_POST['option']))
{
		$option=$_POST['option'];
}
/*echo $option;
var_dump($option);*/
$con=mysqli_connect('localhost','root','','railway');



if($option=="yes"){
	$query="SELECT * FROM journey WHERE email ='$email1'";
	$result=mysqli_query($con,$query);
	if($row=mysqli_fetch_array($result))
	{
		$seats1=$row[2];
		/*echo $row[2];
		var_dump($row[2]);*/
		$seats=0;
		$result1="UPDATE journey set seats ='$seats' WHERE email ='$email1'";
		if(mysqli_query($con,$result1)){
			echo "<h1><b>JOURNEY CANCELED</b></h1>";
		}
		$query2="SELECT * FROM travel WHERE tno='$trainno'";
		$result2=mysqli_query($con,$query2);
		
		//mysql_data_seek($result2,0);
		
		if($row2=mysqli_fetch_array($result2)){
			$seats4=$row2[5];
			$seats5=0;
			$seats5=$seats4+$seats1;
			
			$travelupdate1="UPDATE travel set seats='$seats5' WHERE tno='$trainno'";
			if(mysqli_query($con,$travelupdate1)){
			}
		}
	}
}
        echo "<h1><a href='index.php' style='text-decoration:none;background-color:black;color:skyblue;'><b>LOG OUT</b></a></h1>";
?>
    </body>
</html>