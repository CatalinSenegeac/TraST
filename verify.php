<?php include('db_connect.php') ?>

<?php

    if(isset($_GET['vkey']))
    {
        $vkey = $_GET['vkey'];

        $sql = "SELECT verified,vkey FROM utilizatori WHERE vkey = '$vkey' AND verified = 0 LIMIT 1";
        $query = mysqli_query($conn, $sql); 

        if(mysqli_num_rows($query) == 1)
        {
            $sql2 = "UPDATE utilizatori SET verified = 1 WHERE vkey = '$vkey' LIMIT 1";
            $query2 = mysqli_query($conn, $sql2); 

            if($query2)
                echo "Your account has been verified.";
            else
                echo "Eroare.";
        }
        else
        {
            echo "This account is invalid or already verified.";
        }
    }
    else
        die("Something went wrong");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Verify email</title>
    </head>
    <body>
        
    </body>
</html>
