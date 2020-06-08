<?php
include 'server.php';
   $index=$_POST['index_id'];
   if($index<38){
    $sql_select="SELECT raspunsc FROM intrebari WHERE id=$index";
    if($result=mysqli_query($db,$sql_select)){
         $row=$result->fetch_assoc();
         $raspunsc=$row['raspunsc'];
    } 
    echo"<button class=buton-raspuns id=alegC > C </button>";
    echo " $raspunsc";  
     }
?>