<?php include ('db_connect.php') ?>
<?php include('server.php') ?>
<?php include('return_user_id.php') ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="index.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            TraST
        </title>
    </head>
    <body>
        <header>
            <?php include('header.php') ?>
        </header>  

        <div id="container">

        <section class="prezentare">
            

            <div class="mySlides fade">
                <div class="titlu">Traffic Signs Tutor</div>
                <img src="imagini/driving1.jpg">
            </div>

            <div class="mySlides fade">
                <div class="titlu">Traffic Signs Tutor</div>
                <img src="imagini/driving6.jpg">
            </div>

            <div class="mySlides fade">
                <div class="titlu">Traffic Signs Tutor</div>
                <img src="imagini/driving3.jpg">
            </div>

            <div class="mySlides fade">
                <div class="titlu">Traffic Signs Tutor</div>
                <img src="imagini/driving2.jpg">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </section>

        <div class="dots" >
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
            <span class="dot" onclick="currentSlide(4)"></span> 
        </div>

        

        <hr>
        <h1 class="titlu-mediu">MEDIU DE INVATARE</h1>
        <hr>
        <section class="mediu">
            <div class="box">
                    <div class="title-box"><a href="semne-rutiere.php" target="_self">SEMNE RUTIERE</a></div>
                    <a href="semne-rutiere.php" target="_self"> <img src="imagini/semn.jpg" class="img-box"></a>
                    <form method="POST" action="butoane_reset.php"><div class="buton-reset"><input type="submit" id="btn-reset-1" name="buton1" value="Reset progres"></div></form>
            </div>
            <div class="box">
                    <div class="title-box"><a href="codul_rutier_bun.php" target="_self">CODUL RUTIER</a></div>
                    <a href="codul_rutier_bun.php" target="_self"><img src="imagini/traffic.gif" class="img-box"></a>
                    <form method="POST" action="butoane_reset.php"><div class="buton-reset"><input type="submit" id="btn-reset-2" name="buton2" value="Reset progres"></div></form>
            </div>
            <div class="box">
                    <div class="title-box"><a href="chestionare.php" target="_self">CHESTIONAR</a></div>
                    <a href="chestionare.php" target="_self"><img src="imagini/pri3.jpg" class="img-box"></a>
                    <form method="POST" action="butoane_reset.php"><div class="buton-reset"><input type="submit" id="btn-reset-3" name="buton3" value="Reset progres"></div></form>
            </div>
        </section>

        <section class="progress-bar">
            <div class="bar"> 
            <?php
            if(isset($_SESSION['email']))
            {
                // calculez progresul total -> pentru bara de progres
                $id = return_id();
                $sql = "SELECT progres_avertizare + progres_prioritate + progres_interzicere + progres_temporare + progres_orientare + progres_obligare + progres_informare + progres_aditionale + progres_dgenerale + progres_vehicule + progres_conducatorii + progres_semnalizare + progres_reguli + progres_infractiuni + progres_raspunderea + progres_cai + progres_atributii + progres_dfinale + progres_chestionar AS total FROM users_progress WHERE user_id='$id'";
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
                <?php echo "Pentru a-ti inregistra progresul, trebuie sa intri in cont!";  }?>
            </div>

        </section>

        <section id="about">
            <h2>DESPRE SITE</h2>
            <p> &nbsp &nbsp &nbsp  &nbsp Wei De a fost atât de mândru că Bai Guizhi Guan Ju s-a ridicat din greșeală în cea de-a unsprezecea recenzie după întoarcere. Aceasta este povestea de mai târziu, și cu cât este mai enervant și mai enervant ", a regretat și el. A spus: Tatăl a mărturisit lui Yayan "Transpir ca ploaia" Ji'an a venit la Guan Juyu, fără îndoială. Acestea sunt cuvintele ulterioare pe care le duce Raoer, cu cât sunt mai enervat, mai enervat și regret. Cuvinte. Cu cât ascultam, cu atât eram mai enervat și nu puteam să nu regret. Aceasta este povestea ulterioară. Rao va merge. „Plecând de la Guan Juer înseamnă„ „. ： Îți poți asculta urechile. Puteți să vă lăsați urechile afară, dar este în regulă. ”Raoer du-te.” Cu cât mai enervant și mai enervat, nu-l regret. Este o poveste ulterioară.寲 ". Este o chestiune de timp. Se poate vedea. Se poate spune că urechea merge la Guan Yi. Se poate spune că nu este lăudată. Urechea a spus: M-am întors și sunt fericit, dar nu imoral." Spune: „E în regulă să testezi mașina”</p>
        </section>

        <section class="contor">
           <table class="tbl">
               <tr>
                    <td> 
                         <?php  
                            $sql3 = "SELECT count(*) FROM users_status";
                            $result3 = mysqli_query($conn, $sql3); 
                            $count_user_online = $result3 -> fetch_assoc();
                             echo $count_user_online['count(*)'] ; ?>
                    </td>
                            
                   <td rowspan="2"><a href="clasament.php">Clasament</a></td>
                   <td>
                        <?php $sql = "SELECT count(*) FROM utilizatori" ;
                              $result = mysqli_query($conn,$sql);
                              $row = $result->fetch_assoc();
                              echo $row['count(*)'];
                        ?>
                   </td>
               </tr>
               <tr>
                   <td>Utilizatori online</td>
                   
                   <td>Utilizatori inregistrati</td>
               </tr>
           </table>
        </section>
     </div>
    <script type="text/javascript" src="index.js"></script>

    </body>

</html>

<?php
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
?>







