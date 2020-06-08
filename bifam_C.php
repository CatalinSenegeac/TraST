<?php
 include 'server.php';
 $index=$_POST['index_id'];

     $sql_select="SELECT corect, raspunsc FROM intrebari WHERE id=$index";
     if($result=mysqli_query($db,$sql_select)){
        $row=$result->fetch_assoc();
         $corect=$row['corect'];
         $raspunsc=$row['raspunsc'];
    } 
    echo"<button class=buton-raspuns id=alegC > C </button>";
  if($corect=='c'){
    echo" $raspunsc   (corect!)";
  }
  else{
    echo" $raspunsc   (incorect!)";
  }
 
 

?>