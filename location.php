<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Location</title>
    </head>
	<style>
            body{
            background-image: url(images/rail9.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
			.location{
				overflow:hidden;
				background:white;
				margin-top:2%;
			}
			#heading{
				color:black;
				text-align:center;
			}
			input[type=submit]{
				margin-left:30%;
				margin-top:7%;
				padding:3%;
			}
			input[type=reset]{
				margin-top:7%;
				padding:3%;
				margin-left:3%;
			}
			input[type=text]{
				padding:4%;
				margin:7%;
			}
	</style>
    <body>
		<?php include 'header.php';?>
        <form action="location_handler.php" method="post">
        <table align="center" class="location">
		<tr>
            <td colspan="2"><h1 id="heading"><b><u>ADD NEW JOURNEY DETAILS</u></b></h1><td>
		</tr>
		<tr>
            <td><b>Enter train number : </b></td>
            <td><input type="text" name="tno" required></td>
		</tr>
		<tr>
            <td><b>Enter new source location: </b></td>
            <td><input type="text" name="source" required></td>
		</tr>
		<tr>
			<td><b>Enter new destination location:</b></td>
			<td><input type="text" name="destination" required></td>
		</tr>
		<tr>
            <td><b>Enter total distance(in KM):</b></td>
            <td><input type="text" name="distance" required></td>
		</tr>
		<tr>
            <td><b>Enter total price for the journey:</b></td>
            <td><input type="text" name="price" required></td>
		</tr>
		<tr>
            <td><b>Enter total number of seats: </b></td>
            <td><input type="text" name="seats" required></td>
		</tr>
		<tr>
            <td colspan="2"><input type="submit" name="Submit">
            <input type="reset" name="Reset">  </td>
		</tr>
		<tr>			
        </table>    
        </form>
    </body>
</html>