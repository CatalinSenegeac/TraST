<?php
   // server should keep session data for AT LEAST 1 hour
ini_set('session.gc_maxlifetime', 3);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(3);

session_start(); // ready to go!

    $nume = "";
    $prenume = "";
    $email = "";
    $parola = "";
    $parola2 = "";
    $errors = array();
    
    //$db = mysqli_connect("fenrir.info.uaic.ro","trastDB","OTuQEKdt8O","trastDB");
	$db = mysqli_connect("localhost","root","","trastDB");

    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_GET['token'])) {
        $_SESSION['token']=mysqli_real_escape_string($db,$_GET['token']);
        }

    if(isset($_POST['reg_user']))
    {
        $nume = mysqli_real_escape_string($db, $_POST['nume']);
        $prenume = mysqli_real_escape_string($db, $_POST['prenume']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $parola = mysqli_real_escape_string($db, $_POST['parola']);
        $parola2 = mysqli_real_escape_string($db, $_POST['parola2']);
    
    
        if(empty($nume)){
            array_push($errors, "Username is required");
        }

        if(empty($prenume)){
             array_push($errors, "Prenume is required");
        }

        if(empty($email)){
            array_push($errors, "Email is required");
        }

        if(empty($parola)){
            array_push($errors, "Parola is required");
        }

        if(empty($parola2)){
            array_push($errors, "Confirma parola is required");
        }

        if($parola != $parola2){
            array_push($errors, "Parolile nu se potrivesc");
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email invalid");
        }
        
        $user_check_query = "SELECT * FROM utilizatori WHERE email='$email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);
  
    
        if($user){
            if ($user['email'] === $email) {
                array_push($errors, "email already exists");
            }
        }
    


        if(count($errors) == 0)
        {
            $date = date('Y/m/d');
            //generare vkey
            $vkey = md5(time().$nume);

            $parola = md5($parola);
            $sql = "INSERT INTO utilizatori (nume,prenume,email,parola,verified,vkey,data_inreg) VALUES ('$nume','$prenume','$email','$parola',0,'$vkey','$date')";
            $query0 = mysqli_query($db,$sql);

            $sql2 = "SELECT id FROM utilizatori WHERE email='$email'";
            $query2 = mysqli_query($db, $sql2); 
            $result = $query2->fetch_assoc(); 
            $rezultat = $result['id'];

            $query3 = "INSERT INTO users_progress VALUES ('$rezultat',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0)";
            mysqli_query($db,$query3);

            $_SESSION['nume'] = $nume;
             // $_SESSION['success'] = "You are now logged in"; //?
             
             if($query0)
            {
               //send email
               $to = $email;
               $subject = "Email verification";
               $message = " http://students.info.uaic.ro/~vasilica.poleuca/TraST/verify.php?vkey=$vkey";    //! LOCALHOST !
               $headers = "From: TraST@info.uaic.ro";

               mail($to, $subject, $message, $headers);
            }

  	        header('location: redirectionare_register.html');
        }
    }


    //LOGIN USER 

    if(isset($_POST['log_user']))
    {
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $parola = mysqli_real_escape_string($db, $_POST['parola']);

        if(empty($email))
            array_push($errors, "email is required");

        if(empty($parola))
            array_push($errors, "password is required");
        
        if(count($errors) == 0){
            $parola = md5($parola);

            $query = "SELECT * FROM utilizatori WHERE email = '$email' AND parola = '$parola'";
            $results = mysqli_query($db, $query);

            if(mysqli_num_rows($results) == 1)
            {
                $result8 = $results->fetch_assoc(); 
                $rez = $result8['verified'];

                if($rez == 0)
                {
                    array_push($errors, "Acest cont nu a fost verificat.");
                }
                else
                {
                    $_SESSION['email'] = $email;
                    if($rezultat= mysqli_query($db, $interogare)){
                        $row = $rezultat->fetch_assoc();
                        $_SESSION['nume'] = $row['nume'];
                        $_SESSION['prenume']=$row['prenume'];
                    }    
                    header('location: index.php');
                }
            }
            else
            {
                array_push($errors, "Wrong email/password combination");
            }
            
        }
    } 


    /*
  Accept email of user whose password is to be reset
  Send email to user to reset their password
*/
if (isset($_POST['reset-password'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    // ensure that the user exists on our system
    $query = "SELECT email FROM utilizatori WHERE email='$email'";
    $results = mysqli_query($db, $query);
  
    if (empty($email)) {
      array_push($errors, "Your email is required");
    }
    else 
    if(mysqli_num_rows($results) <= 0) {
      array_push($errors, "Sorry, no user exists on our system with that email");
    }
    // generate a unique random token of length 100
    //$token = bin2hex(random_bytes(50));
    $token = bin2hex(openssl_random_pseudo_bytes(50));
  
    if (count($errors) == 0) {
      // store token in the password-reset database table against the user's email
      $sql = "INSERT INTO password_reset(email, token) VALUES ('$email', '$token')";
      $results = mysqli_query($db, $sql);
  
      // Send email to user with the token in a link they can click on
      $to = $email;
      $subject = "Reset your password on TraST website";
      $msg = "Hi there, click on this http://students.info.uaic.ro/~vasilica.poleuca/TraST/new_pass.php?token=" . $token . " to reset your password on our site";
      $msg = wordwrap($msg,70);
      $headers = "From: TraST@info.uaic.ro";
      mail($to, $subject, $msg, $headers);
      //header('location: pending.php?email=' . $email);
    }
  }
  
  // ENTER A NEW PASSWORD
  if (isset($_POST['new_password'])) {
    $new_pass = mysqli_real_escape_string($db, $_POST['new_pass']);
    $new_pass_c = mysqli_real_escape_string($db, $_POST['new_pass_c']);
  
    // Grab to token that came from the email link
    $token = $_SESSION['token'];
    if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "Password is required");
    if ($new_pass !== $new_pass_c) array_push($errors, "Parolile nu se potrivesc");
    if (count($errors) == 0) {
      // select email address of user from the password_reset table 
      $sql = "SELECT email FROM password_reset WHERE token='$token' LIMIT 1";
      $results = mysqli_query($db, $sql);
      $row = $results->fetch_assoc();
      $email = $row['email']; 
  
      if ($email) {
        $new_pass = md5($new_pass);
        $sql = "UPDATE utilizatori SET parola='$new_pass' WHERE email='$email'";
        $results = mysqli_query($db, $sql);
        header('location: index.php');
      }
    }
  }

?>