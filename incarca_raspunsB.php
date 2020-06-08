<?php
include 'server.php';
   $index=$_POST['index_id'];
   if($index<38){
    $sql_select="SELECT raspunsb FROM intrebari WHERE id=$index";
    if($result=mysqli_query($db,$sql_select)){
         $row=$result->fetch_assoc();
         $raspunsb=$row['raspunsb'];
    } 
    echo"<button class=buton-raspuns id=alegB > B </button>";
    echo " $raspunsb";
 }

?>