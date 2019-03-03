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
$con=mysqli_connect('localhost','root','','railway');

$query="SELECT * FROM travel";
$result=mysqli_query($con,$query);
$row=mysqli_num_rows($result);

if($row!=0)
{
	$query="SELECT * FROM travel";
	$result=mysqli_query($con,$query);
	$count=0;
		echo"<table border='6' width='75%'>";
		echo"<caption><b><u><h1>BOOKING AVAILABLE DETAILS</h1></u></b></caption>";
	    echo"<tr height='5'>";
		echo"<th width='20%'>TRAIN NUMBER</th>";
		echo"<th width='20%'>SOURCE</th>";
		echo"<th width='20%'>DESTINATION</th>";
		echo"<th width='20%'>DISTANCE</th>";
		echo"<th width='20%'>PRICE</th>";
		echo"<th width='20%'>SEATS</th>";
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
        echo "<h1><b><a href='userLogin.php' style='text-decoration:none;background-color:black;color:blue;'>LOGIN AGAIN</b></h1></a>"
?>
        </body>
</html>