<?php
    session_start();
    include('db_connect.php');
    include('return_user_id.php'); 

    if(isset($_SESSION['email']))
	{
        $id4 = return_id();
        if(isset($_POST['buton1'])) 
        {
            $sql4   = "UPDATE users_progress SET progres_avertizare=0, progres_prioritate=0, progres_interzicere=0, progres_temporare=0, progres_orientare=0, progres_obligare=0, progres_informare=0, progres_aditionale=0 WHERE user_id='$id4'"; 
            $query4 = mysqli_query($conn, $sql4); 
            header("location: index.php");
            exit;
            
        }

        if(isset($_POST['buton2'])) 
        {
            $sql5   = "UPDATE users_progress SET progres_dgenerale=0, progres_vehicule=0, progres_conducatorii=0, progres_semnalizare=0, progres_reguli=0, progres_infractiuni=0, progres_raspunderea=0, progres_cai=0, progres_atributii=0, progres_dfinale=0 WHERE user_id='$id4'"; 
            $query5 = mysqli_query($conn, $sql5); 
            header("location: index.php");
		    exit;
        }

        if(isset($_POST['buton3'])) 
        {
            $sql5   = "UPDATE users_progress SET progres_chestionar = 0 WHERE user_id='$id4'"; 
            $query5 = mysqli_query($conn, $sql5); 
            header("location: index.php");
            exit;
            
        }
    }

?>