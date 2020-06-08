<?php include('server.php') ?>

<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Password Reset</title>
	<link rel="stylesheet" href="enter_email.css">
</head>
<body>
	<form action="new_pass.php" method="post">

        <h2 class="form-title">New password</h2>
        
		<!-- form validation messages -->
        <?php include('errors.php'); ?>
        
		<label>New password</label>
		<input type="password" name="new_pass" required>
		
		<label>Confirm new password</label>
        <input type="password" name="new_pass_c" required>
            
        <button type="submit" name="new_password" class="enter_pass">Submit</button>
            
	</form>
</body>
</html>