<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>

<h2><?php session_start(); echo $_SESSION["fname"]?>, you register successfully!</h2>
	<h2>Login Form</h2>
	<form method="POST" action="login.php">
	<?php
    
        if(isset($_SESSION["allfild"])){
            ?><p><?php echo $_SESSION["allfild"]?></p><?php
        };
    
		if(isset($_SESSION["invalid"])){
			?><p style="color:red"><?php echo $_SESSION["invalid"]?></p><?php
		}
	?>
		<label for="email">Email:</label><br>
		<input type="email" id="email" name="email" required><br>

		<label for="password">Password:</label><br>
		<input type="password" id="password" name="password" required><br>

		<input type="submit" value="Login">
	</form>
	
</body>
</html>
