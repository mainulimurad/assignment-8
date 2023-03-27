<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h2>Registration Form</h2>
    <?php
    session_start();
        if(isset($_SESSION["error"])){
            ?><p><?php echo $_SESSION["error"]?></p><?php
        }
        
    ?>
    

	<form method="POST" action="register.php">
		<label for="fname">First Name:</label><br>
		<input type="text" id="fname" name="fname" required><br>

		<label for="lname">Last Name:</label><br>
		<input type="text" id="lname" name="lname" required><br>

		<label for="email">Email:</label><br>
        <?php
        if(isset($_SESSION["emailerror"])){
            ?><p><?php echo $_SESSION["emailerror"]?></p><?php
            }
        ?>
		<input type="email" id="email" name="email" required><br>

		<label for="password">Password:</label><br>
		<input type="password" id="password" name="password" required><br>
        <?php
        if(isset($_SESSION["passerror"])){
            ?><p><?php echo $_SESSION["passerror"]?></p><?php
            }
        ?>
		<label for="confirm_password">Confirm Password:</label><br>
		<input type="password" id="confirm_password" name="confirm_password" required><br>

		<input type="submit" value="Register">
	</form>
    <?php session_unset();?>
</body>
</html>
