<?php include ('db_connect.php') ?>
<?php include('server.php') ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="index.css">
		<link rel="stylesheet" type="text/css" href="antet.css">
        <title>
            TraST
        </title>
    </head>
    <body>
        <header>
             <div id="logo"><img src="imagini/logooo.png"></div>
             <nav class="meniu">  
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="index.php#about">About</a></li>
                    <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">Country</a>
                        <div class="dropdown-content">
                            <a href="#"><img src="imagini/rom1.png" class="miniimg">Romania</a>
                            <a href="#"><img src="imagini/sua1.png" class="miniimg">SUA</a>
                        </div>
                    </li>
                    <li>
                      <a href="#contact.html">Contact</a>
                    </li>
                    <li>
                        <?php if(isset($_SESSION['email'])): ?>
                            <?php include('online_users.php') ?>
                            <a href="logout.php">Logout</a>
                        <?php else: ?>
                            <?php 
                            $ses = session_id();
                            $sql4    = "DELETE FROM users_status WHERE session='$ses'"; 
                            $result4 = mysqli_query($conn, $sql4); ?>
                            <a href="login.php">Login</a>
                        <?php endif; ?>
                    </li>
                  </ul>    
             </nav>
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

        <script>
            var newSlide;

            var slideIndex = 1;
            showSlides(slideIndex);
            
            function plusSlides(n= +1) {
                slideIndex = slideIndex + n;
                showSlides(slideIndex);
            }
            
            function currentSlide(n) {
              showSlides(slideIndex = n);
            }
            
            function showSlides(n) {
              clearInterval(newSlide);
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
              newSlide = setInterval(plusSlides, 4000);
            }

            </script>

        <hr>
        <h1 class="titlu-mediu">MEDIU DE INVATARE</h1>
        <hr>
        <section class="mediu">
            <div class="box">
                    <div class="title-box"><a href="semne-rutiere.php" target="_self">SEMNE RUTIERE</a></div>
                    <a href="semne-rutiere.php" target="_self"> <img src="imagini/semn.jpg" class="img-box"></a>
            </div>
            <div class="box">
                    <div class="title-box"><a href="codul-rutier.php" target="_self">CODUL RUTIER</a></div>
                    <a href="codul-rutier.php" target="_self"><img src="imagini/traffic.gif" class="img-box"></a>
            </div>
            <div class="box">
                    <div class="title-box"><a href="chestionare.php" target="_self">CHESTIONARE</a></div>
                    <a href="chestionare.php" target="_self"><img src="imagini/pri3.jpg" class="img-box"></a>
            </div>
        </section>

        <section class="progress-bar">
            <div class="bar"> 40% Complete (success) </div>

        </section>

        <section id="about">
            <h2>ABOUT</h2>
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
                            
                   <td rowspan="2">Clasament</td>
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

        <footer>
            
        </footer>

    </body>
</html>