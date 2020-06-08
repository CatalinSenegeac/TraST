<?php
    session_start();
	include('db_connect.php');
	
	if(isset($_SESSION['email']))
	{
    $email = $_SESSION['email'];
    $sql = "SELECT id FROM utilizatori WHERE email='$email'";
    $id_result = mysqli_query($conn, $sql); 
    $row = $id_result->fetch_assoc();
    $rezultat1 = $row['id'];

    if(isset($_POST['progres-avertizare'])) {
         
		$sql2 = "SELECT progres_avertizare FROM users_progress WHERE user_id='$rezultat1'";
		$result = mysqli_query($conn, $sql2); 
		$count  = mysqli_num_rows($result); 

		if ($count == "0") { 
			$sql3    = "INSERT INTO users_progress (user_id, progres_avertizare) VALUES('$rezultat1', 100)"; 
			$result3 = mysqli_query($conn, $sql3);
		} else {
			$sql4    = "UPDATE users_progress SET progres_avertizare=100 WHERE user_id='$rezultat1'"; 
			$result4 = mysqli_query($conn, $sql4); 
		}
		header("location: semne-rutiere.php");
		exit;
    }
    else
    if(isset($_POST['progres-informare'])) {
         
		$sql2 = "SELECT progres_informare FROM users_progress WHERE user_id='$rezultat1'";
		$result = mysqli_query($conn, $sql2); 
		$count  = mysqli_num_rows($result); 

		if ($count == "0") { 
			$sql3    = "INSERT INTO users_progress (user_id, progres_informare) VALUES('$rezultat1', 100)"; 
			$result3 = mysqli_query($conn, $sql3);
		} else {
			$sql4    = "UPDATE users_progress SET progres_informare=100 WHERE user_id='$rezultat1'"; 
			$result4 = mysqli_query($conn, $sql4); 
		}
		header("location: semne-rutiere.php");
		exit;
    }
    else
    if(isset($_POST['progres-interzicere'])) {
         
		$sql2 = "SELECT progres_interzicere FROM users_progress WHERE user_id='$rezultat1'";
		$result = mysqli_query($conn, $sql2); 
		$count  = mysqli_num_rows($result); 

		if ($count == "0") { 
			$sql3    = "INSERT INTO users_progress (user_id, progres_interzicere) VALUES('$rezultat1', 100)"; 
			$result3 = mysqli_query($conn, $sql3);
		} else {
			$sql4    = "UPDATE users_progress SET progres_interzicere=100 WHERE user_id='$rezultat1'"; 
			$result4 = mysqli_query($conn, $sql4); 
		}
		header("location: semne-rutiere.php");
		exit;
    }
    else
    if(isset($_POST['progres-obligare'])) {
         
		$sql2 = "SELECT progres_obligare FROM users_progress WHERE user_id='$rezultat1'";
		$result = mysqli_query($conn, $sql2); 
		$count  = mysqli_num_rows($result); 

		if ($count == "0") { 
			$sql3    = "INSERT INTO users_progress (user_id, progres_obligare) VALUES('$rezultat1', 100)"; 
			$result3 = mysqli_query($conn, $sql3);
		} else {
			$sql4    = "UPDATE users_progress SET progres_obligare=100 WHERE user_id='$rezultat1'"; 
			$result4 = mysqli_query($conn, $sql4); 
		}
		header("location: semne-rutiere.php");
		exit;
    }
    else
    if(isset($_POST['progres-prioritate'])) {
         
		$sql2 = "SELECT progres_prioriate FROM users_progress WHERE user_id='$rezultat1'";
		$result = mysqli_query($conn, $sql2); 
		$count  = mysqli_num_rows($result); 

		if ($count == "0") { 
			$sql3    = "INSERT INTO users_progress (user_id, progres_aprioritate) VALUES('$rezultat1', 100)"; 
			$result3 = mysqli_query($conn, $sql3);
		} else {
			$sql4    = "UPDATE users_progress SET progres_prioritate=100 WHERE user_id='$rezultat1'"; 
			$result4 = mysqli_query($conn, $sql4); 
		}   
		header("location: semne-rutiere.php");
		exit;
    }
    else
    if(isset($_POST['progres-aditionale'])) {
         
		$sql2 = "SELECT progres_aditionale FROM users_progress WHERE user_id='$rezultat1'";
		$result = mysqli_query($conn, $sql2); 
		$count  = mysqli_num_rows($result); 

		if ($count == "0") { 
			$sql3    = "INSERT INTO users_progress (user_id, progres_aditionale) VALUES('$rezultat1', 100)"; 
			$result3 = mysqli_query($conn, $sql3);
		} else {
			$sql4    = "UPDATE users_progress SET progres_aditionale=100 WHERE user_id='$rezultat1'"; 
			$result4 = mysqli_query($conn, $sql4); 
		}   
		header("location: semne-rutiere.php");
		exit;
    }
    else
    if(isset($_POST['progres-temporare'])) {
         
		$sql2 = "SELECT progres_temporare FROM users_progress WHERE user_id='$rezultat1'";
		$result = mysqli_query($conn, $sql2); 
		$count  = mysqli_num_rows($result); 

		if ($count == "0") { 
			$sql3    = "INSERT INTO users_progress (user_id, progres_temporare) VALUES('$rezultat1', 100)"; 
			$result3 = mysqli_query($conn, $sql3);
		} else {
			$sql4    = "UPDATE users_progress SET progres_temporare=100 WHERE user_id='$rezultat1'"; 
			$result4 = mysqli_query($conn, $sql4); 
		}  
		header("location: semne-rutiere.php");
		exit; 
    }
    else
    if(isset($_POST['progres-orientare'])) {
         
		$sql2 = "SELECT progres_orientare FROM users_progress WHERE user_id='$rezultat1'";
		$result = mysqli_query($conn, $sql2); 
		$count  = mysqli_num_rows($result); 

		if ($count == "0") { 
			$sql3    = "INSERT INTO users_progress (user_id, progres_orientare) VALUES('$rezultat1', 100)"; 
			$result3 = mysqli_query($conn, $sql3);
		} else {
			$sql4    = "UPDATE users_progress SET progres_orientare=100 WHERE user_id='$rezultat1'"; 
			$result4 = mysqli_query($conn, $sql4); 
		}
        header("location: semne-rutiere.php");
		exit;
    }
	else
	if(isset($_POST['progres-dgenerale'])) {
         
		$sql2 = "SELECT progres_dgenerale FROM users_progress WHERE user_id='$rezultat1'";
		$result = mysqli_query($conn, $sql2); 
		$count  = mysqli_num_rows($result); 

		if ($count == "0") { 
			$sql3    = "INSERT INTO users_progress (user_id, progres_dgenerale) VALUES('$rezultat1', 100)"; 
			$result3 = mysqli_query($conn, $sql3);
		} else {
			$sql4    = "UPDATE users_progress SET progres_dgenerale=100 WHERE user_id='$rezultat1'"; 
			$result4 = mysqli_query($conn, $sql4); 
		}
		header("location: codul_rutier_bun.php");
		exit;

	}
	else
	if(isset($_POST['progres-vehicule'])) {
         
		$sql2 = "SELECT progres_vehicule FROM users_progress WHERE user_id='$rezultat1'";
		$result = mysqli_query($conn, $sql2); 
		$count  = mysqli_num_rows($result); 

		if ($count == "0") { 
			$sql3    = "INSERT INTO users_progress (user_id, progres_vehicule) VALUES('$rezultat1', 100)"; 
			$result3 = mysqli_query($conn, $sql3);
		} else {
			$sql4    = "UPDATE users_progress SET progres_vehicule=100 WHERE user_id='$rezultat1'"; 
			$result4 = mysqli_query($conn, $sql4); 
		}
		header("location: codul_rutier_bun.php");
		exit;	
	}
	else
	if(isset($_POST['progres-conducatorii'])) {
         
		$sql2 = "SELECT progres_conducatorii FROM users_progress WHERE user_id='$rezultat1'";
		$result = mysqli_query($conn, $sql2); 
		$count  = mysqli_num_rows($result); 

		if ($count == "0") { 
			$sql3    = "INSERT INTO users_progress (user_id, progres_conducatorii) VALUES('$rezultat1', 100)"; 
			$result3 = mysqli_query($conn, $sql3);
		} else {
			$sql4    = "UPDATE users_progress SET progres_conducatorii=100 WHERE user_id='$rezultat1'"; 
			$result4 = mysqli_query($conn, $sql4); 
		}
		header("location: codul_rutier_bun.php");
		exit;
	}
	else
	if(isset($_POST['progres-semnalizare'])) {
         
		$sql2 = "SELECT progres_semnalizare FROM users_progress WHERE user_id='$rezultat1'";
		$result = mysqli_query($conn, $sql2); 
		$count  = mysqli_num_rows($result); 

		if ($count == "0") { 
			$sql3    = "INSERT INTO users_progress (user_id, progres_semnalizare) VALUES('$rezultat1', 100)"; 
			$result3 = mysqli_query($conn, $sql3);
		} else {
			$sql4    = "UPDATE users_progress SET progres_semnalizare=100 WHERE user_id='$rezultat1'"; 
			$result4 = mysqli_query($conn, $sql4); 
		}
		header("location: codul_rutier_bun.php");
		exit;
	}
	else
	if(isset($_POST['progres-reguli'])) {
         
		$sql2 = "SELECT progres_reguli FROM users_progress WHERE user_id='$rezultat1'";
		$result = mysqli_query($conn, $sql2); 
		$count  = mysqli_num_rows($result); 

		if ($count == "0") { 
			$sql3    = "INSERT INTO users_progress (user_id, progres_reguli) VALUES('$rezultat1', 100)"; 
			$result3 = mysqli_query($conn, $sql3);
		} else {
			$sql4    = "UPDATE users_progress SET progres_reguli=100 WHERE user_id='$rezultat1'"; 
			$result4 = mysqli_query($conn, $sql4); 
		}
		header("location: codul_rutier_bun.php");
		exit;
	}
	else
	if(isset($_POST['progres-infractiuni'])) {
         
		$sql2 = "SELECT progres_infractiuni FROM users_progress WHERE user_id='$rezultat1'";
		$result = mysqli_query($conn, $sql2); 
		$count  = mysqli_num_rows($result); 

		if ($count == "0") { 
			$sql3    = "INSERT INTO users_progress (user_id, progres_infractiuni) VALUES('$rezultat1', 100)"; 
			$result3 = mysqli_query($conn, $sql3);
		} else {
			$sql4    = "UPDATE users_progress SET progres_infractiuni=100 WHERE user_id='$rezultat1'"; 
			$result4 = mysqli_query($conn, $sql4); 
		}
		header("location: codul_rutier_bun.php");
		exit;
	}
	else
	if(isset($_POST['progres-raspunderea'])) {
         
		$sql2 = "SELECT progres_raspunderea FROM users_progress WHERE user_id='$rezultat1'";
		$result = mysqli_query($conn, $sql2); 
		$count  = mysqli_num_rows($result); 

		if ($count == "0") { 
			$sql3    = "INSERT INTO users_progress (user_id, progres_raspunderea) VALUES('$rezultat1', 100)"; 
			$result3 = mysqli_query($conn, $sql3);
		} else {
			$sql4    = "UPDATE users_progress SET progres_raspunderea=100 WHERE user_id='$rezultat1'"; 
			$result4 = mysqli_query($conn, $sql4); 
		}
		header("location: codul_rutier_bun.php");
		exit;
	}
	else
	if(isset($_POST['progres-cai'])) {
         
		$sql2 = "SELECT progres_cai FROM users_progress WHERE user_id='$rezultat1'";
		$result = mysqli_query($conn, $sql2); 
		$count  = mysqli_num_rows($result); 

		if ($count == "0") { 
			$sql3    = "INSERT INTO users_progress (user_id, progres_cai) VALUES('$rezultat1', 100)"; 
			$result3 = mysqli_query($conn, $sql3);
		} else {
			$sql4    = "UPDATE users_progress SET progres_cai=100 WHERE user_id='$rezultat1'"; 
			$result4 = mysqli_query($conn, $sql4); 
		}
		header("location: codul_rutier_bun.php");
		exit;
	}
	else
	if(isset($_POST['progres-atributii'])) {
         
		$sql2 = "SELECT progres_atributii FROM users_progress WHERE user_id='$rezultat1'";
		$result = mysqli_query($conn, $sql2); 
		$count  = mysqli_num_rows($result); 

		if ($count == "0") { 
			$sql3    = "INSERT INTO users_progress (user_id, progres_atributii) VALUES('$rezultat1', 100)"; 
			$result3 = mysqli_query($conn, $sql3);
		} else {
			$sql4    = "UPDATE users_progress SET progres_atributii=100 WHERE user_id='$rezultat1'"; 
			$result4 = mysqli_query($conn, $sql4); 
		}
		header("location: codul_rutier_bun.php");
		exit;
	}
	else
	if(isset($_POST['progres-dfinale'])) {
         
		$sql2 = "SELECT progres_dfinale FROM users_progress WHERE user_id='$rezultat1'";
		$result = mysqli_query($conn, $sql2); 
		$count  = mysqli_num_rows($result); 

		if ($count == "0") { 
			$sql3    = "INSERT INTO users_progress (user_id, progres_dfinale) VALUES('$rezultat1', 100)"; 
			$result3 = mysqli_query($conn, $sql3);
		} else {
			$sql4    = "UPDATE users_progress SET progres_dfinale=100 WHERE user_id='$rezultat1'"; 
			$result4 = mysqli_query($conn, $sql4); 
		}
		header("location: codul_rutier_bun.php");
		exit;
	}
	else
		if(isset($_POST['finalizare-chestionar'])) {
         
		$sql2 = "SELECT progres_chestionar FROM users_progress WHERE user_id='$rezultat1'";
		$result = mysqli_query($conn, $sql2); 
		$count  = mysqli_num_rows($result); 

		if ($count == "0") { 
			$sql3    = "INSERT INTO users_progress (user_id, progres_chestionar) VALUES('$rezultat1', 600)"; 
			$result3 = mysqli_query($conn, $sql3);
		} else {
			$sql4    = "UPDATE users_progress SET progres_chestionar=600 WHERE user_id='$rezultat1'"; 
			$result4 = mysqli_query($conn, $sql4); 
		}
		header("location: index.php");
		exit;
	}
	
}
	header("location: index.php");
	exit;
?>
		