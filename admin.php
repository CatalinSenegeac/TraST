<?php include ('db_connect.php') ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="admin.css">
        <title>
            Clasament
        </title>
    </head>
    <body>
        <div id="titlu">
                Managementul bazei de date
        </div>

        <div id="container">
            <table id="tabel_clasament">
	        <tr>
		        <th>Id</th>
		        <th>Nume</th>
                <th>Prenume</th>
                <th>Email</th>
                <th>Progres</th>
                <th>Online</th>
                <th>Data inregistrare</th>
            </tr>
            <?php
                $email_admin = "raducupoleuca@yahoo.com";
                $sql = "SELECT id,nume,prenume,email,progres_total,data_inreg FROM utilizatori join users_progress on utilizatori.id=users_progress.user_id WHERE email <> '$email_admin'";
                $query = mysqli_query($conn, $sql); 
                
                while($row = mysqli_fetch_array($query)){
                    
                    $id_c = $row['id'];
                    $sql3 = "SELECT * FROM users_status WHERE id='$id_c'";
                    $result3 = mysqli_query($conn, $sql3); 
                    $rez3 = $result3 -> fetch_assoc();
                    if($rez3)
                        $on = "DA";
                    else
                        $on = "NU"; 
                
                    echo  "
                        <tr>
                            <td>".$row['id']."</td>
                            <td>".$row['nume']."</td>
                            <td>".$row['prenume']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['progres_total']/100*5.55 . "% </td>
                            <td>".$on."</td>
                            <td>".$row['data_inreg']."</td>
                        </tr> 
                       
                        ";    }
            ?>
            </table>
        </div>


        <div id="sterge_utilizator">
        <h2>Sterge un utilizator</h2>
            <form method="post" action="admin.php"> 
                <input type="text" name="email" placeholder="Email-ul utilizatorului pe care vrei sa-l elimini">       
                <input type="submit" name="delete_user" value="Sterge"> 
            </form>   
        </div>

       
        <br><br> 
        
        <div id="email_utilizator">
        <h2>Trimite un email unui utilizator</h2>
            <form method="post" action="admin.php"> 
                <input type="text" name="email2" placeholder="Email-ul utilizatorului">
                <br><br>
                <textarea name="mesaj" placeholder="Scrie ceva..." style="height:200px"></textarea>   
                <input type="submit" name="email_user" value="Trimite">     
                
            </form>   
        </div>

        
        <div id="comentarii_utilizator">
        <h2>Vezi comentariile unui utilizator </h2>
        <h3>Utilizatorul neautentificat (anonim) are id-ul 0</h3>
            <form method="post" action="admin.php"> 
                <input type="text" name="id" placeholder="Id-ul utilizatorului"></div>
                <input type="submit" name="cauta_user" value="Cauta">    
            </form>
            <br>
        </div>

        <div id="sterge_comentarii">
        <h2>Sterge comentariile unui utilizator</h2>
            <form method="post" action="admin.php"> 
                <input type="text" name="id_com" placeholder="Id-ul comentariului utilizatorului"></div>
                <input type="submit" name="sterge_comentariu" value="Sterge">    
            </form>
            <br>
        </div>

        
    </body>
</html>

<?php
        if(isset($_POST['delete_user'])) {
                
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                if($email) {
                $sql2 = "SELECT id FROM utilizatori WHERE email='$email'";
                $query2 = mysqli_query($conn, $sql2) or die; 
                $result = $query2->fetch_assoc(); 
                $rezultat = $result['id'];

		        $sql = "DELETE FROM utilizatori WHERE email='$email'";
                $query = mysqli_query($conn, $sql) or die; 

                $sql = "DELETE FROM users_progress WHERE user_id='$rezultat'";
                $query = mysqli_query($conn, $sql) or die; 
            }
            header("location: admin.php");
            }
       
            //---
            if(isset($_POST['email_user'])) {
                $mesaj = mysqli_real_escape_string($conn, $_POST['mesaj']);
                $email = mysqli_real_escape_string($conn, $_POST['email2']);
                if($email) {
                    //$mailFrom = "raducupoleuca@yahoo.com";
                    $subiect = "TraST";
                    $mailTo = $email;
                    $headers = "From: TraST - admin"; //.$mailFrom;
                    mail($mailTo, $subiect, $mesaj, $headers);
            }
            header("location: admin.php");
            }

            if(isset($_POST['cauta_user'])) {
                $id = mysqli_real_escape_string($conn, $_POST['id']);
                
                
                    echo "
                    <table id=\"tabel_comentarii\">
                    <tr>
                        <th>Nume</th>
                        <th>Prenume</th>
                        <th>Id comentariu</th>
                        <th>Capitol</th>
                        <th>Cometariu</th>
                        <th>Data trimitere</th>
                    </tr>";
                    
                    $sql = "SELECT * FROM comments WHERE user_id='$id'";
                    $query = mysqli_query($conn, $sql) or die; 
                    
                    while($row = mysqli_fetch_array($query)){
                        $obligare = $row['obligare'];
                        $interzicere = $row['interzicere'];
                        $aditionale = $row['aditionale'];
                        $avertizare = $row['avertizare'];
                        $prioritate = $row['prioritate'];
                        $orientare = $row['orientare'];
                        $temporare = $row['temporare'];
                        $informare = $row['informare'];

                        if($obligare){
                            $rez = $obligare;
                            $col = "obligare";
                        }
                        if($interzicere){
                            $rez = $interzicere;
                            $col = "interzicere";
                        }
                        if($aditionale){
                            $rez = $aditionale;
                            $col = "aditionale";
                        }
                        if($avertizare){
                            $rez = $avertizare;
                            $col = "avertizare";
                        }
                        if($prioritate){
                            $rez = $prioritate;
                            $col = "prioritate";
                        }
                        if($orientare){
                            $rez = $orientare;
                            $col = "orientare";
                        }
                        if($temporare){
                            $rez = $temporare;
                            $col = "temporare";
                        }
                        if($informare){
                           $rez = $informare;
                           $col = "informare";
                        }

                        echo "
                        <tr>
                            <td>".$row['nume']."</td>
                            <td>".$row['prenume']."</td>
                            <td>".$row['id']."</td>
                            <td>".$col."</td>
                            <td>".$rez."</td>
                            <td>".$row['data_trimitere']."</td>
                            
                        </tr> 
                        ";
                    }
                    echo "</table>";
                
            //header("location: admin.php");
            }

            if(isset($_POST['sterge_comentariu'])) {
                
                $id_com= mysqli_real_escape_string($conn, $_POST['id_com']);
                
		        $sql = "DELETE FROM comments WHERE id='$id_com'";
                $query = mysqli_query($conn, $sql) or die; 

                header("location: admin.php");
            }
       
        ?>

