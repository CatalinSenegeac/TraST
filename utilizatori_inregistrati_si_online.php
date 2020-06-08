<?php
  function utilizatori_online($db){
    $sql3 = "SELECT count(*) FROM users_status";
    $result3 = mysqli_query($db, $sql3); 
    $count_user_online = $result3 -> fetch_assoc();
     echo $count_user_online['count(*)'] ; 
  }
  function utilizatori_inregistrati($db){
    $sql = "SELECT count(*) FROM utilizatori" ;
    $result = mysqli_query($db,$sql);
    $row = $result->fetch_assoc();
    echo $row['count(*)'];
  }
?>