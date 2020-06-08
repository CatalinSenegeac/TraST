<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
    <title>Enter email</title>
    <link rel="stylesheet" type="text/css" href="enter_email.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
    <form action="enter_email.php" method="POST">
       
        <!-- display validation errors here -->
         <?php include('errors.php'); ?> 
			
            <label for="email"><b><i>Email:</i></b></label>
            <input type="text" placeholder="Email" name="email" required>
			
            <button type="submit" class="enter_pass" name="reset-password" >Send</button>
    </form>
</body>
</html>