<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>canceljourney</title>
    </head>
	<style>
        body{
            background-image: url(images/rail6.jpg);
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
        <form action="cancel_journey_handler.php" method="post">
		 <table align="center" class="seat">
		<tr>
            <td colspan="2"><h1 id="heading"><b><u>Cancel Journey</u></b></h1><td>
		</tr>
       
		<tr>
            <td><b><h2>Do you want to cancel the journey? </h2></b></td>
		</tr>
		<tr>
            <td><h2><input type="radio" name="option" value="yes">Yes
            <input type="radio" name="option" value="no">No</h2></td>
            
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