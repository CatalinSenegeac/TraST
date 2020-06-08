<?php include ('db_connect.php') ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="clasament.css">
        <title>
            Clasament
        </title>
    </head>
    <body>
        <div id="titlu">
                Clasamentul tuturor utilizatorilor inregistrati
        </div>

        <div id="container">
            <table id="tabel_clasament">
	        <tr>
		        <th>Pozitie</th>
		        <th>Nume</th>
                <th>Prenume</th>
                <th>Scor</th>
                <th>Progres</th>
            </tr>
            <?php
                $email_admin = "raducupoleuca@yahoo.com";
                $sql = "SELECT nume,prenume,progres_total FROM utilizatori join users_progress on utilizatori.id=users_progress.user_id WHERE email <> '$email_admin' ORDER BY progres_total desc";
                $query = mysqli_query($conn, $sql); 
                
                $count = 1;
                while($row = mysqli_fetch_array($query)){
                    if($row['progres_total'] == 2400)
                        $total = 100;
                    else
                        $total = $row['progres_total']/100*4;
                    echo  "
                        <tr>
                            <td>".$count."</td>
                            <td>".$row['nume']."</td>
                            <td>".$row['prenume']."</td>
                            <td>".$row['progres_total']. "/2400</td>
                            <td>". $total . "% </td>
                        </tr>";  $count++;   }
            ?>
            </table>
        </div>

        <div id="footer">
            <button id="btn-download-csv" onclick="exportTableToCSV('members.csv')">Descarca fisier CSV</button>
        </div>

        
        <script type="text/javascript" src="descarca_csv.js"></script>
    </body>
</html>

