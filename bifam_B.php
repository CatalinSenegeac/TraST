<?php
 include 'server.php';
 $index=$_POST['index_id'];

     $sql_select="SELECT corect, raspunsb FROM intrebari WHERE id=$index";
     if($result=mysqli_query($db,$sql_select)){
        $row=$result->fetch_assoc();
         $corect=$row['corect'];
         $raspunsb=$row['raspunsb'];
    } 
    echo"<button class=buton-raspuns id=alegB > B </button>";
  if($corect=='b'){
    echo" $raspunsb   (corect!)";
  }
  else{
    echo" $raspunsb   (incorect!)";
  }
 
 

?>