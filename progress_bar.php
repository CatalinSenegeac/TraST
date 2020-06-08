<?php
  function progres_semne_and_cdRutier($id,$conn){
    if(isset($_SESSION['email']))
    {
    // calculez progresul din semne-rutiere; daca este 800, atunci toate capitolele au fost terminate si apare optiunea de resetare (delete)
    $id2 = return_id();
    $sql2 = "SELECT progres_avertizare + progres_prioritate + progres_interzicere + progres_temporare + progres_orientare + progres_obligare + progres_informare + progres_aditionale AS total_semne_rutiere FROM users_progress WHERE user_id='$id'";
    $query2 = mysqli_query($conn, $sql2); 
    $result2 = $query2->fetch_assoc(); 
    $rezultat2 = $result2['total_semne_rutiere'];
     
    if($rezultat2 == 800): ?>
        <style> .buton-reset {z-index: 1;} .box:hover #btn-reset-1{ display: block; } </style>
    <?php  endif;  
    
    // calculez progresul din codul-rutier; daca este 1000, atunci toate capitolele au fost terminate si apare optiunea de resetare (delete)  
    
    $id3 = return_id();
    $sql3 = "SELECT progres_dgenerale + progres_vehicule + progres_conducatorii + progres_semnalizare + progres_reguli + progres_infractiuni + progres_raspunderea + progres_cai + progres_atributii + progres_dfinale AS total_cod_rutier FROM users_progress WHERE user_id='$id'";
    $query3 = mysqli_query($conn, $sql3); 
    $result3 = $query3->fetch_assoc(); 
    $rezultat3 = $result3['total_cod_rutier'];
     
    if($rezultat3 == 1000): ?>
        <style> .buton-reset {z-index: 1;} .box:hover #btn-reset-2{ display: block; } </style>
    <?php  endif; 

    // daca chestionarul a fost completat (600), apare optiunea de resetare

    $id4 = return_id();
    $sql4 = "SELECT progres_chestionar AS total_chestionar FROM users_progress WHERE user_id='$id'";
    $query4 = mysqli_query($conn, $sql4); 
    $result4 = $query4->fetch_assoc(); 
    $rezultat4 = $result4['total_chestionar'];
     
    if($rezultat4 == 600): ?>
        <style> .buton-reset {z-index: 1;} .box:hover #btn-reset-3{ display: block; } </style>
    <?php  endif; 
    
        
    } 
  }
  function progres_total($id,$conn){
    if(isset($_SESSION['email']))
    {
        // calculez progresul total -> pentru bara de progres
        $sql = "SELECT progres_avertizare + progres_prioritate + progres_interzicere + progres_temporare + progres_orientare + progres_obligare + progres_informare + progres_aditionale + progres_dgenerale + progres_vehicule + progres_conducatorii + progres_semnalizare + progres_reguli + progres_infractiuni + progres_raspunderea + progres_cai + progres_atributii + progres_dfinale+progres_chestionar AS total FROM users_progress WHERE user_id='$id'";
        $query = mysqli_query($conn, $sql); 
        $result = $query->fetch_assoc(); 
        $rezultat = $result['total'];

        $sql2    = "UPDATE users_progress SET progres_total='$rezultat' WHERE user_id='$id'"; 
        $query2 = mysqli_query($conn, $sql2); 

        if($rezultat != 2400): ?>
                  
          <style> .bar{width:  <?php echo $rezultat/100*4; ?>%; } </style>
          <?php echo $rezultat/100*4 . "%" ; ?>
          <?php  else: ?>
      <style> .bar{width: 100%; } </style>
      <?php echo "100% Complet"; ?>
      <?php  endif; 
     }
      else {?>  <style> .bar{ width: 100%; background-color: green; } </style> 
        <?php echo "Pentru a-ti inregistra progresul, trebuie sa intri in cont!";
        $id=0;
    }
  }
?>