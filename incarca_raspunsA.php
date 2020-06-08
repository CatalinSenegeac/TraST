<?php
include 'server.php';
    $index=$_POST['index_id'];
    if($index<38){
        $sql_select="SELECT raspunsa, corect FROM intrebari WHERE id=$index";
        if($result=mysqli_query($db,$sql_select)){
             $row=$result->fetch_assoc();
             $raspunsa=$row['raspunsa'];
             $corect=$row['corect'];
        } 
        echo"<button class=buton-raspuns id=alegA > A </button>";
        echo " $raspunsa";
    }
?>