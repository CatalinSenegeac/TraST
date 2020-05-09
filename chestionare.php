<?php include('server.php') ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="chestionare.css">
        <link rel="stylesheet" type="text/css" href="antet.css">
        <title>
            Chestionare
        </title>
    </head> 
    <body>
        <header>
             <div id="logo"><img src="imagini/logooo.png"></div>
             <nav class="meniu">  
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="index.php#about">ABOUT</a></li>
                    <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">COUNTRY</a>
                        <div class="dropdown-content">
                            <a href="#"><img src="imagini/rom1.png" class="miniimg">ROMANIA</a>
                            <a href="#"><img src="imagini/sua1.png" class="miniimg">SUA</a>
                        </div>
                    </li>
					<li><a href="#contact.html">Contact</a></li>
                      <li>
                        <?php if(isset($_SESSION['email'])): ?>
                            <a href="logout.php">Logout</a>
                        <?php else: ?>
                            <a href="login.php">Login</a>
                        <?php endif; ?>
                    </li>
                  </ul>    
             </nav>
        </header> 

        <section class="titlu">
            <h1>Chestionare</h1>
        </section>

        <section class="corp-chestionar">

            <div class="mini-container">
                <h3>Intrebarea 1/5</h3>
            </div>

            <div class="mini-container">
                
                    <img src="avertizare/2.png" class="imagine" >
                    <p class="paragraf">Ce fel de indicator este acesta? (In ce categorie se incadreaza?) </p>

            </div>

            <div class="mini-container">
                
                <div class="raspuns">
                    <input class="buton-raspuns" type="button" value="A" >
                    Indicator de avertizare
                </div>

                <div class="raspuns">
                    <input class="buton-raspuns" type="button" value="B">
                    Indicator de obligare
                </div>

                <div class="raspuns">
                    <input class="buton-raspuns" type="button" value="C">
                    Indicator de interzicere
                </div>
                
            </div>

            <div class="mini-container">

                <div class="optiune">
                    <input class="buton-optiune" type="button" value="Raspunde mai tarziu" >
                </div>

                <div class="optiune">
                    <input class="buton-optiune" type="button" value="Sterge raspuns">
                </div>

                <div class="optiune">
                    <input class="buton-optiune" type="button" value="Trimite raspuns">
                </div>
                
            </div>
            
        </section>

    </body>
</html>
