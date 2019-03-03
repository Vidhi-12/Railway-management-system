<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cancelseats</title>
    </head>
	<style>
        body{
            background-image: url(images/rail10.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
			.seat{
				overflow:hidden;
				background:white;
				margin-top:5%;
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
				padding:8%;
				margin:10%;
			}
	</style>
    <body>
		<?php include 'header.php';?>
        <form action="cancel_seats_handler.php" method="post">
		<table align="center" class="seat">
		<tr>
            <td colspan="2"><h1 id="heading"><b><u>Cancel Seats</u></b></h1><td>
		</tr>
        
		<tr>
            <td><b>Enter number of seats to cancel: </b></td>
            <td><input type="text" name="seats" required></td>
		</tr>
		<tr>
            <td colspan="2"><input type="submit" name="Submit">
            <input type="reset" name="Reset">  </td>
		</tr>			
        </table>    
        </form>
    </body>
</html>