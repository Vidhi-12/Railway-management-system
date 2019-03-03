<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User Login</title>
    </head>
	<style>
        body{
            background-image: url(images/rail7.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
		.admin{
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
			input[type=password],input[type=email]{
				padding:8%;
				margin:10%;
			}
	</style>
    <body>
		<?php include 'header.php';?>
        <form action="user_login_handler.php" method="post">
        <table align="center" class="admin">
		<tr>
            <td colspan="2"><h1 id="heading"><b><u>USER Login</u></b></h1><td>
		</tr>
		<tr>
            <td><b>Enter your email here : </b></td>
            <td><input type="email" name="email" required></td>
		</tr>
		<tr>
            <td><b>Enter your password here : </b></td>
            <td><input type="password" name="password" required></td>
		</tr>
		<tr>
            <td colspan="2"><input type="submit" name="Log In">
            <input type="reset" name="Reset">  </td>
		</tr>
		<tr>			
        </table>    
        </form>
    </body>
</html>