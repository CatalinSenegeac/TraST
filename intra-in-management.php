<?php
  include('server.php');
  $admin="catalin.sene12@gmail.com"
  if(isset($_POST['intra-ca-admin']))
  {
    $email =mysqli_real_escape_string($db, $_POST['email']);
    if(strcmp($email,$admin)==0){
       
    }
  }
?>