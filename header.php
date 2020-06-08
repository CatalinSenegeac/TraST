<?php include ('db_connect.php') ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="header.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div id="logo"><img src="imagini/logooo.png" id="imagine-logo"></div>

<div class="topnav" id="myTopnav">  
      <a href="index.php" >Acasa</a>
      <a href="#"><span style="cursor:pointer" onclick="openNav()">DESPRE</span></a>
      <a href="contact.php">Contact</a>
       
       
           <?php if(isset($_SESSION['email'])): ?>
               <?php include('online_users.php') ?>
               <a href="logout.php">DECONECTARE</a>
           <?php else: ?>
               <?php 
               $ses = session_id();
               $sql4    = "DELETE FROM users_status WHERE session='$ses'"; 
               $result4 = mysqli_query($conn, $sql4); ?>
               <a href="login.php">AUTENTIFICARE</a>
           <?php endif; ?>
      
           <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i> </a>     
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <a href="#">Scholarity HTML</a>
        <a href="#">Diagrams</a>
    </div>
</div>

<script>
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}
</script>

</body>
</html>
