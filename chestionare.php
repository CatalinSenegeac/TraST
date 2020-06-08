<?php include 'server.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="chestionare.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Chestionar de recapitulare
        </title>
        <script>
         $(document).ready(function(){
            var index=1;
            var parcurs=1;
            var variante_corecte=0;
            $("#urmatoarea_intrebare").click(function(){
                index=index+1;
                parcurs=parcurs+1;
				if(index<38){
                if(index==parcurs){
                $("#index").load("incarca_index.php",{index_id : index});
                $("#intrebare").load("incarca_intrebare.php",{index_id : index});
                $("#raspunsA").load("incarca_raspunsA.php",{index_id : index});
                $("#raspunsB").load("incarca_raspunsB.php",{index_id : index});
                $("#raspunsC").load("incarca_raspunsC.php",{index_id : index});
                }
                else{
                    parcurs=parcurs-1;
                    $("#index").load("incarca_index.php",{index_id : index});
                    $("#intrebare").load("incarca_intrebare.php",{index_id : index});
                    $("#raspunsA").load("bifam_A.php",{index_id : index});
                    $("#raspunsB").load("bifam_B.php",{index_id : index});
                    $("#raspunsC").load("bifam_C.php",{index_id : index});
                    
                }}
				else{
                    index=index-1;
                }
                
           });
           $("#alegA").click(function(){
            $("#raspunsA").load("bifam_A.php",{index_id : index});
           });
           $("#alegB").click(function(){
            $("#raspunsB").load("bifam_B.php",{index_id : index});
           });
           $("#alegC").click(function(){
            $("#raspunsC").load("bifam_C.php",{index_id : index});
           });
           $("#intrebarea_anterioara").click(function(){
                index=index-1;
                if(index>0){
                    $("#index").load("incarca_index.php",{index_id : index});
                    $("#intrebare").load("incarca_intrebare.php",{index_id : index});
                    $("#raspunsA").load("bifam_A.php",{index_id : index});
                    $("#raspunsB").load("bifam_B.php",{index_id : index});
                    $("#raspunsC").load("bifam_C.php",{index_id : index});
                }
                else{
                    index=index+1;
                }
                
           });
         });
        </script>
    </head> 
    <body>
        <header>
              <?php include('header.php') ?>
        </header> 

        <section class="titlu">
            <h1>Chestionar</h1>
        </section>

        <section class="corp-chestionar">

            <div class="mini-container" id="index">

                <h3> Intrebarea 1/37</h3>

            </div>
           
            <div class="mini-container" id="intrebare">
                 <img src="avertizare/2.png" class="imagine">
                 <p class="paragraf">Ce fel de indicator este acesta? (In ce categorie se incadreaza?)</p>
            </div>

            
            <div class="mini-container" id="chestionar">
                <div class="raspuns" id="raspunsA">
                <button class="buton-raspuns" > A </button>
                Indicator de avertizare
                </div>

                <div class="raspuns" id="raspunsB">
                <button class="buton-raspuns" > B </button>
                Indicator de obligare
                </div>

                <div class="raspuns" id="raspunsC">
                <button class="buton-raspuns" > C </button>
                Indicator de interzicere
                </div>
            </div>

            <div class="mini-container">
            <div class="optiune">
              <button id="intrebarea_anterioara"> Intrebarea anterioara </button>
             </div>
             <div class="optiune">
              <button class="buton-raspuns" id="alegA" > A </button>
             </div>
             <div class="optiune">
              <button class="buton-raspuns" id="alegB" > B </button>
             </div>
             <div class="optiune">
              <button class="buton-raspuns" id="alegC" > C </button>
             </div> 
             <div class="optiune">
              <button id="urmatoarea_intrebare"> Intrebarea urmatoare </button>
             </div>
                        
            </div>   
            
        </section>

    </body>
</html>
