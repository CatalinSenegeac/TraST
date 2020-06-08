<?php include('sistem_comentarii.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Panouri aditionale</title>
    <link rel="stylesheet" type="text/css" href="coment.css">
    <link rel="stylesheet" type="text/css" href="avertizare.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <header>
         <?php include('header.php') ?>
   </header>  
   
   <div class="progress-container">
			<div class="progress-bar" id="myBar"></div>
		</div>

    <div class="titlu">
        <h1>Panouri aditionale</h1>
    </div>

    <div class="spatiu_text1">
        <img src="aditionale/1.jpg" class="img" >   
        <p class="p1">Distanta pana la locul la care se refera indicatorul de presemnalizare sau informare -Are rolul de a indica distanta de la indicatorul de avertizare la inceputul locului periculos.</p>
    </div>

    <div class="spatiu_text2">
        <img src="aditionale/2.jpg" class="img2" >
        <p class="p2">Distanta intre indicator si inceputul locului periculos -
            Indica distanta de la indicatorul impreuna cu care este montat pe drumurile publice, pana la inceputul locului la care se refera respectivul indicator.</p>
    </div>
    
    <div class="spatiu_text1">
        <img src="aditionale/3.png" class="img" >
        <p class="p1">Directia si distanta pana la locul la care se refera indicatorul -
            Indica directia si distanta pana la locul la care se refera indicatorul impreuna cu care este montat. Aceste informatii sunt inscriptionate pe un astfel de panou aditional in cazul in care ele nu pot fi inscrise direct pe indicator.</p>
     </div>

    <div class="spatiu_text2">
        <img src="aditionale/4.jpg" class="img2" >
        <p class="p2">Intervalele de timp in care actioneaza indicatorul -
            Specifica intervalul orar intre care se respecta regulile impuse de indicatorul sub care este amplasat panoul din imagine.</p>
    </div>
    
    <div class="spatiu_text1">
        <img src="aditionale/5.jpg" class="img" >
        <p class="p1">Persoane cu handicap</p>
    </div>

    <div class="spatiu_text2">
        <img src="aditionale/6.jpg" class="img2" >
        <p class="p2">Trecere la nivel cu cale ferata industriala completand semnificatia indicatorului ?Alte pericole? -
            Se instaleaza impreuna cu indicatorul Alte pericole si semnalizeaza o trecere la nivel cu o cale ferata industriala.</p>   
    </div>
    
    <div class="spatiu_text1">
        <img src="aditionale/7.jpg" class="img" >
        <p class="p1">Lungimea sectorului periculos la care se refera indicatorul -
            Are rolul de a preciza lungimea sectorului de drum periculos la care se refera indcatorul impreuna cu care este montat pe drumurile publice.</p>
    </div>

    <div class="spatiu_text2">
        <img src="aditionale/15.jpg" class="img2" >
        <p class="p2">Inceputul si lungimea zonei de actiune a indicatorului -
            Se monteaza impreuna cu unul din indicatoarele Oprirea interzisa sau Stationarea interzisa. Are rolul de a preciza de unde incepe si ce lungime are zona de actiune a indicatorului.</p>
       </div>
    
    <div class="spatiu_text1">
        <img src="aditionale/8.jpg" class="img" >  
        <p class="p1">Categoria de autovehicule la care se refera indicatorul -
            Precizeaza categoria de vehicule la care face referire indicatorul sub care este amplasat</p>
    </div>

    <div class="spatiu_text2">
        <img src="aditionale/9.jpg" class="img2" > 
        <p class="p2">Categoriile de autovehicule care trebuie sa respecte semnificatia indicatorului -
            Se amplaseaza impreuna cu indicatorul Prioritate pentru circulatia din sens invers. Precizeaza categoriile de vehicule care nu pot circula in acelasi timp pe un drum ingustat.</p>
    </div>
    
    <div class="spatiu_text1">
        <img src="aditionale/10.jpg" class="img" >
        <p class="p1">Exceptarea unor categorii de vehicule de la semnificatia indicatorului -
            Se instaleaza impreuna cu un indicator de interzicere sau restrictie atunci cand categoria de autovehicule reprezentate pe indicator este exceptata de la regulile de circulatie impuse de indicator.</p>
    </div>

    <div class="spatiu_text2">
        <img src="aditionale/11.jpeg" class="img2" >
        <p class="p2">Viteaza recomandata pe un sector de drum cu semafoare sincronizate -
            Se afla instalat la inceputul sectorului de drum cu semafoare sincronizate. Viteza inscrisa pe indicator reprezinta viteza pe care conducatorul auto trebuie sa o mentina pentru a prinde culoarea verde la toate semafoarele din aceasta zona.</p>
    </div>
    
    <div class="spatiu_text1">
        <img src="aditionale/12.jpg" class="img" >
        <p class="p1">Sensul sau sensurile de circulatie pentru care este valabila semnificatia semnelor luminoase ale semaforului -
            Panourile aditionale din imagine se monteaza sub semafoare si au rolul de a indica directiile la care se refera acestea din urma.</p>
    </div>

    <div class="spatiu_text2">
        <img src="aditionale/13.jpg" class="img2" >
        <p class="p2">Trecerea la nivel cu calea ferata prevazuta cu instalatie de semnalizare luminoasa automata -
            Se amplaseaza la trecerile la nivel cu o cale ferata cu instalatie de semnalizare luminoasa autonoma.</p>
    </div>
    
    <div class="spatiu_text1">
        <img src="aditionale/14.jpg" class="img" >
        <p class="p1">Folosirea luminilor de intalnire -
            Se amplaseaza pe drumurile publice pe care conducatorul auto trebuie sa puna in functiune luminile de intalnire.</p>
    </div>

    <form method="post" action="capitolTerminat.php">
		<input class="buton-verif" type="submit" name="progres-aditionale" value="Finalizeaza capitol">  
	</form>

	<div class="form-comment">
    <?php echo" <form action='".insert_comment("aditionale")."' method='POST'>" ?>
    <br>
        <h2>Lasati un comentariu!</h2>
        <br>
        <textarea name="comentariu" class="comment">Scrie propriul comentariu aici...</textarea>
        <br>
        <button name="trimite" type="submit"  class="logBott">Trimite comentariu</button>
        
    </form>
    <?php
     $coloana="aditionale";
     post_comment($coloana);
    ?>     
   </div>
  
   <script type="text/javascript" src="bara-progres.js"></script>
  
</body>
</html>