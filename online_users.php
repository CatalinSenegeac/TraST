<?php

$session    = session_id();
$time       = time();
$time_check = $time-2;     //We Have Set Time 5 Minutes
$tbl_name   = "users_status";

if($session != NULL)
{
  $rezultat0 = 0;
  if(isset($_SESSION['email']))
  {
    $email_c = $_SESSION['email'];
    $sql0    = "SELECT id FROM utilizatori WHERE email='$email_c'";
    $result0 = mysqli_query($conn, $sql0);
    $row0  = $result0->fetch_assoc();
    $rezultat0 = $row0['id'];
  }
  

  $sql    = "SELECT * FROM $tbl_name WHERE session='$session'";
  $result = mysqli_query($conn, $sql);
  $count  = mysqli_num_rows($result); 

  if ($count == "0") { 
    $sql1    = "INSERT INTO $tbl_name (id, session, time) VALUES ('$rezultat0','$session', '$time')"; 
    $result1 = mysqli_query($conn, $sql1);
  } else {
    $sql2    = "UPDATE $tbl_name SET time='$time' WHERE session = '$session'"; 
    $result2 = mysqli_query($conn, $sql2); 
  } 
}

?>