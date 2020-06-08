<?php include('sistem_comentarii.php') ?>

<!DOCTYPE html>
<html>
<head>
    <title>Indicatoare temporare</title>
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
       <h1>Indicatoare temporare</h1>
   </div>

    <div class="spatiu_text1">
        <img src="temporare/1.png" class="img" >
        
        <p class="p1">Drum ingustat pe partea dreapta</p>
    
       </div>
       <div class="spatiu_text2">
        <img src="temporare/2.png" class="img2" >
        
        <p class="p2">Acostament periculos</p>
       </div>
    
       <div class="spatiu_text1">
        <img src="temporare/3.png" class="img" >
        
        <p class="p1">Semafoare</p>
       </div>
       <div class="spatiu_text2">
        <img src="temporare/4.png" class="img2" >
        
        <p class="p2">Alte pericole</p>
       </div>
    
       <div class="spatiu_text1">
        <img src="temporare/5.png" class="img" >
        
        <p class="p1">Limitare de viteza</p>
       </div>
       <div class="spatiu_text2">
        <img src="temporare/6.png" class="img2" >
        
        <p class="p2">Sfarsitul interzicerii de a depasi</p>
       </div>
    
       <div class="spatiu_text1">
        <img src="temporare/7.png" class="img" >
        
        <p class="p1">Deviere temporara</p>
       </div>
       <div class="spatiu_text2">
        <img src="temporare/8.png" class="img2" >
        
        <p class="p2">Ingustare temporara</p>
       </div>
    
       <div class="spatiu_text1">
        <img src="temporare/9.png" class="img" >
        
        <p class="p1">Abatere temporara</p>
       </div>
       <div class="spatiu_text2">
        <img src="temporare/10.png" class="img2" >
        
        <p class="p2">Abatere temporara</p>
       </div>
    
       <div class="spatiu_text1">
        <img src="temporare/11.png" class="img" >
        
        <p class="p1">Marcaje rutiere</p>
       </div>
       <div class="spatiu_text2">
        <img src="temporare/12.png" class="img2" >
        
        <p class="p2">Lucrari de tratamente ale suprafetei partii carosabile</p>
       </div>
    
       <div class="spatiu_text1">
        <img src="temporare/13.png" class="img" >
        
        <p class="p1">Intalnire alternativa</p>
       </div>
       
	    <form method="post" action="capitolTerminat.php">
		<input class="buton-verif" type="submit" name="progres-temporare" value="Finalizeaza capitol">  
	</form>

	<div class="form-comment">
    <?php echo" <form action='".insert_comment("temporare",$db)."' method='POST'>" ?>
    <br>
        <h2>Lasati un comentariu!</h2>
        <br>
        <textarea name="comentariu" class="comment">Scrie propriul comentariu aici...</textarea>
        <br>
        <button name="trimite" type="submit"  class="logBott">Trimite comentariu</button>
        
    </form>
    <?php
     $coloana="temporare";
     post_comment($coloana,$db);
    ?>     
   </div>
  
   <script type="text/javascript" src="bara-progres.js"></script>
       

</body>
</html>