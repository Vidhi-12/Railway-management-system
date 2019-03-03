<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Book Seats</title>
    </head>
	<style>
        body{
            background-image: url(images/rail7.jpg);
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
        <form action="book_seats_handler.php" method="post">
        <table align="center" class="seat">
		<tr>
            <td colspan="2"><h1 id="heading"><b><u>Book Seats</u></b></h1><td>
		</tr>
		<tr>
            <td><b>Enter train number: </b></td>
            <td><input type="text" name="tno" required></td>
		</tr>
		<!----
		<tr>
            <td><b>Enter the source location: </b></td>
            <td><input type="text" name="source" required></td>
		</tr>
		<tr>
			<td><b>Enter the destination location:</b></td>
			<td><input type="text" name="destination" required></td>
		</tr>---->
		<tr>
            <td><b>Enter number of seats to book: </b></td>
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