<?php
 include "server.php";
  function insert_comment($coloana){
    $db = mysqli_connect("localhost","root","","trastDB");
    //$db = mysqli_connect("fenrir.info.uaic.ro","trastDB","OTuQEKdt8O","trastDB");

    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }
   if(isset($_POST['trimite'])){
    $date = date('Y-m-d H:i:s');
    if(isset($_SESSION['email'])){
      $email=$_SESSION['email'];
      $interogare="SELECT nume, prenume FROM utilizatori WHERE email='$email'";
      if($rezultat= mysqli_query($db, $interogare)){
        $row = $rezultat->fetch_assoc();
        $nume = $row['nume'];
        $prenume=$row['prenume'];
    } 
  }
   else{
    $nume="Anonimul";
    $prenume="";
   } 
    
    $comentariu = mysqli_real_escape_string($db, $_POST['comentariu']);
    $comentariu_len=strlen($comentariu);
    $sql="INSERT INTO comments (id,nume,prenume,$coloana, data_trimitere) VALUES ('','$nume','$prenume', '$comentariu', '$date')";
    if($comentariu_len>500){
       echo "Ati introdus prea multe caractere!!!!";
    }
    else{
        mysqli_query($db,$sql);
    }
  }
  }
    
    
  function post_comment($coloana){
    $db = mysqli_connect("localhost","root","","trastDB");

    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $db = mysqli_connect("127.0.0.1","root","","trastdb");

    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql="SELECT nume,prenume,$coloana, data_trimitere FROM comments";
    if($result=mysqli_query($db,$sql)){
      while($row = $result->fetch_assoc())
      {   
          if($row[$coloana]){
           echo "<div class = mesaj_box><p>";
           $comment_n=$row['nume'];
           $comment_p=$row['prenume'];
           $comment=$row[$coloana];
           $data=$row['data_trimitere'];
           echo( "$comment_n $comment_p: $comment<p> <br> $data");
         echo "</p></div>";
          }
     }
  
   }
}


?>