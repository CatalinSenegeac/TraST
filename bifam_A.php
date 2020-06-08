<?php
 include 'server.php';
 $index=$_POST['index_id'];

     $sql_select="SELECT corect, raspunsa FROM intrebari WHERE id=$index";
     if($result=mysqli_query($db,$sql_select)){
        $row=$result->fetch_assoc();
         $corect=$row['corect'];
         $raspunsa=$row['raspunsa'];
    } 
    echo"<button class=buton-raspuns id=alegA > A </button>";
  if($corect=='a'){
    echo" $raspunsa   (corect!)";
  }
  else{
    echo" $raspunsa   (incorect!)";
  }
 
 

?>