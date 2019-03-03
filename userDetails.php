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
$con=mysqli_connect('localhost','root','','railway');

$query="SELECT * FROM user";
$result=mysqli_query($con,$query);
$row=mysqli_num_rows($result);

if($row!=0)
{
	$query="SELECT * FROM user";
	$result=mysqli_query($con,$query);
	$count=0;
		echo"<table border='6' width='75%'>";
		echo"<caption><b><h1><u>USER DETAILS</u></h1></b></caption>";
	    echo"<tr height='5'>";
		echo"<th width='20%' style='background:skyblue;'>NAME</th>";
		echo"<th width='20%' style='background:skyblue;'>PASSWORD</th>";
		echo"<th width='20%' style='background:skyblue;'>EMAIL</th>";
		echo"<th width='20%' style='background:skyblue;'>PHONE</th>";
		echo"<th width='20%' style='background:skyblue;'>DOB</th>";
		echo"<th width='20%' style='background:skyblue;'>GENDER</th>";
		echo"</tr>";
	    echo"</table>";
	while($row=mysqli_fetch_array($result))
	{	
		echo"<table border='1' width='75%'>";
	    echo"<tr height='5px'>";
		echo"<td width='20%' style='background:white;'>".$row[0]."</td>";
		echo"<td width='20%' style='background:white;'>".$row[1]."</td>";
		echo"<td width='20%' style='background:white;'>".$row[2]."</td>";
		echo"<td width='20%' style='background:white;'>".$row[3]."</td>";
		echo"<td width='20%' style='background:white;'>".$row[4]."</td>";
		echo"<td width='20%' style='background:white;'>".$row[5]."</td>";
		echo"</tr>";
	    echo"</table>";
	}
}
echo "<br><a href='index.php' style='color:skyblue;text-decoration:none;background:black;'><h1>LOG OUT</h1></a>";
?>
    </body>
</html>