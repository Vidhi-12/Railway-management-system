<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User Register</title>
    </head>
	<style>
        body{
            background-image: url(images/rail8.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
		.user{
				overflow:hidden;
				background:white;
				margin-top:3%;
			}
			#heading{
				color:black;
				text-align:center;
			}
			input[type=submit]{
				margin-left:30%;
				margin-top:7%;
				padding:2%;
			}
			input[type=reset]{
				margin-top:7%;
				padding:2%;
				margin-left:3%;
			}
			input[type=text],input[type=password],input[type=email],input[type=mobile],input[type=date],input[type=gender]{
				padding:5%;
				margin:7%;
			}
	</style>
    <body>
		<?php include 'header.php';?>
        <form action="user_signup_handler.php" method="post">
        <table align="center" class="user">
		<tr>
            <td colspan="2"><h1 id="heading"><b><u>User Registration</u></b></h1><td>
		</tr>
		<tr>
            <td><b>Enter your fullname here : </b></td>
            <td><input type="text" name="name" required></td>
		</tr>
		<tr>
            <td><b>Enter your password here : </b></td>
            <td><input type="password" name="password" required></td>
		</tr>
		<tr>
            <td><b>Enter your email here : </b></td>
            <td><input type="email" name="email" required></td>
		</tr>
		<tr>
            <td><b>Enter your mobile here : </b></td>
            <td><input type="mobile" name="mobile" maxlength="10" required></td>
		</tr>
		<tr>
            <td><b>Enter your date of birth here : </b></td>
            <td><input type="date" name="dob" required></td>
		</tr>
		<tr>
            <td><b>Enter your gender here : </b></td>
            <td><input type="radio" name="gender" value="male" required>MALE
				<input type="radio" name="gender" value="female" required>FEMALE</td>
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