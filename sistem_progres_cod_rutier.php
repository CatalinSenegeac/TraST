<?php
 function progres_codrutier($conn,$id){
    if(isset($_SESSION['email']))
    {
        $id = return_id();
        $sql = "SELECT progres_dgenerale FROM users_progress WHERE user_id='$id'";
        $result = mysqli_query($conn, $sql); 
        $count  = mysqli_num_rows($result); 
        if ($count != "0")
        {
            $row = $result->fetch_assoc();
            $rezultat = $row['progres_dgenerale'];
            if($rezultat == 100): ?>
                <style> #im1{ background-image :url('imagini/verif.png'); } </style>
            <?php  else: ?>
                <style> #im1{ background-image: none; } </style>
        <?php endif; 
        } 

        $sql1 = "SELECT progres_vehicule FROM users_progress WHERE user_id='$id'";
        $result1 = mysqli_query($conn, $sql1); 
        $count1  = mysqli_num_rows($result1); 
        if ($count1 != "0")
        {
            $row1 = $result1->fetch_assoc();
            $rezultat1 = $row1['progres_vehicule'];
            if($rezultat1 == 100): ?>
                <style> #im2{ background-image :url('imagini/verif.png'); } </style>
            <?php  else: ?>
                <style> #im2{ background-image: none; } </style>
        <?php endif; 
        }

        $sql2 = "SELECT progres_conducatorii FROM users_progress WHERE user_id='$id'";
        $result2 = mysqli_query($conn, $sql2); 
        $count2  = mysqli_num_rows($result2); 
        if ($count2 != "0")
        {
            $row2 = $result2->fetch_assoc();
            $rezultat2 = $row2['progres_conducatorii'];
            if($rezultat2 == 100): ?>
                <style> #im3{ background-image :url('imagini/verif.png'); } </style>
            <?php  else: ?>
                <style> #im3{ background-image: none; } </style>
        <?php endif; 
        }
            
        $sql3 = "SELECT progres_semnalizare FROM users_progress WHERE user_id='$id'";
        $result3 = mysqli_query($conn, $sql3); 
        $count3  = mysqli_num_rows($result3); 
        if ($count3 != "0")
        {
            $row3 = $result3->fetch_assoc();
            $rezultat3 = $row3['progres_semnalizare'];
            if($rezultat3 == 100): ?>
                <style> #im4{ background-image :url('imagini/verif.png'); } </style>
            <?php  else: ?>
                <style> #im4{ background-image: none; } </style>
        <?php endif; 
        } 

        $sql4 = "SELECT progres_reguli FROM users_progress WHERE user_id='$id'";
        $result4 = mysqli_query($conn, $sql4); 
        $count4  = mysqli_num_rows($result4); 
        if ($count4 != "0")
        {
            $row4 = $result4->fetch_assoc();
            $rezultat4 = $row4['progres_reguli'];
            if($rezultat4 == 100): ?>
                <style> #im5{ background-image :url('imagini/verif.png'); } </style>
            <?php  else: ?>
                <style> #im5{ background-image: none; } </style>
        <?php endif; 
        }

        $sql5 = "SELECT progres_infractiuni FROM users_progress WHERE user_id='$id'";
        $result5 = mysqli_query($conn, $sql5); 
        $count5  = mysqli_num_rows($result5); 
        if ($count5 != "0")
        {
            $row5 = $result5->fetch_assoc();
            $rezultat5 = $row5['progres_infractiuni'];
            if($rezultat5 == 100): ?>
                <style> #im6{ background-image :url('imagini/verif.png'); } </style>
            <?php  else: ?>
                <style> #im6{ background-image: none; } </style>
        <?php endif; 
        }        
        
        $sql6 = "SELECT progres_raspunderea FROM users_progress WHERE user_id='$id'";
        $result6 = mysqli_query($conn, $sql6); 
        $count6  = mysqli_num_rows($result6); 
        if ($count6 != "0")
        {
            $row6 = $result6->fetch_assoc();
            $rezultat6 = $row6['progres_raspunderea'];
            if($rezultat6 == 100): ?>
                <style> #im7{ background-image :url('imagini/verif.png'); } </style>
            <?php  else: ?>
                <style> #im7{ background-image: none; } </style>
        <?php endif; 
        }
            
        $sql7 = "SELECT progres_cai FROM users_progress WHERE user_id='$id'";
        $result7 = mysqli_query($conn, $sql7); 
        $count7  = mysqli_num_rows($result7); 
        if ($count7 != "0")
        {
            $row7 = $result7->fetch_assoc();
            $rezultat7 = $row7['progres_cai'];
            if($rezultat7 == 100): ?>
                <style> #im8{ background-image :url('imagini/verif.png'); } </style>
            <?php  else: ?>
                <style> #im8{ background-image: none; } </style>
        <?php endif; 
        } 

        $sql8 = "SELECT progres_atributii FROM users_progress WHERE user_id='$id'";
        $result8 = mysqli_query($conn, $sql8); 
        $count8  = mysqli_num_rows($result8); 
        if ($count8 != "0")
        {
            $row8 = $result8->fetch_assoc();
            $rezultat8 = $row8['progres_atributii'];
            if($rezultat8 == 100): ?>
                <style> #im9{ background-image :url('imagini/verif.png'); } </style>
            <?php  else: ?>
                <style> #im9{ background-image: none; } </style>
        <?php endif; 
        }

        $sql9 = "SELECT progres_dfinale FROM users_progress WHERE user_id='$id'";
        $result9 = mysqli_query($conn, $sql9); 
        $count9  = mysqli_num_rows($result9); 
        if ($count9 != "0")
        {
            $row9 = $result9->fetch_assoc();
            $rezultat9 = $row9['progres_dfinale'];
            if($rezultat9 == 100): ?>
                <style> #im10{ background-image :url('imagini/verif.png'); } </style>
            <?php  else: ?>
                <style> #im10{background-image: none; } </style>
        <?php endif; 
        }         
    }
 }
?>