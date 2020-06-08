<?php
include 'server.php';
    $index=$_POST['index_id'];
    if($index<38){
        $sql_select="SELECT intrebare FROM intrebari WHERE id=$index";
        if($result=mysqli_query($db,$sql_select)){
           $row=$result->fetch_assoc();
            $intrebare=$row['intrebare'];
       } 
       if($index==1){
           echo"<img src=avertizare/2.png class=imagine>";
       }
      
       echo"<p class=paragraf> $intrebare</p>";  } 
       else
       {
        echo "Felicitari! Ati finalizat chestionarul.";
       }
      
?>
