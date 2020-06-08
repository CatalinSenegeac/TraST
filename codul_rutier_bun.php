<?php include('server.php') ?>
<?php include ('db_connect.php') ?>
<?php include('return_user_id.php') ?>
<?php include('sistem_progres_cod_rutier.php') ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="codul_rutier_bun.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>
            TraST
        </title>
    </head> 
    <body>
        <header>
            <?php include('header.php') ?>
        </header>  

        <div id="container">

            <div id="partea-stanga">

                <button class="collapsible">
                    <h1>CODUL RUTIER</h1>
                </button>

                <div class="lista">
                    <ol>
                        <li class="lst" id="im1"><a href="#pg1">Dispozitii generale</a> </li>
                        <li class="lst" id="im2"><a href="#pg2">Vehiculele</a></li>
                        <li class="lst" id="im3"><a href="#pg3">Conducatorii de vehicule</a></li>
                        <li class="lst" id="im4"><a href="#pg4">Semnalizarea rutiera</a></li>
                        <li class="lst" id="im5"><a href="#pg5">Reguli de circulatie</a></li>
                        <li class="lst" id="im6"><a href="#pg6">Infractiuni si pedepse</a></li>
                        <li class="lst" id="im7"><a href="#pg7">Raspunderea contraventionala</a></li>
                        <li class="lst" id="im8"><a href="#pg8">Cai de atac impotriva procesului verbal</a></li>
                        <li class="lst" id="im9"><a href="#pg9">Atributii ale unor ministere si ale  altor autoritati</a> </li> 
                        <li class="lst" id="im10"><a href="#pg10">Dispozitii finale si anexa</a></li>

                    </ol>
                </div>
             
                <script>
                    var coll = document.getElementsByClassName("collapsible");
                    var i;

                    for (i = 0; i < coll.length; i++) {
                        coll[i].addEventListener("click", function() {
                            this.classList.toggle("active");
                            var content = this.nextElementSibling;
                        if (content.style.maxHeight){
                            content.style.maxHeight = null;
                        } else {
                            content.style.maxHeight = content.scrollHeight + "px";
                        } 
                        });
                    }
                </script>
                    
                  
            </div>

            <div id="partea-dreapta">
                
                    <div class="text">

                        <span id="pg1">
                            <div class="titlu-partea-dreapta">
                                <h1>DISPOZITII GENERALE</h1>
                            </div>

                            <h3>Art. 1</h3>
                            <ol>
                            <li>Circulaţia pe drumurile publice a vehiculelor, pietonilor şi a celorlalte categorii de participanţi la trafic, drepturile, obligaţiile şi răspunderile care revin persoanelor fizice şi juridice, precum şi atribuţiile unor autorităţi ale administraţiei publice, instituţii şi organizaţii sunt supuse dispoziţiilor prevăzute în prezenta ordonanţă de urgenţă.</li>
                            <li>Dispoziţiile prevăzute în prezenta ordonanţă de urgenţă au ca scop asigurarea desfăşurării fluente şi în siguranţă a circulaţiei pe drumurile publice, precum şi ocrotirea vieţii, integrităţii corporale şi a sănătăţii persoanelor participante la trafic sau aflate în zona drumului public, protecţia drepturilor şi intereselor legitime ale persoanelor respective, a proprietăţii publice şi private, cât şi a mediului.</li>
                            <li>Autoritatea competentă în domeniul circulaţiei pe drumurile publice privind iniţierea şi avizarea unor reglementări, precum şi aplicarea şi exercitarea controlului privind respectarea normelor din acest domeniu este Ministerul Administraţiei şi Internelor, prin Inspectoratul General al Poliţiei Române.</li>
                            <li>Reglementările privind circulaţia pe drumurile publice se emit, după caz, de către autorităţile publice centrale sau locale cu atribuţii în acest domeniu, numai cu avizul Inspectoratului General al Poliţiei Române şi cu respectarea acordurilor şi convenţiilor internaţionale la care România este parte.</li>
                            <li>Prevederile prezentei ordonanţe de urgenţă se aplică tuturor participanţilor la trafic, precum şi autorităţilor care au atribuţii în domeniul circulaţiei şi siguranţei pe drumurile publice şi în domeniul protecţiei mediului.</li>
                            </ol>

                            <h3>Art. 2</h3>
                            <p>Îndrumarea, supravegherea şi controlul respectării normelor de circulaţie pe drumurile publice se fac de către poliţia rutieră din cadrulInspectoratului General al Poliţiei Române, care are obligaţia să ia măsurile legale în cazul în care constată încălcări ale acestora.</p>

                            <h3>Art. 3</h3>
                            <p>Circulaţia pe drumurile publice din zona de frontieră şi din alte zone pentru care, potrivit legii, s-au stabilit restricţii se face cu respectarea reglementărilor instituite pentru acele zone.</p>

                            <h3>Art. 4</h3>
                            <p>Controlul circulaţiei vehiculelor aparţinând instituţiilor din sistemul de apărare, ordine publică şi siguranţă naţională se efectuează de către poliţia rutieră, precum şi de personalul desemnat de către aceste instituţii.</p>

                            <h3>Art. 5</h3>
                            <ol>
                            <li>Administratorul drumului public, antreprenorul sau executantul lucrărilor, conform competenţelor ce îi revin, cu avizul poliţiei rutiere, este obligat să instaleze indicatoare ori alte dispozitive speciale, să aplice marcaje pe drumurile publice, conform standardelor în vigoare, şi să le menţină în stare corespunzătoare.</li>
                            <li>Administratorul drumului public ori, după caz, antreprenorul sau executantul lucrărilor este obligat să semnalizeze corespunzător, cât mai repede posibil, orice obstacol aflat pe partea carosabilă, care stânjeneşte ori pune în pericol siguranţa circulaţiei, şi să ia toate măsurile de înlăturare a acestuia.</li>
                            <li>Autorităţile publice locale sunt obligate să amenajeze staţiile mijloacelor de transport public de persoane, prevăzute cu alveole sau refugii, cu avizul poliţiei rutiere.</li>
                            <li>Se interzic amplasarea construcţiilor de orice fel şi practicarea actelor de comerţ pe trotuar sau pe acostament, în parcările amenajate sau pe partea carosabilă, în condiţiile în care acestea ar afecta siguranţa circulaţiei pietonilor şi vehiculelor.</li>
                            <li>În perimetrul staţiilor mijloacelor de transport public de persoane pot fi amenajate doar spaţii:</li>
                                 <ol class="tip_a">
                                     <li>de aşteptare pentru călători;</li>
                                     <li>pentru comercializarea legitimaţiilor de călătorie.</li>
                                </ol>
                            <li>În cazul producerii unui eveniment rutier ca urmare a stării tehnice necorespunzătoare a drumului public, a nesemnalizării sau a semnalizării necorespunzătoare a acestuia, precum şi a obstacolelor ori lucrărilor care se execută pe acesta, administratorul drumului public, antreprenorul sau executantul lucrărilor răspunde, după caz, administrativ, contravenţional, civil sau penal, în condiţiile legii.</li>
                            <li>Orice măsură de restricţie a circulaţiei pe drumurile publice se dispune de către administratorul drumului numai cu avizul poliţiei rutiere.</li>
                            <li>Prin excepţie de la alin. (7), în cazuri temeinic justificate, poliţia rutieră poate dispune, fără acordul administratorului drumului public, măsuri temporare de restricţie a circulaţiei pe drumurile publice.</li>
                            <li>În scopul asigurării desfăşurării în condiţii de siguranţă a circulaţiei pe drumurile publice, poliţia rutieră poate solicita administratorului drumului public executarea sau, după caz, desfiinţarea de amenajări rutiere.</li>
                            </ol>
                            
                            <h3>Art. 6</h3>
                            <p>În sensul prezentei ordonanţe de urgenţă, expresiile şi termenii de mai jos au următorul înţeles:</p>
                            
                            <ol>
                            <li><i>acordare a priorităţii - </i>obligaţia oricărui participant la trafic de a nu îşi continua deplasarea sau de a nu efectua orice altă manevră, dacă prin acestea îi obligă pe ceilalţi participanţi la trafic care au prioritate de trecere să îşi modifice brusc direcţia sau viteza de deplasare ori să oprească;</li>
                            <li><i>acostament - </i>fâşia laterală cuprinsă între limita părţii carosabile şi marginea platformei drumului;</li>
                            <li><i>amenajări rutiere - </i>totalitatea construcţiilor, dispozitivelor şi oricăror mijloace tehnice, altele decât cele destinate semnalizării, amplasate pe drumul public în scopul asigurării securităţii rutiere;</li>
                            <li><i>ansamblu de vehicule - </i>vehiculul cu motor cuplat cu unul sau două vehicule, care circulă pe drum ca o unitate;</li>
                            <li><i>autostradă - </i>drumul naţional de mare capacitate şi viteză, semnalizat special, rezervat exclusiv circulaţiei autovehiculelor, cu sau fără remorci, care nu serveşte proprietăţii riverane, prevăzut cu două căi unidirecţionale, separate printr-o zonă mediană sau, în mod excepţional, prin alte modalităţi, cu excepţia unor locuri speciale sau cu caracter temporar, având cel puţin două benzi de circulaţie pe sens şi bandă de urgenţă, intersecţii denivelate şi accese limitate, intrarea şi ieşirea fiind permise numai prin locuri special amenajate;</li>
                            <li><i>autovehicul - </i>orice vehicul echipat cu motor de propulsie, utilizat în mod obişnuit pentru transportul persoanelor sau mărfurilor pe drum ori pentru tractarea, pe drum, a vehiculelor utilizate pentru transportul persoanelor sau mărfurilor. Vehiculele care se deplasează pe şine, denumite tramvaie, precum şi tractoarele agricole sau forestiere nu sunt considerate autovehicule. Troleibuzele sunt considerate autovehicule;</li>
                            <li><i>anvelope de iarnă - </i>anvelope omologate conform Directivei 92/23/CE a Consiliului din 31 martie 1992 privind pneurile autovehiculelor şi ale remorcilor acestora, precum şi montarea lor, Regulamentului Comisiei Economice pentru Europa a Organizaţiei Naţiunilor Unite (CEE-ONU) nr. 30 sau Regulamentului Comisiei Economice pentru Europa a Organizaţiei Naţiunilor Unite CEE-ONU nr. 54, după caz.</li>
                            <li><i>bandă de circulaţie - </i>subdiviziunea longitudinală a părţii carosabile, materializată prin marcaje rutiere sau alte mijloace, dacă are o lăţime corespunzătoare pentru circulaţia într-un sens a unui şir de vehicule, altele decât vehiculele care se deplasează pe două roţi;</li>
                            <li><i>bandă de urgenţă - </i>subdiviziunea longitudinală suplimentară, situată la extremitatea din partea dreaptă a autostrăzii, în sensul de circulaţie, destinată exclusiv staţionării autovehiculelor în cazuri justificate, precum şi circulaţiei autovehiculelor cu regim prioritar care se deplasează la intervenţii sau în misiuni cu caracter de urgenţă;</li>
                            <li><i>bandă reversibilă - </i>banda de circulaţie, marcată şi semnalizată, situată lângă axa drumului, destinată circulaţiei autovehiculelor într-un sens sau în altul, în funcţie de intensitatea traficului;</li>
                            <li><i>bicicletă - </i>vehiculul prevăzut cu două roţi, propulsat exclusiv prin forţa musculară, cu ajutorul pedalelor sau manivelelor;</li>
                            <li><i>coloană oficială - </i>unul sau mai multe vehicule care circulă pe drumul public şi sunt însoţite de unul sau mai multe autovehicule ale poliţiei rutiere, care au în funcţiune semnale speciale de avertizare sonore şi luminoase de culoare roşie;</li>
                            <li><i>conducător - </i>persoana care conduce pe drum un grup de persoane, un vehicul sau animale de tracţiune, animale izolate sau în turmă, de povară ori de călărie;</li>
                            <li><i>drum public - </i>orice cale de comunicaţie terestră, cu excepţia căilor ferate, special amenajată pentru traficul pietonal sau rutier, deschisă circulaţiei publice; drumurile care sunt închise circulaţiei publice sunt semnalizate la intrare cu inscripţii vizibile;</li>
                            <li><i>unităţi de asistenţă medicală autorizate - </i>unităţile sanitare cu personal calificat şi cu dotare corespunzătoare pentru examinarea medicală ambulatorie a candidaţilor la obţinerea permisului de conducere şi a conducătorilor de autovehicule, de tractoare agricole sau forestiere ori de tramvaie, autorizate de autoritatea de sănătate publică judeţeană sau de cea a municipiului Bucureşti, după caz;</li>
                            <li><i>intersecţie - </i>orice încrucişare, joncţiune sau bifurcare de drumuri la nivel, inclusiv spaţiile formate de acestea;</li>
                            <li><i>înmatriculare/înregistrare - </i>operaţiunea administrativă prin care se atestă că un vehicul poate circula pe drumurile publice. Dovada atestării înmatriculării/înregistrării este certificatul de înmatriculare/înregistrare şi numărul de înmatriculare/înregistrare atribuit;</li>
                            <li><i>înmatriculare/înregistrare permanentă - </i>operaţiunea de înmatriculare/înregistrare prin care se atribuie certificat de înmatriculare/înregistrare şi număr de înmatriculare/ înregistrare pentru o perioadă nedeterminată;</li>
                            <li><i>înmatriculare temporară - </i>operaţiunea de înmatriculare prin care se acordă certificat de înmatriculare şi număr de înmatriculare pentru o perioadă determinată;</li>
                            <li><i>localitate - </i>cătunul, satul, comuna, oraşul şi municipiul ale căror intrări şi ieşiri sunt semnalizate în conformitate cu prevederile legale;</li>
                            <li><i>masă totală maximă autorizată - </i>masa maximă a unui vehicul încărcat, declarată admisibilă în urma omologării de către autoritatea competentă;</li>
                            <li><i>mijloc tehnic certificat - </i>dispozitivul care dovedeşte consumul de substanţe psihoactive ori prezenţa în aerul expirat a alcoolului sau prin care se probează încălcări ale unor reguli de circulaţie;</li>
                            <li><i>mijloc tehnic omologat şi verificat metrologic - </i>dispozitivul care stabileşte concentraţia de alcool în aerul expirat ori destinat măsurării vitezei;</li>
                            <li><i>moped - </i>autovehicul, cu două sau trei roţi, a cărui viteză maximă prin construcţie este mai mare de 25 km/h, dar nu depăşeşte 45 km/h şi care este echipat cu un motor cu ardere internă, cu aprindere prin scânteie, cu o capacitate cilindrică ce nu depăşeşte 50 cmc sau cu un alt motor cu ardere internă ori, după caz, electric, a cărui putere nominală continuă maximă nu depăşeşte 4 kW, iar masa proprie a vehiculului nu depăşeşte 350 kg, neincluzând masa bateriilor în cazul vehiculului electric. Este asimilat mopedului cvadriciclul uşor, astfel cum este definit la pct. 6 partea A din anexa nr. 1 la secţiunea 4 din Reglementările privind omologarea de tip şi eliberarea cărţii de identitate a vehiculelor rutiere, precum şi omologarea de tip a produselor utilizate la acestea - RNTR 2, aprobate prin Ordinul ministrului lucrărilor publice, transporturilor şi locuinţei nr. 211/2003, cu modificările şi completările ulterioare;</li>
                            <li><i>motocicletă - </i>autovehiculul cu două roţi, cu sau fără ataş, echipat cu un motor care are o capacitate cilindrică mai mare de 50 cm3 şi/sau a cărui viteză maximă, prin construcţie, depăşeşte 45 km/h;</li>
                            <li><i>parte carosabilă - </i>porţiunea din platforma drumului destinată circulaţiei vehiculelor; un drum poate cuprinde mai multe părţi carosabile complet separate una de cealaltă printr-o zonă despărţitoare sau prin diferenţă de nivel;</li>
                            <li><i>participant la trafic - </i>persoana fizică ce utilizează, la un moment dat, drumul public;</li>
                            <li><i>pistă pentru biciclete - </i>subdiviziunea părţii carosabile, a trotuarului ori a acostamentului sau pistă separată de drum, special amenajată, semnalizată şi marcată corespunzător, destinată numai circulaţiei bicicletelor şi mopedelor;</li>
                            <li><i>prioritate de trecere - </i>dreptul unui participant la trafic de a trece înaintea celorlalţi participanţi la trafic cu care se intersectează, în conformitate cu prevederile legale privind circulaţia pe drumurile publice;</li>
                            <li><i>remorcă - </i>vehiculul fără motor destinat a fi tractat de un autovehicul sau de un tractor agricol sau forestier;</li>
                            <li><i>remorcă uşoară - </i>remorca a cărei masă totală maximă autorizată nu depăşeşte 750 kg;</li>
                            <li><i>semiremorcă - </i>remorca a cărei masă totală maximă autorizată este preluată în parte de către un autovehicul sau de către un tractor agricol sau forestier;</li>
                            <li><i>tractor agricol sau forestier - </i>orice vehicul cu motor, care circulă pe roţi sau pe şenile, având cel puţin două axe, a cărui principală funcţie constă în puterea sa de tracţiune, conceput în special pentru a trage, a împinge, a transporta ori a acţiona anumite echipamente, utilaje sau remorci utilizate în exploatarea agricolă ori forestieră şi a cărui utilizare pentru transportul pe drum al persoanelor sau al mărfurilor ori pentru tractarea, pe drum, a vehiculelor utilizate pentru transportul persoanelor sau al mărfurilor nu este decât o funcţie secundară. Sunt asimilate tractorului agricol sau forestier vehiculele destinate efectuării de servicii ori lucrări, denumite maşini autopropulsate;</li>
                            <li><i>trecere la nivel - </i>încrucişarea la nivel dintre un drum public şi o cale ferată sau linie de tramvai, care dispune de o platformă independentă;</li>
                            <li><i>triciclu cu motor - </i>autovehicul cu trei roţi dispuse simetric, a cărui viteză maximă prin construcţie depăşeşte 45 km/h, care este echipat cu un motor având o cilindree de peste 50 cm3, în cazul unui motor cu ardere internă, sau cu un motor electric cu putere nominală continuă ce depăşeşte 4 kW;</li>
                            <li><i>trotuar - </i>spaţiul longitudinal situat în partea laterală a drumului, separat în mod vizibil de partea carosabilă prin diferenţă sau fără diferenţă de nivel, destinat circulaţiei pietonilor;</li>
                            <li><i>deţinător mandatat - </i>persoana fizică sau juridică care foloseşte un vehicul în baza unui contract de leasing sau contract de închiriere;</li>
                            <li><i>vehicul - </i>sistemul mecanic care se deplasează pe drum, cu sau fără mijloace de autopropulsare, utilizat în mod curent pentru transportul de persoane şi/sau bunuri ori pentru efectuarea de servicii sau lucrări;</li>
                            <li><i>vehicul nou - </i>vehicul care nu a mai fost niciodată înmatriculat;</li>
                            <li><i>vehicul cu mase sau dimensiuni de gabarit depăşite - </i>vehiculul care, datorită dimensiunilor sale ori mărfurilor transportate, depăşeşte masele totale maxime admise sau dimensiunile de gabarit admise, prevăzute în reglementările legale;</li>
                            <li><i>vehicul în circulaţie internaţională sau în trafic internaţional - </i>vehiculul care, prin deplasarea sa, depăşeşte cel puţin o frontieră de stat;</li>
                            <li><i>zona drumului public</i> cuprinde suprafaţa de teren ocupată de elementele constructive ale drumului, zona de protecţie şi zona de siguranţă. Limitele zonelor drumurilor se stabilesc în conformitate cu prevederile legale;</li>
                            <li><i>zonă pietonală - </i>perimetrul care cuprinde una sau mai multe străzi rezervate circulaţiei pietonilor, unde accesul vehiculelor este supus unor reguli speciale de circulaţie, având intrările şi ieşirile semnalizate în conformitate cu prevederile legale;</li>
                            <li><i>zonă rezidenţială - </i>perimetrul dintr-o localitate unde se aplică reguli speciale de circulaţie, având intrările şi ieşirile semnalizate în conformitate cu prevederile legale.</li>
                            </ol>

                            <form method="post" action="capitolTerminat.php">
                                <input class="buton-verif" type="submit" name="progres-dgenerale" value="Finalizeaza capitol" onclick="showImage(1)">  
                            </form>
                          
                        </span>

                        <span id="pg2">

                            <div class="titlu-partea-dreapta">
                                <h1>VEHICULELE</h1>
                            </div>

                            <h3>Art. 7</h3>
                            <p>Orice vehicul care circulă pe drumurile publice trebuie să corespundă normelor tehnice privind siguranţa circulaţiei rutiere, protecţia mediului şi utilizarea conform destinaţiei.</p>

                            <h3>Art. 8</h3>
                            <p>Pentru a fi conduse pe drumurile publice, fiecare autovehicul, tractor agricol sau forestier şi tramvai trebuie sa fie dotat cu trusă medicală de prim ajutor, două triunghiuri reflectorizante şi un stingător de incendiu, omologate.</p>

                            <h3>Art. 9</h3>
                            <ol>
                            <li>Pentru a fi înmatriculate, înregistrate sau admise în circulaţie, autovehiculele şi tractoarele agricole sau forestiere, remorcile şi tramvaiele trebuie să fie omologate în condiţiile legii.</li>
                            <li>Categoriile de vehicule care pot fi admise în circulaţie fără a fi omologate se stabilesc prin ordin al ministrului transporturilor, construcţiilor şi turismului, cu avizul Ministerului Administraţiei şi Internelor - Inspectoratul General al Poliţiei Române, care se publică în Monitorul Oficial al României, Partea I.</li>
                            <li>Documentul care atestă omologarea este cartea de identitate a vehiculului, eliberată în condiţiile legii.</li>
                            <li>Pentru a fi menţinute în circulaţie, vehiculele înmatriculate sau înregistrate, cu excepţia maşinilor autopropulsate cu o viteză maximă constructivă care nu depăşeşte 25 km/h, a autovehiculelor cu şenile, a tramvaielor şi a vehiculelor cu tracţiune animală, se supun inspecţiei tehnice periodice, conform legislaţiei în vigoare.</li>
                            <li>Inspecţia tehnică periodică se efectuează în staţii autorizate, conform legislaţiei în vigoare.</li>
                            <li>Pentru autovehiculele şi tractoarele agricole sau forestiere aparţinând instituţiilor din sistemul de apărare, ordine publică şi siguranţă naţională, inspecţia tehnică periodică se poate efectua şi în staţii proprii, autorizate potrivit legii.</li>
                            </ol>

                            <h3>Art. 10</h3>
                            <ol>
                            <li>Este interzisă circulaţia pe drumurile publice a vehiculelor care nu corespund din punct de vedere tehnic, a celor al căror termen de valabilitate a inspecţiei tehnice periodice a expirat, precum şi a celor neasigurate pentru răspundere civilă pentru caz de pagube produse terţilor prin accidente de circulaţie.</li>
                            <li>Constatarea defecţiunilor tehnice ale vehiculelor se face de către poliţia rutieră, iar verificarea stării tehnice a vehiculelor aflate în trafic pe drumurile publice se face de către poliţia rutieră, împreună cu instituţiile abilitate de lege.</li>
                            </ol>

                            <h3>Art. 11</h3>
                            <ol>
                            <li>Proprietarii de vehicule sau deţinătorii mandataţi ai acestora sunt obligaţi să le înmatriculeze sau să le înregistreze, după caz, înainte de a le pune în circulaţie, conform prevederilor legale.</li>
                            <li>Înmatricularea vehiculelor este continuă, de la admiterea în circulaţie până la scoaterea definitivă din circulaţie a unui vehicul din categoria celor supuse acestei condiţii, potrivit prevederilor prezentei ordonanţe de urgenţă, şi presupune următoarele operaţiuni:</li>
                            <ol class="tip_a">
                                <li>înscrierea în evidenţele autorităţilor competente, potrivit legii, a dobândirii dreptului de proprietate asupra unui vehicul de către primul proprietar;</li>
                                <li>transcrierea în evidenţele autorităţilor competente, potrivit legii, a tuturor transmiterilor ulterioare ale dreptului de proprietate asupra unui vehicul.</li>
                            </ol>
                            <li>Operaţiunile prevăzute la alin. (2) se realizează pe baza datelor de identificare ale vehiculului şi ale proprietarului şi condiţionează eliberarea de către autorităţile competente, potrivit legii, a unui certificat de înmatriculare, precum şi a plăcuţelor cu numărul de înmatriculare atribuit şi transcrierile necesare în certificatul de înmatriculare şi în cartea de identitate a vehiculului.</li>
                            <li>În cazul transmiterii dreptului de proprietate asupra unui vehicul, datele noului proprietar se înscriu în evidenţele autorităţilor competente simultan cu menţionarea încetării calităţii de titular al înmatriculării a fostului proprietar. Pentru realizarea acestei operaţiuni şi emiterea unui nou certificat de înmatriculare, noul proprietar este obligat să solicite autorităţii competente transcrierea transmiterii dreptului de proprietate, în termen de 30 de zile de la data dobândirii dreptului de proprietate asupra vehiculului.</li>
                            <li>Solicitanţii unei operaţiuni de înmatriculare a unui vehicul în evidenţele autorităţilor competente, potrivit legii, trebuie să facă dovada certificării autenticităţii vehiculului de către Registrul Auto Român, în condiţiile stabilite prin ordin comun al ministrului transporturilor, construcţiilor şi turismului şi al ministrului administraţiei şi internelor, care se publică în Monitorul Oficial al României, Partea I. Certificarea autenticităţii vehiculului conţine şi atestarea faptului că acesta nu figurează în baza de date ca fiind furat.</li>
                            <li>Dovada certificării vehiculului nu se impune în cazul vehiculelor noi pentru solicitanţii operaţiilor de înmatriculare.</li>
                            <li>Cu ocazia realizării oricărei operaţiuni privind înmatricularea unui vehicul, verificarea efectuării inspecţiei tehnice periodice şi a asigurării obligatorii de răspundere civilă, respectiv a valabilităţii acestora, se poate face şi pe cale informatică, în condiţiile stabilite prin protocol încheiat între autoritatea competentă din subordinea Ministerului Administraţiei şi Internelor cu atribuţii de organizare şi coordonare a activităţii de evidenţă şi eliberare a certificatelor de înmatriculare şi a plăcuţelor cu numere de înmatriculare şi Registrul Auto Român, respectiv Comisia de Supraveghere a Asigurărilor.</li>
                            <li>Autorităţile competente să realizeze operaţiunile de înmatriculare a vehiculelor pot încasa de la solicitanţi toate taxele şi tarifele stabilite potrivit legii, aferente acestor operaţiuni.</li>
                            <li>Societăţile abilitate să comercializeze vehicule noi şi societăţile de leasing din România pot solicita, pe cale informatică, înmatricularea sau autorizarea provizorie pentru circulaţie a vehiculelor, prin intermediul unei aplicaţii informatice puse la dispoziţie, în condiţiile stabilite prin protocol, de către autoritatea competentă din subordinea Ministerului Administraţiei şi Internelor cu atribuţii de organizare şi coordonare a activităţii de evidenţă şi eliberare a certificatelor de înmatriculare şi a plăcuţelor cu numere de înmatriculare.</li>
                            <li>Proprietarul sau deţinătorul mandatat al unui vehicul este obligat să solicite autorităţii competente înscrierea în certificatul de înmatriculare sau de înregistrare a oricărei modificări a datelor de identificare a vehiculului respectiv sau, după caz, ale proprietarului, în termen de 30 de zile de la data la care a intervenit modificarea.</li>
                            </ol>

                            <h3>Art. 12</h3>
                            <ol>
                            <li>Pentru a circula pe drumurile publice, vehiculele, cu excepţia celor trase sau împinse cu mâna şi a bicicletelor, trebuie să fie înmatriculate ori înregistrate, după caz, şi să poarte plăcuţe cu numărul de înmatriculare sau de înregistrare, cu forme, dimensiuni şi conţinut prevăzute de standardele în vigoare.</li>
                            <li>Vehiculele care nu sunt supuse înmatriculării sau înregistrării pot circula pe drumurile publice numai în condiţiile prevăzute prin regulament.</li>
                            </ol>

                            <h3>Art. 13</h3>
                            <ol>
                            <li>Autovehiculele, cu excepţia mopedelor şi a troleibuzelor, precum şi remorcile se înmatriculează permanent sau temporar la autoritatea competentă în a cărei rază teritorială proprietarii îşi au domiciliul, reşedinţa ori sediul, în condiţiile stabilite prin reglementările în vigoare.</li>
                            <li>Autovehiculele, remorcile şi tractoarele agricole sau forestiere din dotarea Ministerului Apărării Naţionale, a Ministerului Afacerilor Interne, precum şi cele ale Serviciului Român de Informaţii se înregistrează la aceste instituţii. Autovehiculele şi remorcile pot, după caz, să fie înmatriculate în condiţiile prevăzute la alin. (1).</li>
                            <li>Până la înmatriculare, vehiculele prevăzute la alin. (1) pot circula cu numere provizorii, pe baza unei autorizaţii speciale eliberate de autoritatea competentă.</li>
                            <li>La cerere, persoanelor juridice care fabrică, asamblează, carosează ori testează autovehicule, remorci sau tractoare agricole ori forestiere li se pot elibera pentru acestea autorizaţii şi numere pentru probă.</li>
                            <li>Evidenţa vehiculelor înmatriculate se ţine la autoritatea competentă pe raza căreia proprietarul îşi are domiciliul, reşedinţa sau sediul.</li>
                            </ol>

                            <h3>Art. 14</h3>
                            <p>Tramvaiele, troleibuzele, mopedele, tractoarele agricole sau forestiere, altele decât cele prevăzute la art. 13 alin. (2), inclusiv remorcile destinate a fi tractate de acestea, precum şi vehiculele cu tracţiune animală se înregistrează la nivelul primarilor comunelor, ai oraşelor, ai municipiilor şi ai sectoarelor municipiului Bucureşti, care, prin compartimentele de specialitate, ţin şi evidenţa acestora.</p>

                            <h3>Art. 15</h3>
                            <ol>
                            <li>Odată cu realizarea operaţiunilor de înmatriculare a vehiculului, autoritatea competentă eliberează proprietarului sau deţinătorului mandatat un certificat de înmatriculare, conform categoriei din care face parte vehiculul respectiv, precum şi plăcuţe cu numărul de înmatriculare.</li>
                            <li>La cererea scrisă a proprietarului unui vehicul, în certificatul de înmatriculare sau de înregistrare se poate înscrie şi o altă persoană decât proprietarul, specificându-se calitatea în care aceasta poate utiliza vehiculul, în virtutea unui drept legal. În cazul în care proprietarul vehiculului este o societate de leasing, este obligatorie menţionarea în certificatul de înmatriculare sau de înregistrare şi a datelor de identificare ale deţinătorului mandatat.</li>
                            <li>Pentru vehiculele prevăzute la art. 13 alin. (2) şi art. 14 alin. (1), autoritatea care le înregistrează eliberează proprietarilor acestora certificate şi plăcuţe cu numere de înregistrare, conform categoriei din care fac parte vehiculele respective.</li>
                            <li>Forma, dimensiunile şi conţinutul certificatului de înmatriculare şi ale certificatului de înregistrare se stabilesc prin ordin al ministrului administraţiei şi internelor, care se publică în Monitorul Oficial al României, Partea I.</li>
                            <li>Este interzisă punerea în circulaţie a unui vehicul, înmatriculat sau înregistrat, care nu are montate plăcuţe cu numărul de înmatriculare sau de înregistrare atribuite de autoritatea competentă ori dacă acestea nu sunt conforme cu standardele în vigoare, precum şi în cazul în care certificatul de înmatriculare sau de înregistrare este reţinut, iar dovada înlocuitoare a acestuia este eliberată fără drept de circulaţie sau termenul de valabilitate a expirat.</li>
                            </ol>

                            <h3>Art. 16</h3>
                            <p>Înmatricularea, înregistrarea sau atribuirea numărului provizoriu ori pentru probe a unui vehicul se anulează de către autoritatea care a efectuat-o, dacă se constată că au fost încălcate normele legale referitoare la aceste operaţiuni.</p>

                            <h3>Art. 17</h3>
                            <ol>
                            <li>Radierea din evidenţă a vehiculelor se face de către autoritatea care a efectuat înmatricularea sau înregistrarea doar în cazul scoaterii definitive din circulaţie a acestora, la cererea proprietarului, în următoarele cazuri:</li>
                            <ol class="tip_a">
                                <li>proprietarul doreşte retragerea definitivă din circulaţie a vehiculului şi face dovada depozitării acestuia într-un spaţiu adecvat, deţinut în condiţiile legii;</li>
                                <li>proprietarul face dovada dezmembrării, casării sau predării vehiculului la unităţi specializate în vederea dezmembrării;</li>
                                <li>la scoaterea definitivă din România a vehiculului respectiv;</li>
                                <li>în cazul furtului vehiculului.</li>
                            </ol>
                            <li>Radierea din evidenţă a vehiculelor înregistrate, la trecerea acestora în proprietatea altei persoane, se face de către autoritatea care a efectuat înregistrarea, la cererea proprietarului, în condiţiile legii.</li>
                            <li>Este interzisă circulaţia pe drumurile publice a vehiculelor radiate din evidenţă.</li>
                            <li>Vehiculele declarate, potrivit legii, prin dispoziţie a autorităţii administraţiei publice locale, fără stăpân sau abandonate se radiază din oficiu în termen de 30 de zile de la primirea dispoziţiei respective.</li>
                            </ol>

                            <h3>Art. 18</h3>
                            <p>În cazul pierderii, furtului, schimbării numelui ori deteriorării certificatului de înmatriculare sau de înregistrare, proprietarul vehiculului respectiv este obligat să solicite autorităţii competente eliberarea unui nou certificat de înmatriculare sau de înregistrare, în condiţiile stabilite de autoritatea competentă, în termen de 30 de zile de la data declarării pierderii sau furtului, de la data schimbării numelui ori de la data constatării deteriorării, după caz.</p>>
                            
                            <h3>Art. 19</h3>
                            <p>Procedura înmatriculării, înregistrării, radierii şi eliberarea autorizaţiei de circulaţie provizorie sau pentru probe a vehiculelor se stabilesc prin ordin al ministrului administraţiei şi internelor, care se publică în Monitorul Oficial al României, Partea I.</p>
                        
                            <form method="post" action="capitolTerminat.php">
                                <input class="buton-verif" type="submit" name="progres-vehicule" value="Finalizeaza capitol" onclick="showImage(2)">  
                            </form>
                        </span>

                        <span id="pg3">
                            
                            <div class="titlu-partea-dreapta">
                                <h1>CONDUCATORII DE VEHICULE</h1>
                            </div>

                            <h3>Art. 20</h3>
                            <ol>
                            <li>Pentru a conduce pe drumurile publice autovehicule, tramvaie ori tractoare agricole sau forestiere, conducătorii acestora trebuie să posede permis de conducere corespunzător.</li>
                            <li>Permisele de conducere se eliberează pentru următoarele categorii de vehicule: AM, A1, A2, A, B1, B, BE, C1, C1E, C, CE, D1, D1E, D, DE, Tr, Tb sau Tv.</li>
                            <li>Descrierea categoriilor de vehicule prevăzute la alin. (2), pentru care se eliberează permise de conducere, este prevăzută în anexa nr. 1.</li>
                            <li>Vârsta minimă pentru obţinerea permisului de conducere este de:</li>
                            <ol class="tip_a">
                                <li>16 ani împliniţi, pentru categoriile de vehicule AM, A1 şi B1;</li>
                                <li>18 ani împliniţi, pentru categoriile de vehicule A2, B, BE, C1, C1E şi Tr;</li>
                                <li>0 de ani împliniţi, dacă persoana are o experienţă de cel puţin 2 ani de conducere a motocicletelor din categoria A2, sau 24 de ani împliniţi, pentru motocicletele din categoria A;</li>
                                <li>21 de ani pentru categoriile de vehicule C, CE, D1 şi D1E, precum şi pentru triciclurile cu motor din categoria A;</li>
                                <li>24 de ani pentru categoriile de vehicule D, DE, Tb şi Tv.</li>
                            </ol>
                            </ol>

                            <h3>Art. 21</h3>
                            <ol>
                            <li>Conducătorii de autovehicule, de tractoare agricole sau forestiere ori de tramvaie trebuie să aibă cunoştinţele şi îndemânarea necesare conducerii şi să fie apţi din punct de vedere medical şi psihologic.</li>
                            <li>Conducătorii de autovehicule, de tractoare agricole sau forestiere ori de tramvaie vor fi verificaţi periodic din punct de vedere medical şi al capacităţilor psihologice, în condiţiile stabilite de reglementările în vigoare.</li>
                            </ol>

                            <h3>Art. 22</h3>
                            <ol>
                            <li>Examinarea medicală se realizează în scopul certificării stării de sănătate şi a calităţilor fizice necesare unui conducător de autovehicul, tractor agricol sau forestier ori tramvai.</li>
                            <li>Afecţiunile medicale incompatibile cu calitatea de conducător de autovehicule, tractoare agricole sau forestiere ori tramvaie se stabilesc de către Ministerul Sănătăţii Publice şi se aprobă prin ordin al ministrului, care se publică în Monitorul Oficial al României, Partea I.</li>
                            <li>Examinarea medicală se realizează în vederea:</li>
                            <ol class="tip_a">
                                <li>aprobării prezentării la examen pentru obţinerea permisului de conducere;</li>
                                <li>obţinerii certificatului de atestare profesională pentru conducătorii de autovehicule, de tractoare agricole sau forestiere ori de tramvaie stabiliţi prin prezenta ordonanţă de urgenţă;</li>
                                <li>verificării periodice, conform reglementărilor în vigoare.</li>
                            </ol>
                            <li>Examinarea medicală se realizează în unităţi de asistenţă medicală autorizate, existente la nivelul fiecărui judeţ, care au obligaţia luării în evidenţă a solicitantului sau a conducătorului de autovehicul şi tractor agricol sau forestier ori de tramvai de către medicul de familie.</li>
                            <li>Lista unităţilor de asistenţă medicală autorizate se stabileşte şi se actualizează prin ordin al ministrului sănătăţii publice, care se publică în Monitorul Oficial al României, Partea I.</li>
                            <li>Medicul de familie, atunci când constată că o persoană din evidenţa sa, care posedă permis de conducere, prezintă afecţiuni medicale prevăzute în ordinul ministrului sănătăţii publice emis conform alin. (2), va solicita unităţii de asistenţă medicală autorizate examenul de specialitate necesar. În cazul în care unitatea de asistenţă medicală autorizată a stabilit că persoana este inaptă medical pentru a conduce un autovehicul, tractor agricol sau forestier ori tramvai, va comunica aceasta imediat poliţiei rutiere pe a cărei rază teritorială îşi desfăşoară activitatea.</li>
                            <li>Verificarea medicală se efectuează în condiţiile stabilite prin ordin al ministrului sănătăţii publice, care se publică în Monitorul Oficial al României, Partea I.</li>
                            <li>Permisul de conducere al persoanei care este declarată inaptă medical sau psihologic pentru a conduce autovehicule ori tramvaie se retrage de către poliţia rutieră şi poate fi redobândit numai după încetarea motivului pentru care s-a luat această măsură.</li>
                            <li>Avizul de apt sau inapt medical poate fi contestat doar pe baza unei expertize efectuate de instituţiile medico-legale, la solicitarea şi pe cheltuiala părţilor interesate.</li>
                            </ol>

                            <h3>Art. 23</h3>
                            <ol>
                            <li>Dreptul de a conduce un autovehicul, tractor agricol sau forestier ori tramvai pe drumurile publice îl are numai persoana care posedă permis de conducere valabil, corespunzător categoriei din care face parte vehiculul respectiv, sau dovada înlocuitoare a acestuia cu drept de circulaţie.</li>
                            <li>Au dreptul de a conduce autovehicule, tractoare agricole sau forestiere ori tramvaie pe drumurile publice, în condiţiile stabilite prin regulament, şi persoanele care urmează un curs de pregătire practică, în vederea obţinerii permisului de conducere, numai în prezenţa şi sub supravegherea directă a unui instructor auto atestat în acest sens, precum şi a examinatorului din cadrul autorităţii competente în timpul desfăşurării probelor practice ale examenului pentru obţinerea permisului de conducere pentru oricare dintre categoriile ori subcategoriile prevăzute de lege.</li>
                            <li>Pe parcursul activităţii de pregătire practică sau de examinare în vederea obţinerii permisului de conducere, instructorul auto atestat ori, după caz, examinatorul împreună cu persoana pe care o supraveghează sau o examinează răspund pentru încălcarea de către aceasta a regulilor de circulaţie sau, după caz, pentru pagubele produse terţilor ca urmare a producerii unui accident de circulaţie.</li>
                            <li>Pregătirea teoretică şi practică a persoanelor în vederea obţinerii permisului de conducere este precedată de o evaluare obligatorie a capacităţilor psihologice solicitate în activitatea de conducere a autovehiculelor, tractoarelor agricole sau forestiere ori tramvaielor. Evaluarea psihologică este obligatorie în vederea obţinerii certificatului de atestare profesională pentru conducătorii de autovehicule şi de tramvaie stabiliţi prin prezenta ordonanţă de urgenţă.</li>
                            <li>Conducătorii de autovehicule sau de tramvaie, deţinători ai certificatului de atestare profesională, vor fi evaluaţi periodic din punct de vedere al capacităţilor psihologice solicitate în activitatea de conducere a autovehiculelor sau tramvaielor, în condiţiile stabilite de reglementările în vigoare.</li>
                            <li>Evaluarea psihologică se efectuează în condiţiile stabilite prin ordin al ministrului transporturilor, construcţiilor şi turismului, în condiţiile legii, care se publică în Monitorul Oficial al României, Partea I.</li>
                            <li>Evaluarea psihologică se realizează în laboratoare de specialitate autorizate din cadrul instituţiilor abilitate.</li>
                            <li>Lista laboratoarelor de specialitate autorizate se stabileşte şi se actualizează prin ordin al ministrului transporturilor, construcţiilor şi turismului, care se publică în Monitorul Oficial al României, Partea I.</li>
                            <li>Persoanele care solicită prezentarea la examen pentru obţinerea permisului de conducere sau a unor noi categorii ori subcategorii ale acestuia trebuie să îndeplinească, potrivit legii, condiţiile de vârstă, să fie apte din punct de vedere medical şi să facă dovada pregătirii teoretice şi practice prin cursuri organizate de unităţi autorizate, potrivit legii.</li>
                            <li>Pot fi atestaţi ca profesori de legislaţie sau instructori auto pentru pregătirea practică, fără şcolarizare şi susţinerea examenului de atestare, poliţiştii rutieri cu grad de ofiţer cărora le-au încetat raporturile de serviciu şi care şi-au desfăşurat activitatea neîntrerupt în ultimii 10 ani în structurile poliţiei rutiere.</li>
                            <li>Poliţiştii rutieri care nu au grad de ofiţer pot fi atestaţi ca instructori auto pentru pregătirea practică, dacă îndeplinesc condiţiile prevăzute la alin. (6).</li>
                            <li>Examenul pentru obţinerea permisului de conducere constă în susţinerea unei probe teoretice de verificare a cunoştinţelor şi a unei probe practice de verificare a aptitudinilor şi comportamentului, corespunzător categoriei de permis solicitat. Proba practică pentru categoria AM constă numai în verificarea aptitudinilor în poligoane special amenajate. Condiţiile de obţinere a permisului de conducere se stabilesc prin regulament.</li>
                            <li>Procedura de examinare pentru obţinerea permisului de conducere se stabileşte prin ordin al ministrului administraţiei şi internelor, care se publică în Monitorul Oficial al României, Partea I.</li>
                            </ol>

                            <h3>Art. 23<sup>1</sup></h3>
                            <ol>
                                <li>Persoanele cu domiciliul sau reşedinţa în România ori care dovedesc că se află la studii în România de cel puţin 6 luni pot solicita obţinerea permisului de conducere autorităţilor competente să le examineze.</li>
                                <li>In sensul prezentei ordonanţe de urgenţă, pentru procedurile aferente permisului de conducere, au domiciliul sau reşedinţa în România persoanele care se află în una dintre următoarele situaţii:</li>
                                <ol class="tip_a">
                                    <li>locuiesc în mod obişnuit cel puţin 185 de zile într-un an calendaristic la o adresă sau la adrese din România datorită unor legături personale şi profesionale ori datorită unor legături personale care relevă legături strânse cu adresa sau adresele din România, dacă persoanele nu au legături profesionale;</li>
                                    <li>revin periodic la o adresă din România datorită unor legături personale cu adresa respectivă, deşi locuiesc alternativ în locuri diferite, situate în două sau mai multe state membre ale Uniunii Europene ori ale Spaţiului Economic European ori în Confederaţia Elveţiană, deoarece legăturile lor profesionale sunt într-un loc diferit de cel al legăturilor personale;</li>
                                    <li>locuiesc în mod obişnuit la o adresă din România datorită legăturilor personale cu adresa respectivă, deşi locuiesc temporar şi în alt stat membru al Uniunii Europene ori al Spaţiului Economic European ori în Confederaţia Elveţiană pentru îndeplinirea unei activităţi sau misiuni cu durată determinată.</li>
                                </ol>
                                <li>Persoanele care şi-au stabilit domiciliul sau reşedinţa în România potrivit Ordonanţei de urgenţă a Guvernului nr. 97/2005 privind evidenţa, domiciliul, reşedinţa şi actele de identitate ale cetăţenilor români, republicată, cu modificările şi completările ulterioare, pot solicita obţinerea permisului de conducere autorităţilor competente să le examineze, dacă se află în una dintre situaţiile prevăzute la alin. (2).</li>
                                <li>Participarea la studii în cadrul unei universităţi sau şcoli din România nu implică transferul domiciliului sau al reşedinţei în România.</li>
                                <li>Dovada încadrării în una dintre situaţiile prevăzute la alin. (2), precum şi a studiilor în România se face, în condiţiile stabilite prin ordinul ministrului afacerilor interne prevăzut la art. 23 alin. (10), cu documente:</li>
                                <ol class="tip_a">
                                    <li>prevăzute de actele normative care reglementează domiciliul, reşedinţa şi actele de identitate ale cetăţenilor români, libera circulaţie pe teritoriul României a cetăţenilor statelor membre ale Uniunii Europene, Spaţiului Economic European şi a cetăţenilor Confederaţiei Elveţiene sau regimul străinilor în România;</li>
                                    <li>emise de instituţia/instituţiile de învăţământ, acreditată/acreditate în condiţiile legii, care să ateste că persoana urmează studii în România de cel puţin 6 luni;</li>
                                    <li>alte documente justificative, după caz.</li>
                                </ol>
                            </ol>

                            <h3>Art. 24</h3>
                            <ol>
                                <li>Examinarea pentru obţinerea permisului de conducere şi eliberarea acestuia se realizează de către autoritatea competentă pe raza căreia solicitanţii îşi au domiciliul ori reşedinţa în sensul art. 231 alin. (2) sau, în cazul celor aflaţi la studii în România de cel puţin 6 luni, de către autoritatea competentă pe raza căreia se află adresa unde locuiesc.</li>
                                <p>1<sup>1</sup>.  Prin excepţie de la prevederile alin. (1), candidaţii care solicită obţinerea categoriilor Tr, Tb sau Tv, precum şi candidaţii cu dizabilităţi fizice pot fi examinaţi de autoritatea competentă pe raza căreia se află şcoala de conducători auto autorizată unde aceştia au absolvit cursurile de pregătire teoretică şi practică.</p>
                                <li>Forma şi conţinutul permisului de conducere se stabilesc prin ordin al ministrului administraţiei şi internelor, care se publică în Monitorul Oficial al României, Partea I.</li>
                                <li>În localităţile în care autoritatea competentă autorizează desfăşurarea cursurilor de pregătire şi susţinerea examenului pentru obţinerea permisului de conducere, acestea se pot organiza, la cerere, şi în limba minorităţii naţionale respective.</li>
                                <li>În cazul cetăţenilor străini şi al cetăţenilor statelor membre ale Uniunii Europene care îşi stabilesc domiciliul ori reşedinţa în România sau, după caz, se află la studii în România, examinarea la proba teoretică pentru obţinerea permisului de conducere se poate efectua, la cerere, într-o limbă de circulaţie internaţională.</li>
                                <li>Valabilitatea administrativă a permiselor de conducere, pe categorii de vehicule, este următoarea:</li>
                                <ol class="tip_a">
                                    <li>5 ani pentru permisele de conducere eliberate pentru vehiculele din categoriile C1, C1E, C, CE, D1, D1E, D, DE, Tr, Tb şi Tv;</li>
                                    <li>10 ani pentru permisele de conducere eliberate pentru vehiculele din categoriile AM, A1, A2, A, B, Bl şi BE.</li>
                                </ol>
                                <p>5<sup>1</sup>. În cazul pierderii, furtului sau al deteriorării permiselor de conducere ori al schimbării numelui titularului, autorităţile competente eliberează, după caz, un duplicat a cărui valabilitate nu poate depăşi valabilitatea administrativă a documentului înlocuit sau alt permis de conducere.</p>
                                <p>5<sup>2</sup>. Eliberarea unui nou permis de conducere cu o nouă valabilitate administrativă se realizează numai după efectuarea examinării medicale prevăzute la art. 22.</p>
                                <p>5<sup>3</sup>. În cazurile prevăzute la alin. (51) şi (52), eliberarea permiselor de conducere respective se realizează fără susţinerea unui nou examen, la cererea persoanelor care au domiciliul sau reşedinţa în România în sensul art. 231 alin. (2) ori care dovedesc că se află la studii în România de cel puţin 6 luni şi care deţin permis de conducere eliberat de autorităţile competente române, în condiţiile stabilite prin ordin al ministrului afacerilor interne, care se publică în Monitorul Oficial al României, Partea I.</p>
                                <li>Nu are dreptul să se prezinte la examen pentru obţinerea permisului de conducere persoana care a fost condamnată, prin hotărâre judecătorească rămasă definitivă, pentru o infracţiune la regimul circulaţiei pe drumurile publice sau pentru o infracţiune care a avut ca rezultat uciderea sau vătămarea corporală a unei persoane, săvârşită ca urmare a nerespectării regulilor de circulaţie, cu excepţia cazurilor când a intervenit una dintre situaţiile prevăzute la art. 116 alin. (1).</li>
                            </ol>

                            <h3>Art. 24<sup>1</sup></h3>
                            <ol>
                                <li>Permisele de conducere se eliberează după cum urmează:</li>
                                <ol>
                                    <li>pentru categoriile C1, C, D1 şi D - conducătorilor auto care deţin permis de conducere categoria B şi care au promovat examenul corespunzător categoriei solicitate;</li>
                                    <li>pentru categoriile BE, C1E, CE, D1E şi DE - conducătorilor auto care deţin permis de conducere pentru categoriile B, C1, C, D1, respectiv D şi care au promovat examenul corespunzător categoriei solicitate.</li>
                                </ol>
                                <li>Permisele de conducere dau dreptul de a conduce vehicule pe drumurile publice, după cum urmează:</li>
                                <ol class="tip_a">
                                    <li>permisele de conducere eliberate pentru categoriile C1E, CE, D1E sau DE sunt valabile pentru ansamblurile de vehicule din categoria BE;</li>
                                    <li>permisele de conducere eliberate pentru categoria CE sunt valabile pentru categoria DE, dacă titularii deţin permis de conducere pentru categoria D;</li>
                                    <li>permisele de conducere eliberate pentru categoria CE, respectiv categoria DE sunt valabile pentru ansamblurile de vehicule din categoria C1E, respectiv categoria D1E;</li>
                                    <li>permisele de conducere eliberate pentru orice categorie sunt valabile pentru vehiculele din categoria AM;</li>
                                    <li>permisele de conducere eliberate pentru categoria A2 sunt valabile şi pentru categoria A1;</li>
                                    <li>permisele de conducere eliberate pentru categoria A sunt valabile şi pentru categoriile A1 şi A2, cele eliberate pentru categoria B sunt valabile şi pentru categoria B1, cele eliberate pentru categoria C sunt valabile şi pentru categoria C1, iar cele eliberate pentru categoria D sunt valabile şi pentru categoria D1;</li>
                                    <li>permisele de conducere eliberate pentru categoria B sunt valabile pentru triciclurile cu motor având o putere de peste 15 kW, cu condiţia ca deţinătorii permiselor să aibă vârsta de 21 de ani împliniţi.</li>
                                    <li>permisele de conducere eliberate pentru una dintre categoriile B, BE, C sau CE sunt valabile şi pentru categoria Tr, în anumite cazuri specifice;</li>
                                    <li>permisele de conducere eliberate numai pentru categoria Tr sunt valabile şi pentru ansamblul format dintr-un vehicul din categoria Tr şi una sau două remorci;</li>
                                    <li>permisele de conducere eliberate pentru categoriile D sau DE sunt valabile şi pentru vehiculele din categoria Tb.</li>
                                </ol>
                                <p>2<sup>1</sup>. Cazurile specifice pentru care se consideră îndeplinită condiţia prevăzută la alin. (2) lit. h) pentru a da dreptul de a conduce vehicule pe drumurile publice sunt următoarele:</p>
                                <ol class="tip_a">
                                    <li>permisul de conducere pentru categoria B este valabil pentru vehicule din categoria Tr cu masa totală maximă autorizată de până la 3.500 kg, la care se poate ataşa o remorcă a cărei masă totală maximă autorizată să fie mai mică de 750 kg;</li>
                                    <li>permisul de conducere pentru categoria BE este valabil pentru vehicule din categoria Tr cu masa totală maximă autorizată de până la 3.500 kg, la care se poate ataşa o remorcă a cărei masă totală maximă autorizată să fie mai mică de 3.500 kg;</li>
                                    <li>permisul de conducere pentru categoria C este valabil pentru vehicule din categoria Tr cu masa totală maximă autorizată mai mare de 3.500 kg, la care se poate ataşa o remorcă a cărei masă totală maximă autorizată să fie mai mică de 750 kg;</li>
                                    <li>permisul de conducere pentru categoria CE este valabil pentru vehicule din categoria Tr cu masa totală maximă autorizată mai mare de 3.500 kg, la care se poate ataşa o remorcă a cărei masă totală maximă autorizată să fie mai mare de 750 kg.</li>
                                </ol>
                                <li>Persoanele care posedă permis de conducere categoria B au dreptul de a conduce ansamblurile de vehicule prevăzute la lit. f) pct. 3 din anexa nr. 1, în cazul în care ansamblul depăşeşte 3.500 kg, numai dacă fac dovada că au absolvit un curs de formare în cadrul unei unităţi autorizate de pregătire a conducătorilor de vehicule.</li>
                            </ol>
                            
                            <h3>Art. 25</h3>
                            <ol>
                                <li>Pentru conducătorii de autovehicule, tractoare agricole sau forestiere ori tramvaie care au o vechime mai mică de un an de la obţinerea permisului de conducere se stabilesc prin regulament reguli suplimentare de circulaţie.</li>
                                <li>Autovehiculele şi tractoarele agricole sau forestiere conduse de persoanele prevăzute la alin. (1) vor purta un semn distinctiv, în condiţiile stabilite prin regulament.</li>
                            </ol>

                            <h3>Art. 27 Abrogat</h3>

                            <h3>Art. 28</h3>
                                <p>Evidenţa permiselor de conducere reţinute şi a sancţiunilor aplicate conducătorilor de autovehicule, tractoare agricole sau forestiere ori tramvaie se ţine de către poliţia rutieră, în condiţii stabilite prin ordin al ministrului internelor şi reformei administrative.</p>
                           
                                <form method="post" action="capitolTerminat.php">
                                <input class="buton-verif" type="submit" name="progres-conducatorii" value="Finalizeaza capitol" onclick="showImage(3)">  
                            </form>
                        </span>

                        <span id="pg4">
                            
                            <div class="titlu-partea-dreapta">
                                <h1>SEMNALIZAREA RUTIERA</h1>
                            </div>

                            <h3>Art. 29</h3>
                            <ol>
                                <li>Circulaţia pe drumurile publice se desfăşoară în conformitate cu regulile de circulaţie şi cu respectarea semnificaţiei semnalizării rutiere realizate prin mijloacele de semnalizare, semnalele şi indicaţiile poliţistului rutier care dirijează circulaţia, semnalele speciale de avertizare luminoase sau sonore, de semnalizare temporară şi semnalele conducătorilor de vehicule.</li>
                                <li>Participanţii la trafic sunt obligaţi să respecte şi semnalele poliţiştilor de frontieră, ale îndrumătorilor de circulaţie ai Ministerului Apărării Naţionale, ale organelor fiscale din cadrul Agenţiei Naţionale de Administrare Fiscală aflaţi în îndeplinirea atribuţiilor de serviciu, ale agenţilor căilor ferate, ale persoanelor desemnate pentru dirijarea circulaţiei pe sectoarele de drum pe care se execută lucrări de reabilitare a acestora, ale membrilor patrulelor şcolare de circulaţie care acţionează în imediata apropiere a unităţilor de învăţământ, precum şi ale nevăzătorilor, potrivit prevederilor din regulament.</li>
                            </ol>

                            <h3>Art. 30</h3>
                            <ol>
                                <li>Mijloacele de semnalizare rutieră sunt:</li>
                                <ol class="tip_a">
                                    <li>sistemele de semnalizare luminoasă sau sonoră;</li>
                                    <li>indicatoarele;</li>
                                    <li>marcajele;</li>
                                    <li>alte dispozitive speciale.</li>
                                </ol>
                                <li>Mijloacele de semnalizare rutieră se constituie într-un sistem unitar, se realizează şi se instalează astfel încât să fie observate cu uşurinţă şi de la o distanţă adecvată, atât pe timp de zi, cât şi pe timp de noapte, de cei cărora li se adresează şi trebuie să fie în deplină concordanţă între ele, precum şi într-o stare tehnică de funcţionare corespunzătoare.</li>
                                <li>Semnalele luminoase pentru dirijarea circulaţiei în intersecţii au următoarele semnificaţii:</li>
                                <ol class="tip_a">
                                    <li>semnalul de culoare verde permite trecerea;</li>
                                    <li>semnalul de culoare roşie interzice trecerea;</li>
                                    <li>semnalul de culoare galbenă împreună cu cel de culoare roşie interzic trecerea.</li>
                                </ol>
                                <li>Mijloacele de semnalizare rutieră, precum şi alte dispozitive speciale de acest fel se asigură, se instalează şi se întreţin prin grija administratorului drumului public respectiv ori al căii ferate, după caz. Instalarea mijloacelor de semnalizare rutieră şi a dispozitivelor speciale se execută numai cu avizul prealabil al poliţiei rutiere.</li>
                                <li>Mijloacele de semnalizare şi presemnalizare a intersecţiilor dintre două drumuri de categorii diferite se asigură, se instalează şi se întreţin de către administratorul fiecărui drum, cu respectarea modului de reglementare a circulaţiei stabilit în nodul rutier respectiv.</li>
                                <li>Mijloacele de semnalizare rutieră pot fi însoţite şi de dispozitive speciale de avertizare.</li>
                                <li>Se interzic:</li>
                                <ol>
                                    <li>amplasarea, în zona drumului public, de construcţii, panouri sau dispozitive ce pot fi confundate cu indicatoarele sau cu instalaţiile ce servesc la semnalizarea rutieră ori realizarea de amenajări sau alte obstacole care sunt de natură să limiteze vizibilitatea ori eficacitatea acestora, să stânjenească participanţii la trafic sau să le distragă atenţia, punând în pericol siguranţa circulaţiei;</li>
                                    <li>lipirea de afişe, inscripţii sau înscrisuri pe indicatoarele ori dispozitivele ce servesc la semnalizarea rutieră, inclusiv pe suporturile acestora.</li>
                                </ol>
                            </ol>
                            
                            <h3>Art. 31</h3>
                            <p>Participanţii la trafic trebuie să respecte regulile de circulaţie, semnalele, indicaţiile şi dispoziţiile poliţistului rutier, precum şi semnificaţia diferitelor tipuri de mijloace de semnalizare rutieră, în următoarea ordine de prioritate:</p>
                            <ol class="tip_a">
                                <li>semnalele, indicaţiile şi dispoziţiile poliţistului rutier;</li>
                                <li>semnalele speciale de avertizare, luminoase sau sonore ale autovehiculelor, prevăzute la art.32 alin.2 lit.a) şi b);</li>
                                <li>semnalizarea temporară care modifică regimul normal de desfăşurare a circulaţiei;</li>
                                <li>semnalele luminoase sau sonore;</li>
                                <li>indicatoarele;</li>
                                <li>marcajele;</li>
                                <li>regulile de circulaţie.</li>
                            </ol>

                            <h3>Art. 32</h3>
                            <ol>
                                <li>Semnalele speciale de avertizare luminoase sunt emise intermitent de dispozitivele de iluminare montate pe autovehicule şi au următoarele semnificaţii:</li>
                                <ol class="tip_a">
                                    <li>lumina roşie obligă participanţii la trafic să oprească în direcţia de mers cât mai aproape de marginea drumului;</li>
                                    <li>lumina albastră obligă participanţii la trafic să acorde prioritate de trecere;</li>
                                    <li>lumina galbenă obligă participanţii la trafic să circule cu atenţie.</li>
                                </ol>
                                <li>Sunt autorizate să utilizeze semnale speciale de avertizare luminoase:</li>
                                <ol class="tip_a">
                                    <li>pentru lumina roşie - autovehiculele aparţinând poliţiei şi pompierilor;</li>
                                    <li>pentru lumina albastră - autovehiculele aparţinând poliţiei, jandarmeriei, poliţiei de frontieră, Agenţiei Naţionale de Administrare Fiscală, serviciului de ambulanţă sau medicină legală, protecţiei civile, Ministerului Apărării Naţionale, unităţilor speciale ale Serviciului Român de Informaţii şi ale Serviciului de Protecţie şi Pază, Administraţiei Naţionale a Penitenciarelor din cadrul Ministerului Justiţiei, precum şi autovehiculele de serviciu ale procurorilor din Ministerul Public, atunci când se deplasează în acţiuni de intervenţie sau în misiuni care au caracter de urgenţă;</li>
                                    <li>pentru lumina galbenă - autovehiculele cu mase şi/sau dimensiuni de gabarit depăşite ori care însoţesc asemenea vehicule, cele care transportă anumite mărfuri sau substanţe periculoase, cele destinate întreţinerii, reparării ori verificării unor lucrări efectuate în partea carosabilă sau executării unor lucrări de drumuri, curăţeniei străzilor, deszăpezirii sau tractării, transportului şi depanării autovehiculelor rămase în pană sau avariate, precum şi tractoarele agricole sau forestiere care tractează utilajele agricole si tehnologice cu dimensiuni de gabarit depăşite.</li>
                                </ol>
                                <li>Autovehiculele prevăzute la alin.2 lit. a) şi b) trebuie să fie echipate şi cu mijloace speciale sonore de avertizare.</li>
                                <li>Pe autovehiculele aparţinând poliţiei şi pe cele prevăzute la alin.2 lit. c) pot fi instalate şi dispozitive luminoase cu mesaje variabile, destinate participanţilor la trafic.</li>
                                <p>4<sup>1</sup>. Pe autovehiculele Agenţiei Naţionale de Administrare Fiscală, inscripţionate vizibil cu denumirea şi sigla instituţiei din care fac parte, pot fi instalate dispozitive luminoase cu mesaje variabile, de care se poate face uz pentru oprirea în trafic a autovehiculelor în scopul exercitării atribuţiilor de control specifice, potrivit legii.</p>
                                <li>Mijloacele speciale de avertizare, luminoase sau sonore, se certifică sau se omologhează de autoritatea competentă, potrivit legii. Condiţiile de utilizare a acestora se stabilesc prin regulament.</li>
                            </ol>

                            <h3>Art. 33</h3>
                            <ol>
                                <li>Semnalizarea şi amenajările rutiere necesare pe drumurile publice se asigură de către administratorul drumului respectiv şi se efectuează numai cu avizul poliţiei rutiere.</li>
                                <li>Semnalizarea lucrărilor care se execută pe drumurile publice este obligatorie şi se efectuează de către executantul lucrărilor, cu avizul poliţiei rutiere, astfel încât aceasta să asigure deplasarea în siguranţă a tuturor participanţilor la trafic, conform reglementărilor în vigoare.</li>
                                <li>Semnalizarea şi amenajările rutiere se definesc şi se realizează în condiţiile stabilite prin regulament, în conformitate cu reglementările tehnice în vigoare.</li>
                            </ol>

                            <h3>Art. 34</h3>
                            <p>Condiţiile de circulaţie pe viaducte şi în tunele, precum şi semnalizarea acestora se stabilesc prin regulament, în conformitate cu reglementările tehnice în vigoare.</p>
                      
                            <form method="post" action="capitolTerminat.php">
                                <input class="buton-verif" type="submit" name="progres-semnalizare" value="Finalizeaza capitol" onclick="showImage(4)">  
                            </form>
                            </span>

                            <span id="pg5">

                                <div class="titlu-partea-dreapta">
                                    <h1>REGULI DE CIRCULATIE</h1>
                                </div>
                                
                                <h3>Sectiunea 1. Obligatiile participantilor la trafic</h3>
                                <h3>Art. 35</h3>
                                <ol>
                                    <li>Participanţii la trafic trebuie să aibă un comportament care să nu afecteze fluenţa şi siguranţa circulaţiei, să nu pună în pericol viaţa sau integritatea corporală a persoanelor şi să nu aducă prejudicii proprietăţii publice ori private.</li>
                                    <li>Participanţii la trafic sunt obligaţi ca, la cererea poliţistului rutier, să înmâneze acestuia documentul de identitate sau, după caz, permisul de conducere, documentul de înmatriculare ori de înregistrare a vehiculului condus, documentele referitoare la bunurile transportate, precum şi alte documente prevăzute de lege.</li>
                                    <li>În exercitarea atribuţiilor care îi revin, poliţistul rutier are dreptul să verifice vehiculul, precum şi identitatea conducătorului sau a pasagerilor aflaţi în interiorul acestuia atunci când există indicii despre săvârşirea unei fapte de natură contravenţională sau penală.</li>
                                    <li>În exercitarea atribuţiilor de dirijare a circulaţiei rutiere, poliţiştii rutieri sunt obligaţi să poarte uniformă cu înscrisuri şi însemne distinctive.</li>
                                    <p>4<sup>1</sup>. Funcţionarii din cadrul Agenţiei Naţionale de Administrare Fiscală, care în scopul exercitării atribuţiilor de control specifice efectuează semnale de oprire pentru conducătorii autovehiculelor, sunt obligaţi să poarte uniformă cu înscrisuri şi însemne distinctive şi mijloace de protecţie fluorescent-reflectorizante pe fond de culoare roşie, stabilite prin hotărâre a Guvernului.</p>
                                    <li>Poliţiştii de frontieră, îndrumătorii de circulaţie ai Ministerului Apărării, agenţii căilor ferate, personalul autorizat din zona lucrărilor pe drumurile publice, precum şi membrii patrulelor şcolare de circulaţie sunt obligaţi ca, pe timpul exercitării atribuţiilor, să poarte echipament de protecţie-avertizare fluorescent-reflectorizant.</li>
                                    <li>Conducătorii autovehiculelor şi tractoarelor agricole sau forestiere cu masa maximă autorizată mai mare de 3,5 tone sunt obligaţi să poarte echipament de protecţie-avertizare fluorescent-reflectorizant atunci când execută intervenţii la vehiculul care se află pe partea carosabilă a drumului public.</li>
                                    <li>Nevăzătorii sunt obligaţi să poarte în deplasarea pe drumurile publice baston de culoare albă.</li>
                                </ol>

                                <h3>Art. 36</h3>
                                <ol>
                                    <li>Conducătorii de autovehicule şi tractoare agricole sau forestiere şi persoanele care ocupă locuri prevăzute prin construcţie cu centuri sau dispozitive de siguranţă omologate trebuie să le poarte în timpul circulaţiei pe drumurile publice, cu excepţia cazurilor prevăzute în regulament.</li>
                                    <p>1<sup>1</sup>.  Conducătorii de autovehicule având locuri prevăzute prin construcţie cu centuri de siguranţă trebuie să informeze pasagerii cu privire la obligaţia legală de a le purta în timpul circulaţiei pe drumurile publice.</p>
                                    <p>1<sup>2</sup>.  Conducătorii de autovehicule având locuri prevăzute prin construcţie cu centuri de siguranţă au obligaţia să se asigure că, pe timpul conducerii vehiculului, minorii poartă centurile de siguranţă sau sunt transportaţi numai în dispozitive de fixare în scaune pentru copii omologate, în condiţiile prevăzute de regulament.</p>
                                    <p>1<sup>3</sup>. Conducătorilor de autovehicule le este interzis să transporte copii în vârstă de până la 3 ani în autovehicule care nu sunt echipate cu sisteme de siguranţă, cu excepţia celor destinate transportului public de persoane, precum şi a taxiurilor dacă în acestea din urmă ocupă orice alt loc decât cel de pe scaunul din faţă, în condiţiile prevăzute în regulament. Copiii cu vârsta de peste 3 ani, având o înălţime de până la 150 cm, pot fi transportaţi în autovehicule care nu sunt echipate cu sisteme de siguranţă doar dacă ocupă, pe timpul transportului, orice alt loc decât cel de pe scaunul din faţă.</p>
                                    <li>Pe timpul deplasării pe drumurile publice, conducătorii motocicletelor, mopedelor şi persoanele transportate pe acestea au obligaţia să poarte cască de protecţie omologată.</li>
                                    <li>Conducătorilor de vehicule le este interzisă folosirea telefoanelor mobile atunci când aceştia se află în timpul mersului, cu excepţia celor prevăzute cu dispozitive tip "mâini libere".</li>
                                </ol>

                                <h3>Art. 37</h3>
                                <ol>
                                    <li>Conducătorii de vehicule sunt obligaţi să oprească imediat, pe acostament sau, în lipsa acestuia, cât mai aproape de marginea drumului sau bordura trotuarului, în sensul de deplasare, la apropierea şi la trecerea autovehiculelor cu regim de circulaţie prioritară care au în funcţiune mijloacele speciale de avertizare luminoasă de culoare roşie şi sonore.</li>
                                    <li>Conducătorii de vehicule sunt obligaţi să reducă viteza, să circule cât mai aproape de marginea drumului în sensul de deplasare şi să acorde prioritate la trecerea autovehiculelor cu regim de circulaţie prioritară care au în funcţiune mijloacele speciale de avertizare luminoasă de culoare albastră şi sonore.</li>
                                    <li>În situaţiile prevăzute la alin. (1) şi (2), pietonilor le sunt interzise traversarea şi circulaţia pe carosabil până la trecerea vehiculelor respective.</li>
                                </ol>

                                <h3>Art. 38</h3>
                                <p>Conducătorii vehiculelor, cu excepţia celor trase sau împinse cu mâna, instructorii auto atestaţi să efectueze instruirea practică a persoanelor pentru obţinerea permisului de conducere, precum şi examinatorul autorităţii competente, în timpul desfăşurării probelor practice ale examenului pentru obţinerea permisului de conducere, sunt obligaţi să se supună testării aerului expirat şi/sau recoltării probelor biologice în vederea stabilirii alcoolemiei ori a consumului de substanţe psihoactive, la solicitarea poliţistului rutier.</p>

                                <h3>Art. 39</h3>
                                <p>Proprietarul sau deţinătorul mandatat al unui vehicul este obligat să comunice poliţiei rutiere, la cererea acesteia şi în termenul solicitat, identitatea persoanei căreia i-a încredinţat vehiculul pentru a fi condus pe drumurile publice.</p>

                                <h3>Art. 40</h3>
                                <p>Regulile de circulaţie pe drumurile publice aplicabile autovehiculelor şi tractoarelor agricole sau forestiere destinate transporturilor de mărfuri, celor cu mase sau cu dimensiuni de gabarit depăşite ori care transportă mărfuri sau produse periculoase se stabilesc prin regulament, în conformitate cu reglementările în vigoare.</p>

                                <h3>Sectiunea 2. Reguli pentru circulatia vehiculelor</h3>
                                <h3>1. Pozitii in timpul mersului si circulatia pe benzi</h3>
                                <h3>Art. 41</h3>
                                <ol>
                                    <li>Vehiculele şi animalele, atunci când circulă pe drumurile publice pe care le este permis accesul, trebuie conduse pe partea din dreapta a drumului public, în sensul de circulaţie, cât mai aproape de marginea părţii carosabile, cu respectarea semnificaţiei semnalizării rutiere şi a regulilor de circulaţie.</li>
                                    <li>Numerotarea benzilor de circulaţie pe fiecare sens se efectuează în ordine crescătoare de la marginea din partea dreaptă a drumului către axa acestuia. În cazul autostrăzilor, banda de urgenţă nu intră în numerotarea benzilor de circulaţie.</li>
                                    <li>Dacă un drum este prevăzut cu o pistă specială destinată circulaţiei bicicletelor, acestea vor fi conduse numai pe pista respectivă.</li>
                                </ol>

                                <h3>Art. 42</h3>
                                <p>Când circulaţia se desfăşoară pe două sau mai multe benzi pe sens, acestea se folosesc de către conducătorii de vehicule în funcţie de intensitatea traficului şi viteza de deplasare, având obligaţia să revină pe prima bandă ori de câte ori acest lucru este posibil, dacă aceasta nu este destinată vehiculelor lente sau transportului public de persoane.</p>

                                <h3>Art. 43</h3>
                                <ol>
                                    <li>Dacă un drum este prevăzut cu o bandă destinată vehiculelor lente sau transportului public de persoane, semnalizată ca atare, acestea vor circula numai pe banda respectivă.</li>
                                    <li>Conducătorul de vehicul care circulă pe banda situată lângă marginea părţii carosabile trebuie să acorde prioritate de trecere vehiculelor care efectuează transport public de persoane numai atunci când conducătorii acestora semnalizează intenţia de a reintra în trafic din staţiile prevăzute cu alveole şi s-au asigurat că prin manevra lor nu pun în pericol siguranţa celorlalţi participanţi la trafic.</li>
                                </ol>

                                <h3>2. Mijloacele de avertizare folosite de conducatorii de vehicule</h3>
                                <h3>Art. 44</h3>
                                <ol>
                                    <li>In circulaţia pe drumurile publice conducătorii de vehicule pot folosi, în condiţiile prevăzute de regulament, mijloacele de avertizare sonoră şi luminoasă aflate în dotare şi omologate.</li>
                                    <li>În circulaţia pe autostrăzi, pe drumurile expres şi pe cele naţionale europene (E) conducătorii de autovehicule şi tractoare agricole sau forestiere sunt obligaţi să folosească şi în timpul zilei luminile de întâlnire.</li>
                                    <li>Conducătorii motocicletelor şi mopedelor sunt obligaţi să folosească luminile de întâlnire pe toată durata deplasării acestora pe drumurile publice.</li>
                                    <li>În circulaţia pe drumurile publice se interzice deţinerea la vedere, montarea şi folosirea mijloacelor speciale de avertizare sonoră şi luminoasă pe şi în alte autovehicule decât cele prevăzute la art. 32 alin. (2), precum şi deţinerea, montarea sau folosirea pe autovehicule a sistemelor care perturbă buna funcţionare a dispozitivelor de supraveghere a traficului.</li>
                                    <li>Conducătorii de autovehicule pot fi avertizaţi de poliţia rutieră în legătură cu prezenţa în trafic a dispozitivelor de măsurare a vitezei, prin mass-media sau panouri de avertizare. Conducătorii de autovehicule pot folosi mijloace proprii de detectare a dispozitivelor de măsurare a vitezei.</li>
                                </ol>

                                <h3>3. Depasirea</h3>
                                <h3>Art. 45</h3>
                                <ol>
                                    <li>Depăşirea este manevra prin care un vehicul trece înaintea altui vehicul ori pe lângă un obstacol, aflat pe acelaşi sens de circulaţie, prin schimbarea direcţiei de mers şi ieşirea de pe banda de circulaţie sau din şirul de vehicule în care s-a aflat iniţial.</li>
                                    <li>Conducătorul vehiculului care se angajează în depăşire trebuie să se asigure că vehiculul care circulă în faţa sau în spatele lui nu a iniţiat o asemenea manevră.</li>
                                    <li>Atunci când prin manevra de depăşire se trece peste axa care separă sensurile de circulaţie, conducătorii de vehicule trebuie să se asigure că din sens opus nu se apropie un vehicul şi că dispun de spaţiu suficient pentru a reintra pe banda iniţială, unde au obligaţia să revină după efectuarea manevrei de depăşire.</li>
                                    <li>Nu constituie depăşire, în sensul alin. (1), situaţia în care un vehicul circulă mai repede pe una dintre benzi decât vehiculele care circulă pe altă bandă în acelaşi sens de circulaţie.</li>
                                    <li>Depăşirea se efectuează numai pe partea stângă a vehiculului depăşit. Tramvaiul sau vehiculul al cărui conducător a semnalizat intenţia şi s-a încadrat corespunzător părăsirii sensului de mers spre stânga se depăşeşte prin partea dreaptă.</li>
                                    <li>Tramvaiul aflat în mers poate fi depăşit şi pe partea stângă atunci când drumul este cu sens unic sau când între şina din dreapta şi marginea trotuarului nu există spaţiu suficient.</li>
                                </ol>

                                <h3>Art. 46</h3>
                                <p>Obligaţiile conducătorilor vehiculelor care efectuează depăşirea şi ale conducătorilor vehiculelor care sunt depăşite, precum şi cazurile în care depăşirea este interzisă se stabilesc prin regulament.</p>

                                <h3>4. Trecerea pe langa vehiculele care circula din sens opus</h3>
                                <h3>Art. 47</h3>
                                <p>Conducătorii vehiculelor care circulă din sensuri opuse trebuie să păstreze între vehicule o distanţă laterală suficientă şi să circule cât mai aproape de marginea din dreapta a benzii de circulaţie respective.</p>

                                <h3>5. Viteza si distanta dintre vehicule</h3>
                                <h3>Art. 48</h3>
                                <p>Conducătorul de vehicul trebuie să respecte regimul legal de viteză şi să o adapteze în funcţie de condiţiile de drum, astfel încât să poată efectua orice manevră în condiţii de siguranţă.</p>
                                
                                <h3>Art. 49</h3>
                                <ol>
                                    <li>Limita maximă de viteză în localităţi este de 50 km/h.</li>
                                    <li>Pe anumite sectoare de drum din interiorul localităţilor, administratorul drumului poate stabili, pentru autovehiculele din categoriile A şi B, şi limite de viteză superioare, dar nu mai mult de 80 km/h. Limitele de viteză mai mari de 50 km/h se stabilesc numai cu avizul poliţiei rutiere.</li>
                                    <li>Pe anumite sectoare de drum, ţinând seama de împrejurări şi de intensitatea circulaţiei, administratorul drumului, cu avizul poliţiei rutiere, poate stabili şi limite de viteză inferioare, dar nu mai puţin de 10 km/h pentru tramvaie şi de 30 km/h pentru toate autovehiculele.</li>
                                    <li>Limitele maxime de viteză în afara localităţilor sunt:</li>
                                    <ol class="tip_a">
                                        <li>pe autostrăzi - 130 km/h;</li>
                                        <li>pe drumurile expres sau pe cele naţionale europene (E) - 100 km/h;</li>
                                        <li>pe celelalte categorii de drumuri - 90 km/h.</li>
                                    </ol>
                                </ol>

                                <h3>Art. 50</h3>
                                <ol>
                                    <li>Vitezele maxime admise în afara localităţilor pentru categoriile şi subcategoriile de autovehicule prevăzute la art. 15 alin. (2) sunt următoarele:</li>
                                    <ol>
                                        <li>130 km/h pe autostrăzi, 100 km/h pe drumurile expres sau pe cele naţionale europene (E) şi 90 km/h pe celelalte categorii de drumuri, pentru autovehiculele din categoriile A şi B;</li>
                                        <li>110 km/h pe autostrăzi, 90 km/h pe drumurile expres sau pe cele naţionale europene (E) şi 80 km/h pe celelalte categorii de drumuri, pentru autovehiculele din categoriile C, D şi subcategoria D1;</li>
                                        <li>90 km/h pe autostrăzi, 80 km/h pe drumurile expres sau pe cele naţionale europene (E) şi 70 km/h pentru celelalte categorii de drumuri, pentru autovehiculele din subcategoriile A1, B1 şi C1;</li>
                                        <li>45 km/h, pentru tractoare agricole sau forestiere şi mopede.</li>
                                    </ol>
                                    <li>Viteza maximă admisă în afara localităţilor pentru autovehiculele care tractează remorci sau semiremorci este cu 10 km/h mai mică decât viteza maximă admisă pentru categoria din care face parte autovehiculul trăgător.</li>
                                    <li>Viteza maximă admisă pentru autovehicule cu mase şi/sau gabarite depăşite ori care transportă produse periculoase este de 40 km/h în localităţi, iar în afara localităţilor de 70 km/h.</li>
                                    <li>Viteza maximă admisă în afara localităţilor pentru autovehiculele ai căror conducători au mai puţin de un an practică de conducere sau pentru persoanele care efectuează pregătirea practică în vederea obţinerii permisului de conducere este cu 20 km/h mai mică decât viteza maximă admisă pentru categoria din care fac parte autovehiculele conduse.</li>
                                </ol>
                                
                                <h3>Art. 51</h3>
                                <p>Conducătorul unui vehicul care circulă în spatele altuia are obligaţia de a păstra o distanţă suficientă faţă de acesta, pentru evitarea coliziunii.</p>

                                <h3>Art. 52</h3>
                                <ol>
                                    <li>Este interzisă desfăşurarea de concursuri, antrenamente ori întreceri pe drumurile publice, cu excepţia celor autorizate de administratorul drumului respectiv şi avizate de poliţia rutieră.</li>
                                    <li>Organizatorii concursurilor, antrenamentelor ori întrecerilor autorizate sunt obligaţi să ia toate măsurile necesare pentru desfăşurarea în siguranţă a acestora, precum şi pentru protecţia celorlalţi participanţi la trafic.</li>
                                    <li>În caz de producere a unui eveniment rutier, ca urmare a neîndeplinirii atribuţiilor prevăzute la alin. (2), organizatorii acestora răspund administrativ, contravenţional, civil sau penal, după caz.</li>
                                </ol>

                                <h3>Art. 53</h3>
                                <p>Autorităţile publice locale, cu autorizaţia administratorului drumului public şi cu avizul poliţiei rutiere sau la solicitarea acesteia, sunt obligate să ia măsuri pentru realizarea de amenajări rutiere destinate circulaţiei pietonilor, bicicliştilor, vehiculelor cu tracţiune animală şi calmării traficului, semnalizate corespunzător, în apropierea unităţilor de învăţământ, pieţelor, târgurilor, spitalelor, precum şi în zonele cu risc sporit de accidente.</p>

                                <h3>6.  Reguli referitoare la manevre</h3>
                                <h3>Art. 54</h3>
                                <ol>
                                    <li>Conducătorul de vehicul care execută o manevră de schimbare a direcţiei de mers, de ieşire dintr-un rând de vehicule staţionate sau de intrare într-un asemenea rând, de trecere pe o altă bandă de circulaţie sau de virare spre dreapta ori spre stânga sau care urmează să efectueze o întoarcere ori să meargă cu spatele este obligat să semnalizeze din timp şi să se asigure că o poate face fără să perturbe circulaţia sau să pună în pericol siguranţa celorlalţi participanţi la trafic.</li>
                                    <li>Semnalizarea schimbării direcţiei de mers trebuie să fie menţinută pe întreaga durată a manevrei.</li>
                                </ol>

                                <h3>7.  Intersectii si obligatia de a ceda trecerea</h3>
                                <h3>Art. 55</h3>
                                <p>Intersecţiile sunt:</p>
                                <ol class="tip_a">
                                    <li>cu circulaţie nedirijată;</li>
                                    <li>cu circulaţie dirijată. În această categorie sunt incluse şi intersecţiile în care circulaţia se desfăşoară în sens giratoriu.</li>
                                </ol>

                                <h3>Art. 56</h3>
                                <p>La apropierea de o intersecţie conducătorul de vehicul trebuie să circule cu o viteză care să îi permită oprirea, pentru a acorda prioritate de trecere participanţilor la trafic care au acest drept.</p>

                                <h3>Art. 57</h3>
                                <ol>
                                    <li>La intersecţiile cu circulaţie nedirijată, conducătorul de vehicul este obligat să cedeze trecerea vehiculelor care vin din partea dreaptă, în condiţiile stabilite prin regulament.</li>
                                    <li>La intersecţiile cu circulaţie dirijată, conducătorul de vehicul este obligat să respecte semnificaţia indicatoarelor, culoarea semaforului sau indicaţiile ori semnalele poliţistului rutier.</li>
                                    <li>Pătrunderea unui vehicul într-o intersecţie este interzisă dacă prin aceasta se produce blocarea intersecţiei.</li>
                                    <li>În intersecţiile cu sens giratoriu, semnalizate ca atare, vehiculele care circulă în interiorul acestora au prioritate faţă de cele care urmează să pătrundă în intersecţie.</li>
                                </ol>

                                <h3>Art. 58</h3>
                                <p>În cazul vehiculelor care pătrund într-o intersecţie dintre un drum închis circulaţiei publice şi un drum public, au prioritate acele vehicule care circulă pe drumul public.</p>
                                    
                                <h3>Art. 59</h3>
                                <ol>
                                    <li>În intersecţiile cu circulaţie nedirijată, conducătorul de vehicul este obligat să acorde prioritate de trecere vehiculelor care circulă pe şine. Acestea pierd prioritatea de trecere când efectuează virajul spre stânga sau când semnalizarea rutieră din acea zonă stabileşte o altă regulă de circulaţie.</li>
                                    <li>În intersecţii, conducătorii vehiculelor care virează spre stânga sunt obligaţi să acorde prioritate de trecere vehiculelor cu care se intersectează şi care circulă din partea dreaptă.</li>
                                    <li>În intersecţiile cu circulaţie dirijată prin indicatoare de prioritate, regula priorităţii de dreapta se respectă numai în cazul în care două vehicule urmează să se întâlnească, fiecare intrând în intersecţie de pe un drum semnalizat cu un indicator având aceeaşi semnificaţie de prioritate sau de pierdere a priorităţii.</li>
                                    <li>Când un semafor cu trei culori are o lumină verde intermitentă suplimentară, montată la acelaşi nivel cu lumina verde normală a semaforului, sub forma unei săgeţi verzi pe fond negru, cu vârful spre dreapta, aprinderea acesteia semnifică permisiunea pentru vehicule de a-şi continua drumul în direcţia indicată de săgeată, indiferent de culoarea semaforului electric, cu condiţia acordării priorităţii de trecere vehiculelor şi pietonilor care au drept de circulaţie.</li>
                                </ol>																										
                                
                                <h3>8. Trecerea la nivel cu calea ferata</h3>
                                <h3>Art. 60</h3>
                                <ol>
                                    <li>Participanţii la trafic trebuie să dea dovadă de prudenţă sporită la apropierea şi traversarea liniilor de cale ferată curentă sau industrială, după caz.</li>
                                    <li>La trecerea la nivel cu o cale ferată curentă, prevăzută cu bariere sau semibariere, conducătorii de vehicule sunt obligaţi să oprească în dreptul indicatorului ce obligă la oprire, dacă acestea sunt în curs de coborâre ori în poziţie orizontală şi/sau semnalele sonore şi luminoase care anunţă apropierea trenului sunt în funcţiune.</li>
                                    <li>La trecerea la nivel cu o cale ferată industrială, semnalizată corespunzător, conducătorii de vehicule sunt obligaţi să se conformeze semnificaţiei semnalelor agentului de cale ferată.</li>
                                </ol>																										
                                
                                <h3>9. Autovehicule cu regim de circulatie prioritara</h3>
                                <h3>Art. 61</h3>
                                <ol>
                                    <li>Au regim de circulaţie prioritară numai autovehiculele prevăzute la art. 32 alin. (2) lit. a) şi b), atunci când se deplasează în acţiuni de intervenţie sau în misiuni care au caracter de urgenţă. Pentru a avea prioritate de trecere, aceste autovehicule trebuie să aibă în funcţiune semnalele luminoase şi sonore.</li>
                                    <li>Conducătorii autovehiculelor aparţinând instituţiilor prevăzute la art. 32 alin. (2) lit. a) şi b) pot încălca regimul legal de viteză sau alte reguli de circulaţie, cu excepţia celor care reglementează trecerea la nivel cu calea ferată, atunci când se deplasează în acţiuni de intervenţie sau în misiuni care au caracter de urgenţă.</li>
                                    <li>Când pe drumul public circulaţia este dirijată de un poliţist rutier, conducătorii autovehiculelor prevăzute la alin. (1) trebuie să respecte semnalele, indicaţiile şi dispoziţiile acestuia.</li>
                                </ol>

                                <h3>Art. 62</h3>
                                <ol>
                                    <li>La intrarea în intersecţiile unde lumina roşie a semaforului este în funcţiune ori indicatoarele obligă la acordarea priorităţii de trecere, conducătorii autovehiculelor prevăzute la art. 61 alin. (1) trebuie să reducă viteza şi să circule cu atenţie sporită pentru evitarea producerii unor accidente de circulaţie, în caz contrar urmând să răspundă potrivit legii.</li>
                                    <li>Când două autovehicule cu regim de circulaţie prioritară, care se deplasează în misiune având semnalele luminoase şi sonore în funcţiune, se apropie de o intersecţie, venind din direcţii diferite, vehiculul care circulă din partea dreaptă are prioritate.</li>
                                </ol>	
                                
                                <h3>10. Oprirea, stationarea si parcarea</h3>
                                <h3>Art. 63</h3>
                                <ol>
                                    <li>Se consideră oprire imobilizarea voluntară a unui vehicul pe drumul public, pe o durată de cel mult 5 minute. Peste această durată, imobilizarea se consideră staţionare.</li>
                                    <li>Nu se consideră oprire:</li>
                                    <ol class="tip_a">
                                        <li>imobilizarea vehiculului atât timp cât este necesară pentru îmbarcarea sau debarcarea unor persoane, dacă prin această manevră nu a fost perturbată circulaţia pe drumul public respectiv;</li>
                                        <li>imobilizarea autovehiculului având o masă totală maximă autorizată de până la 3,5 tone, atât timp cât este necesar pentru operaţiunea de distribuire a mărfurilor alimentare la unităţile comerciale.</li>
                                    </ol>
                                    <li>Pentru autovehiculele care transportă mărfuri, altele decât cele prevăzute la alin. (2) lit. b), administratorul drumului public împreună cu autorităţile administraţiei publice locale, cu avizul poliţiei rutiere, vor stabili programe sau intervale orare pe timpul nopţii, în care oprirea sau staţionarea este permisă pentru distribuirea mărfurilor.</li>
                                    <li>Se consideră parcare staţionarea vehiculelor în spaţii special amenajate sau stabilite şi semnalizate corespunzător.</li>
                                    <li>Vehiculul oprit sau staţionat pe partea carosabilă trebuie aşezat lângă şi în paralel cu marginea acesteia, pe un singur rând, dacă printr-un alt mijloc de semnalizare nu se dispune altfel. Motocicletele fără ataş, mopedele şi bicicletele pot fi oprite sau staţionate şi câte două, una lângă alta.</li>
                                </ol>
                                
                                <h3>Art. 64</h3>
                                <ol>
                                    <li>Poliţia rutieră poate dispune ridicarea vehiculelor staţionate neregulamentar pe partea carosabilă. Ridicarea şi depozitarea vehiculelor în locuri special amenajate se realizează de către administraţiile publice locale sau de către administratorul drumului public, după caz.</li>
                                    <li>Contravaloarea cheltuielilor pentru ridicarea, transportul şi depozitarea vehiculului staţionat neregulamentar se suportă de către deţinătorul acestuia.</li><li>Ridicarea vehiculelor dispusă de poliţia rutieră în condiţiile prevăzute la alin. (1) se realizează potrivit procedurii stabilite prin regulament.</li>
                                </ol>
                                
                                <h3>Art. 65</h3>
                                <p>Cazurile şi condiţiile în care oprirea, staţionarea sau parcarea pe drumul public este permisă se stabilesc prin regulament, în conformitate cu prevederile prezentei ordonanţe de urgenţă.</p>	
                                
                                <h3>11. Circulatia vehiculelor destinate transportului de marfuri sau transportului public de persoane</h3>
                                <h3>Art. 66</h3>
                                <ol>
                                    <li>Atestatul profesional este obligatoriu pentru conducătorul autovehiculului care efectuează transport de mărfuri periculoase, transport public de persoane, transport în cont propriu de persoane cu microbuze şi autobuze, transporturi agabaritice, precum şi pentru autovehiculele de transport marfă cu masa maximă autorizată mai mare de 3,5 tone, care circulă în trafic intern şi internaţional.</li>
                                    <li>Prevederile alin. (1) nu se aplică conducătorilor de autovehicule aparţinând Ministerului Afacerilor Interne, Ministerului Apărării Naţionale, Serviciului Român de Informaţii, Serviciului de Protecţie şi Pază şi Administraţiei Naţionale a Penitenciarelor.</li>
                                    <li>Condiţiile de obţinere a certificatului de atestare profesională se aprobă prin ordin al ministrului transporturilor, construcţiilor şi turismului, în conformitate cu prevederile legale în vigoare.</li>
                                    <li>Certificatul de atestare profesională care conferă titularului dreptul de a efectua activitatea pentru care a fost eliberat este valabil numai însoţit de permisul de conducere corespunzător categoriei din care face parte vehiculul condus.</li>
                                 </ol>
                                
                                <h3>Art. 67</h3>
                                <p>Se interzice transportul pe drumurile publice al mărfurilor şi produselor periculoase în vehicule care nu au dotările şi echipamentele necesare sau care nu îndeplinesc condiţiile tehnice şi de agreere prevăzute în Acordul european referitor la transportul rutier internaţional al mărfurilor periculoase (A.D.R.), încheiat la Geneva la 30 septembrie 1957, la care România a aderat prin Legea nr. 31/1994, ori pentru care conducătorul vehiculului nu deţine certificat A.D.R. corespunzător.</p>
                                
                                <h3>Art. 68</h3>
                                <ol>
                                    <li>Autovehiculul care transportă mărfuri sau produse periculoase poate circula pe drumurile publice numai în condiţiile prevăzute de reglementările în vigoare.</li>
                                    <li>Vehiculele care, prin construcţie sau datorită încărcăturii transportate, depăşesc masa şi/sau gabaritul prevăzute de normele legale pot circula pe drumul public numai pe traseele stabilite de administratorul drumului public sau, după caz, de autorităţile administraţiei publice locale, cu respectarea prevederilor legale în vigoare.</li>
                                </ol>
                                
                                <h3>Art. 69</h3>
                                <p>Autovehiculele cu mase şi/sau gabarite depăşite, cele care transportă mărfuri sau produse periculoase, precum şi cele de însoţire trebuie să aibă montate semnalele speciale de avertizare cu lumină galbenă, prevăzute la art. 32 alin. (1) lit. c), iar conducătorii acestora trebuie să le menţină în funcţiune pe toată perioada deplasării pe drumul public.</p>
                                
                                <h3>Sectiunea 3. Reguli pentru alti participanti la trafic</h3>
                                <h3>Art. 70</h3>
                                <ol>
                                    <li>Pentru a conduce un moped pe drumurile publice, conducătorul acestuia trebuie să aibă vârsta de cel puţin 16 ani.</li>
                                    <li>Pentru a conduce o bicicletă pe drumurile publice, conducătorul acesteia trebuie să aibă vârsta de cel puţin 14 ani.</li>
                                    <li>Bicicletele şi mopedele care circulă pe drumurile publice trebuie să fie echipate cu mijloace de iluminare şi dispozitive reflectorizant-fluorescente. Este interzisă circulaţia acestora pe timp de noapte fără aceste mijloace şi dispozitive în stare de funcţionare.</li>
                                </ol>

                                <h3>Art. 71</h3>
                                <ol>
                                    <li>Sunt interzise accesul şi deplasarea vehiculelor cu tracţiune animală, a maşinilor şi utilajelor autopropulsate utilizate în lucrări de construcţii, agricole şi forestiere, a animalelor de povară, de tracţiune sau de călărie, precum şi a animalelor izolate sau în turmă pe drumurile naţionale, în municipii şi pe drumurile la începutul cărora există indicatoare de interzicere a accesului.</li>
                                    <li>Autorităţile administraţiei publice locale au obligaţia să amenajeze, cu acordul administratorului drumului public şi avizul poliţiei rutiere, drumuri laterale, căi de acces către aceste drumuri, precum şi locuri de traversare a drumurilor publice destinate circulaţiei animalelor şi vehiculelor prevăzute la alin. (1), semnalizate corespunzător.</li>
                                    <li>Pentru a circula pe drumurile publice pe care accesul le este permis, animalele, vehiculele trase sau împinse cu mâna, animalele de povară, de tracţiune şi de călărie vor avea câte un conducător, iar vehiculele cu tracţiune animală vor fi echipate şi cu mijloace de iluminare şi dispozitive reflectorizant-fluorescente, în conformitate cu prevederile regulamentului.</li>
                                </ol>

                                <h3>Art. 72</h3>
                                <ol>
                                    <li>Pietonii sunt obligaţi să se deplaseze numai pe trotuar, iar în lipsa acestuia, pe acostamentul din partea stângă a drumului, în direcţia lor de mers. Când şi acostamentul lipseşte, pietonii sunt obligaţi să circule cât mai aproape de marginea din partea stângă a părţii carosabile, în direcţia lor de mers.</li>
                                    <li>Pietonii au prioritate de trecere faţă de conducătorii de vehicule numai atunci când sunt angajaţi în traversarea drumurilor publice prin locuri special amenajate, marcate şi semnalizate corespunzător, ori la culoarea verde a semaforului destinat pietonilor.</li>
                                    <li>Traversarea drumului public de către pietoni se face perpendicular pe axa acestuia, numai prin locurile special amenajate şi semnalizate corespunzător, iar în lipsa acestora, în localităţi, pe la colţul străzii, numai după ce s-au asigurat că o pot face fără pericol pentru ei şi pentru ceilalţi participanţi la trafic.</li>
                                    <li>Pietonii surprinşi şi accidentaţi ca urmare a traversării prin locuri nepermise, la culoarea roşie a semaforului destinat acestora, sau a nerespectării altor obligaţii stabilite de normele rutiere poartă întreaga răspundere a accidentării lor, în condiţiile în care conducătorul vehiculului respectiv a respectat prevederile legale privind circulaţia prin acel sector.</li>
                                    <li>Sunt asimilate pietonilor persoanele care conduc un scaun rulant de construcţie specială, cele care conduc vehicule destinate exclusiv tragerii sau împingerii cu mâna, precum şi cele care se deplasează pe patine sau dispozitive cu role.</li>
                                    <li>Se exceptează de la respectarea regulilor stabilite pentru pietoni poliţistul rutier şi persoanele care se află pe platforma drumului public şi sunt autorizate, în exercitarea atribuţiilor de serviciu, să îndrume sau să dirijeze circulaţia rutieră, în condiţiile stabilite prin regulament.</li>
                                    <li>Este interzisă ocuparea trotuarelor cu vehicule imobilizate, iar când aceasta este permisă, conform indicatoarelor sau marcajelor, lăţimea minimă a trotuarului lăsat la dispoziţia pietonilor trebuie să fie de cel puţin un metru.</li>
                                </ol>
                                
                                <h3>Art. 73</h3>
                                <p>Regulile privind circulaţia pe drumurile publice a bicicletelor, vehiculelor cu tracţiune animală, a conducătorilor de coloane militare, cortegii, grupuri organizate, precum şi de animale se stabilesc prin regulament.</p>
                                
                                <h3>Sectiunea 4. Circulatia pe autostrazi</h3>
                                <h3>Art. 74</h3>
                                <ol>
                                    <li>Pe autostrăzi este interzisă circulaţia pietonilor, a autovehiculelor cu gabarite sau mase depăşite, fără autorizaţie specială de transport eliberată de administratorul drumului public, conform reglementărilor în vigoare, a vehiculelor cu tracţiune animală, a animalelor, a vehiculelor trase sau împinse cu mâna, a bicicletelor şi mopedelor, a tractoarelor agricole sau forestiere şi a maşinilor autopropulsate pentru lucrări agricole, precum şi a vehiculelor care, prin construcţie sau din alte cauze, nu pot depăşi viteza de 50 km/h.</li>
                                    <li>De asemenea, pe autostrăzi sunt interzise învăţarea conducerii unui vehicul, încercările prototipurilor de şasiuri şi de autovehicule, manifestaţiile, defilările, caravanele publicitare, antrenamentele şi competiţiile sportive de orice fel, precum şi cortegiile.</li>
                                    <li>Se interzice circulaţia, oprirea sau staţionarea autovehiculelor pe banda de urgenţă, cu excepţia cazurilor justificate, precum şi a autovehiculelor cu regim de circulaţie prioritar.</li><li>Circulaţia autovehiculelor destinate transportului public de persoane sau de mărfuri se efectuează, de regulă, numai pe banda marginală din partea dreaptă a autostrăzii, în sensul de mers.</li>
                                </ol>

                                <h3>Sectiunea 5. Obligatii in caz de accident</h3>
                                <h3>Art. 75</h3>
                                <p>Accidentul de circulaţie este evenimentul care întruneşte cumulativ următoarele condiţii:</p>
                                <ol class="tip_a">
                                    <li>s-a produs pe un drum deschis circulaţiei publice ori şi-a avut originea într-un asemenea loc;</li>
                                    <li>a avut ca urmare decesul, rănirea uneia sau a mai multor persoane ori avarierea a cel puţin unui vehicul sau alte pagube materiale;</li>
                                    <li>în eveniment a fost implicat cel puţin un vehicul în mişcare;</li>
                                    <li>abrogat(ă);</li>
                                </ol>	

                                <h3>Art. 76</h3>																		
                                <ol>
                                    <li>Vehiculele înmatriculate sau înregistrate, cu excepţia celor cu tracţiune animală, care circulă pe drumurile publice, trebuie să aibă asigurare obligatorie pentru răspundere civilă în caz de pagube produse terţilor prin accidente de circulaţie, conform legii.</li>
                                    <li>Poliţia rutieră dispune măsura reţinerii certificatului de înmatriculare sau înregistrare şi retragerea plăcuţelor cu numărul de înmatriculare sau de înregistrare a vehiculelor neasigurate, aflate în trafic, eliberând dovadă fără drept de circulaţie.</li>
                                    <li>Dacă deţinătorul vehiculului nu face dovada asigurării acestuia, după 30 de zile de la data aplicării măsurii prevăzute la alin. (2), poliţia rutieră dispune radierea din evidenţă a vehiculului.</li>
                                </ol>
                                
                                <h3>Art. 77</h3>
                                <ol>
                                    <li>Conducătorul unui vehicul implicat într-un accident de circulaţie în urma căruia a rezultat moartea sau vătămarea integrităţii corporale ori a sănătăţii unei persoane este obligat să ia măsuri de anunţare imediată a poliţiei, să nu modifice sau să şteargă urmele accidentului şi să nu părăsească locul faptei.</li>
                                    <li>Orice persoană care este implicată sau are cunoştinţă de producerea unui accident de circulaţie în urma căruia a rezultat moartea sau vătămarea integrităţii corporale ori a sănătăţii uneia sau a mai multor persoane, precum şi în situaţia în care în eveniment este implicat un vehicul care transportă mărfuri periculoase este obligată să anunţe de îndată poliţia şi să apeleze numărul naţional unic pentru apeluri de urgenţă 112, existent în reţelele de telefonie din România.</li>
                                    <li>Este interzis oricărei persoane să schimbe poziţia vehiculului implicat într-un accident de circulaţie în urma căruia a rezultat moartea sau vătămarea integrităţii corporale ori a sănătăţii uneia sau a mai multor persoane, să modifice starea locului sau să şteargă urmele accidentului fără încuviinţarea poliţiei care cercetează accidentul.</li>
                                </ol>

                                <h3>Art. 78</h3>
                                <ol>
                                    <li>Conducătorului de autovehicul, tractor agricol sau forestier ori tramvai, instructorului auto atestat care se află în procesul de instruire practică a unei persoane pentru obţinerea permisului de conducere, precum şi examinatorului autorităţii competente în timpul desfăşurării probelor practice ale examenului pentru obţinerea permisului de conducere sau pentru oricare dintre categoriile ori subcategoriile acestuia, implicaţi într-un accident de circulaţie, le este interzis consumul de alcool sau de substanţe psihoactive după producerea evenimentului şi până la testarea concentraţiei alcoolului în aerul expirat sau recoltarea probelor biologice.</li>
                                    <li>În situaţia în care nu sunt respectate dispoziţiile alin. (1), se consideră că rezultatele testului sau ale analizei probelor biologice recoltate reflectă starea conducătorului, a instructorului auto sau a examinatorului respectiv în momentul producerii accidentului.</li>
                                </ol>

                                <h3>Art. 79</h3>
                                <ol>
                                    <li>Conducătorii de vehicule implicaţi într-un accident de circulaţie în urma căruia au rezultat numai avarierea vehiculelor şi/sau alte pagube materiale sunt obligaţi:</li>
                                    <ol>
                                        <li>să scoată imediat vehiculele în afara părţii carosabile ori, dacă starea vehiculelor nu permite acest lucru, să le deplaseze cât mai aproape de bordură sau acostament, semnalizându-le prezenţa;</li>
                                        <li>să se prezinte la unitatea de poliţie competentă pe raza căreia s-a produs accidentul în termen de cel mult 24 de ore de la producerea evenimentului pentru întocmirea documentelor de constatare.</li>
                                    </ol>
                                    <li>Se exceptează de la obligaţiile prevăzute la alin. (1) lit. b):</li>
                                    <ol>
                                        <li>conducătorii vehiculelor care încheie o constatare amiabilă de accident, în condiţiile legii;</li>
                                        <li>conducătorul de vehicul care deţine o asigurare facultativă de avarii auto, iar accidentul de circulaţie a avut ca rezultat numai avarierea propriului vehicul.</li>
                                    </ol>
                                </ol>

                                <h3>Art. 80</h3>
                                <ol>
                                    <li>Proprietarul, deţinătorul mandatat sau conducătorul auto al cărui autovehicul şi tractor agricol sau forestier, remorcă ori tramvai a fost avariat în alte împrejurări decât într-un accident de circulaţie este obligat să se prezinte în 24 de ore de la constatare la unitatea de poliţie pe raza căreia s-a produs evenimentul, pentru întocmirea documentelor de constatare.</li>
                                    <li>Persoanele prevăzute la alin. (1) sunt exceptate de la obligaţia prezentării la unitatea de poliţie dacă există o asigurare facultativă în baza căreia pot fi despăgubite pentru avarierea vehiculelor respective.</li>
                                </ol>
                                
                                <h3>Art. 80<sup>1</sup></h3>
                                <p>În situaţiile prevăzute la art. 79 şi 80, repararea vehiculelor se face pe baza documentului de constatare eliberat de unitatea de poliţie ori, după caz, de societăţile din domeniul asigurărilor.</p>
                                
                                <h3>Art. 80<sup>2</sup></h3>
                                <p>Persoanele fizice sau juridice autorizate să execute lucrări de reparaţii la vehicule avariate au obligaţia să ţină evidenţa proprie a reparaţiilor executate, potrivit legii, şi să comunice de îndată, la cererea poliţiei rutiere, datele înregistrate solicitate de aceasta.</p>
                                
                                <h3>Art. 81</h3>
                                <ol>
                                    <li>În vederea întocmirii dosarelor pentru despăgubire, la solicitarea societăţilor din domeniul asigurărilor, autoritatea care are în evidenţă vehiculele înmatriculate sau înregistrate comunică acestora datele referitoare la proprietarii sau deţinătorii mandataţi ai vehiculelor.</li>
                                    <li>La solicitarea Comisiei de Supraveghere a Asigurărilor sau a societăţilor din domeniul asigurărilor, poliţia rutieră comunică acestora copii ale documentelor de constatare a evenimentelor.</li>
                                    <li>La solicitarea poliţiei rutiere, societăţile din domeniul asigurărilor comunică în termenul stabilit de aceasta copii ale documentelor referitoare la constatările amiabile de accidente înregistrate în evidenţa acestora sau alte date expres cerute, în condiţiile legii.</li>
                                </ol>

                                <h3>Sectiunea 6. Circulatia autovehiculelor in traficul international</h3>
                                <h3>Art. 82</h3>
                                <ol>
                                    <li>Autovehiculele, tractoarele agricole sau forestiere şi remorcile înmatriculate în România pot trece frontiera de stat pe drumurile publice, dacă îndeplinesc condiţiile cerute pentru a fi admise în circulaţia internaţională, iar conducătorii lor posedă permis de conducere valabil în condiţiile stabilite prin tratatele la care România este parte sau care este eliberat de autorităţile competente ale statelor membre ale Uniunii Europene ori Spaţiului Economic European sau a cărui valabilitate este recunoscută în aceste state pe bază de reciprocitate.</li>
                                    <li>Autovehiculele, tractoarele agricole sau forestiere şi remorcile înmatriculate în alte state pot trece frontiera de stat şi pot circula pe drumurile publice din România, dacă îndeplinesc condiţiile tehnice prevăzute în Convenţia asupra circulaţiei rutiere, încheiată la Viena la 8 noiembrie 1968 şi ratificată de România prin Decretul nr. 318/1980, dar numai pe perioada cât sunt asigurate pentru cazurile de răspundere civilă ca urmare a prejudiciilor produse prin accidente de autovehicule.</li>
                                    <li>Abrogat(ă)</li>
                                    <li>Autovehiculele, tractoarele agricole sau forestiere şi remorcile înmatriculate în alte state, deţinute de persoane care au sediul sau domiciliul în România, pot fi conduse pe drumurile publice pe o perioadă de maximum 90 de zile de la introducerea acestora în ţară, dacă sunt asigurate pentru cazurile de răspundere civilă ca urmare a pagubelor produse prin accidente de circulaţie.</li>
                                    <li>Persoanele care şi-au stabilit domiciliul ori reşedinţa în România pot să îşi înmatriculeze autovehiculele sau remorcile la autoritatea competentă pe raza căreia au domiciliul ori reşedinţa, după caz.</li>
                                    <li>Autovehiculele şi tractoarele agricole sau forestiere înmatriculate în statele care nu sunt semnatare ale Convenţiei asupra circulaţiei rutiere, prevăzută la alin. (2), sunt obligate să poarte în partea din spate semnul distinctiv al statului care a efectuat înmatricularea.</li>
                                </ol>

                                <h3>Art. 83</h3>
                                <ol>
                                    <li>Au dreptul să conducă autovehicule pe drumurile publice din România, dacă îndeplinesc condiţiile prevăzute la art. 20 şi art. 23 alin. (1), titularii permiselor de conducere naţionale valabile, eliberate de autorităţile:</li>
                                    <ol class="tip_a">
                                        <li>statelor membre ale Convenţiei asupra circulaţiei rutiere, prevăzută la art. 82 alin. (2);</li>
                                        <li>statelor membre ale Uniunii Europene;</li>
                                        <li>statelor cu care România a încheiat un tratat privind recunoaşterea reciprocă a permiselor de conducere auto.</li>
                                    </ol>
                                    <li>Pentru a conduce un autovehicul pe teritoriul României, persoanele care sunt titulare ale unui permis de conducere naţional eliberat de autorităţile unui stat care nu este membru al Convenţiei asupra circulaţiei rutiere şi nici membru al Uniunii Europene ori cu care România nu a încheiat un tratat privind recunoaşterea reciprocă a permiselor de conducere auto trebuie să posede şi permis de conducere internaţional.</li>
                                    <li>Permisele de conducere naţionale eliberate de autorităţile prevăzute la alin. (1), precum şi cele a căror valabilitate este recunoscută de România în mod unilateral, deţinute de persoane care au domiciliul sau reşedinţa în România în sensul art. 231 alin. (2), pot fi preschimbate cu documente similare româneşti, în condiţiile stabilite prin ordin al ministrului afacerilor interne, care se publică în Monitorul Oficial al României, Partea I.</li>
                                </ol>

                                <form method="post" action="capitolTerminat.php">
                                <input class="buton-verif" type="submit" name="progres-reguli" value="Finalizeaza capitol" onclick="showImage(5)">  
                            </form>
                            </span>

                            <span id="pg6">

                                <div class="titlu-partea-dreapta">
                                    <h1>INFRACTIUNI SI PEDEPSE</h1>
                                </div>
    
                                <h3>Art. 84</h3>
                                <p>Abrogat</p>

                                <h3>Art. 85</h3>
                                <p>Abrogat</p>

                                <h3>Art. 86</h3>
                                <p>Abrogat</p>

                                <h3>Art. 87</h3>
                                <p>Abrogat</p>

                                <h3>Art. 88</h3>
                                <ol>
                                    <li>Recoltarea mostrelor biologice se face numai în prezenţa unui poliţist rutier, în condiţiile art. 190 alin. (8) din Codul de procedură penală, în următoarele spaţii ale instituţiilor medicale:</li>
                                    <ol clas="tip_a">
                                        <li>în interiorul unităţilor de asistenţă medicală autorizate;</li>
                                        <li>în ambulanţe având echipaj cu medic ori autospeciale cu această funcţie aparţinând Serviciului mobil de urgenţă, reanimare şi descarcerare;</li>
                                        <li>în interiorul unităţilor medico-legale.</li>
                                    </ol>
                                    <p>1<sup>1</sup>. Medicul, asistentul medical sau persoana cu pregătire medicală de specialitate din echipajul ambulanţei sau autospecialei aparţinând Serviciului mobil de urgenţă, reanimare şi descarcerare, care intervine la evenimentele în legătură cu traficul rutier, poate recolta mostre biologice în măsura în care prin aceasta nu se afectează acordarea asistenţei medicale de urgenţă sau de prim ajutor, precum şi în situaţia în care persoana implicată într-un accident de circulaţie refuză transportul de urgenţă la o unitate sanitară sau starea sa de sănătate nu impune acest transport.</p>
                                    <p>1<sup>2</sup>. Recoltarea mostrelor biologice se face cu respectarea normelor stabilite potrivit art. 125 lit. c).</p>
                                    <p>1<sup>3</sup>. Transportul mostrelor biologice, recoltate în condiţiile alin. (11), la unitatea medico-legală în vederea realizării analizei toxicologice, va fi efectuat de către poliţistul rutier.</p>
                                    <li>Stabilirea concentraţiei de alcool sau a prezenţei în organism de substanţe psihoactive se face în instituţiile medicolegale autorizate, în conformitate cu normele metodologice elaborate de Ministerul Sănătăţii.</li>
                                    <li>Stabilirea prezenţei alcoolului în aerul expirat sau testarea preliminară a prezenţei în organism a unor substanţe psihoactive se face de către poliţia rutieră, cu ajutorul unor mijloace tehnice certificate.</li>
                                    <li>Stabilirea concentraţiei de alcool în aerul expirat se face de către poliţia rutieră, cu ajutorul unui mijloc tehnic omologat şi verificat metrologic.</li>
                                    <li>Persoana care conduce pe drumurile publice un vehicul pentru care legea prevede obligativitatea deţinerii permisului de conducere, testată de poliţistul rutier cu un mijloc tehnic omologat şi verificat metrologic şi depistată ca având o concentraţie de până la 0,40 mg/l alcool pur în aerul expirat, îi poate solicita acestuia să i se recolteze mostre biologice în cadrul unităţilor sau instituţiilor medicale prevăzute la alin. (1), în vederea stabilirii îmbibaţiei de alcool în sânge.</li>
                                    <li>Persoana care conduce pe drumurile publice un vehicul pentru care legea prevede obligativitatea deţinerii permisului de conducere, testată cu un mijloc tehnic omologat şi verificat metrologic şi depistată ca având o concentraţie de peste 0,40 mg/l alcool pur în aerul expirat, este obligată să se supună recoltării mostrelor biologice, în vederea stabilirii îmbibaţiei de alcool în sânge.</li>
                                    <li>Conducătorilor de vehicule pentru care legea prevede obligativitatea deţinerii permisului de conducere, testaţi în trafic cu un mijloc certificat care indică prezenţa în organism a unor substanţe psihoactive, li se recoltează obligatoriu mostre biologice.</li>
                                </ol>

                                <h3>Art. 89</h3>
                                <p>Abrogat</p>

                                <h3>Art. 90</h3>
                                <p>Abrogat</p>

                                <h3>Art. 91</h3>
                                <p>Abrogat</p>

                                <h3>Art. 92</h3>
                                <p>Abrogat</p>

                                <h3>Art. 93</h3>
                                <p>Abrogat</p>

                                <h3>Art. 94</h3>
                                <p>Abrogat</p>

                                <form method="post" action="capitolTerminat.php">
                                <input class="buton-verif" type="submit" name="progres-infractiuni" value="Finalizeaza capitol" onclick="showImage(6)">  
                            </form>
                            </span>

                            <span id="pg7">

                                <div class="titlu-partea-dreapta">
                                    <h1>RASPUNDEREA CONTRAVENTIONALA</h1>
                                </div>

                                <h3>Art. 95</h3>
                                <ol>
                                    <li>Încălcarea dispoziţiilor prezentei ordonanţe de urgenţă, altele decât cele care întrunesc elementele constitutive ale unei infracţiuni, constituie contravenţie şi se sancţionează cu avertisment ori cu amendă ca sancţiune principală şi, după caz, cu una dintre sancţiunile contravenţionale complementare prevăzute la art. 96 alin. (2).</li>
                                    <li>Avertismentul constă în atenţionarea verbală sau scrisă a contravenientului, însoţită de recomandarea de a respecta dispoziţiile legale.</li>
                                    <li>Abrogat</li>
                                    <li>Sancţiunile contravenţionale prevăzute la alin. (1) se stabilesc şi se aplică contravenienţilor, persoane fizice ori juridice.</li>
                                </ol>

                                <h3>Art. 96</h3>
                                <ol>
                                    <li>Sancţiunile contravenţionale complementare au ca scop înlăturarea unei stări de pericol şi preîntâmpinarea săvârşirii altor fapte interzise de lege şi se aplică prin acelaşi proces-verbal prin care se aplică şi sancţiunea principală a amenzii sau avertismentului.</li>
                                    <li>Sancţiunile contravenţionale complementare sunt următoarele:</li>
                                    <ol class="tip_a">
                                        <li>aplicarea punctelor de penalizare;</li>
                                        <li>suspendarea exercitării dreptului de a conduce, pe timp limitat;</li>
                                        <li>confiscarea bunurilor destinate săvârşirii contravenţiilor prevăzute în prezenta ordonanţă de urgenţă ori folosite în acest scop;</li>
                                        <li>imobilizarea vehiculului;</li>
                                        <li>radierea din oficiu a înmatriculării sau înregistrării vehiculului, în cazurile prevăzute la art. 17 alin. (4);</li>
                                        <li>Abrogat</li>
                                    </ol>
                                    <li>Pentru încălcarea unor norme la regimul circulaţiei, pe lângă sancţiunea principală sau, după caz, una dintre sancţiunile contravenţionale complementare prevăzute la alin. (2) lit. c), d) şi f), în cazurile prevăzute la art. 108 alin. (1) se aplică şi un număr de 2, 3, 4 sau 6 puncte de penalizare.</li>
                                    <li>În cazul cumulului de 15 puncte de penalizare suspendarea exercitării dreptului de a conduce se dispune de către şeful poliţiei rutiere din judeţul sau municipiul Bucureşti care îl are în evidenţă pe titularul permisului de conducere.</li>
                                    <li>Confiscarea se dispune de către poliţia rutieră prin procesul-verbal de constatare a contravenţiei, odată cu aplicarea sancţiunii amenzii.</li>
                                    <li>Sunt supuse confiscării:</li>
                                    <ol class="tip_a">
                                        <li>mijloacele speciale de avertizare luminoase şi sonore deţinute, montate şi folosite pe alte autovehicule decât cele prevăzute la art. 32 alin. (2) şi (3);</li>
                                        <li>dispozitivele care perturbă funcţionarea mijloacelor tehnice de supraveghere a traficului;</li>
                                        <li>plăcuţele cu numărul de înmatriculare sau de înregistrare care nu corespund standardelor în vigoare şi care sunt montate pe vehicule;</li>
                                        <li>Abrogat</li>
                                    </ol>
                                    <li>Imobilizarea unui vehicul constă în scoaterea acestuia în afara părţii carosabile, pe acostament sau cât mai aproape de marginea drumului, şi punerea lui în imposibilitate de mişcare prin folosirea unor dispozitive tehnice sau a altor mijloace de blocare.</li>
                                    <li>Imobilizarea unui vehicul se dispune de către poliţistul rutier, ca urmare a săvârşirii de către conducătorul acestuia a uneia dintre faptele prevăzute la art. 117 alin. (1).</li>
                                </ol>

                                <h3>Art. 97</h3>
                                <ol>
                                    <li>În cazurile prevăzute în prezenta ordonanţă de urgenţă, poliţistul rutier dispune şi una dintre următoarele măsuri tehnico-administrative:</li>
                                    <ol class="tip_a">
                                        <li>reţinerea permisului de conducere şi/sau a certificatului de înmatriculare ori de înregistrare sau, după caz, a dovezii înlocuitoare a acestora;</li>
                                        <li>retragerea permisului de conducere, a certificatului de înmatriculare sau înregistrare ori a plăcuţelor cu numărul de înmatriculare sau de înregistrare;</li>
                                        <li>anularea permisului de conducere.</li>
                                        <li>ridicarea vehiculelor staţionate neregulamentar.</li>
                                    </ol>
                                    <li>Reţinerea permisului de conducere ori a certificatului de înmatriculare sau de înregistrare se face de către poliţistul rutier, de regulă odată cu constatarea faptei, eliberându-se titularului o dovadă înlocuitoare cu sau fără drept de circulaţie.</li>
                                    <li>Perioada în care titularul permisului de conducere nu are dreptul de a conduce un autovehicul, tractor agricol sau forestier ori tramvai se consideră perioadă de suspendare a exercitării dreptului de a conduce.</li>
                                    <li>Retragerea permisului de conducere se dispune de către poliţia rutieră dacă titularul acestuia a fost declarat inapt pentru a conduce vehicule pe drumurile publice de către o unitate de asistenţă medicală autorizată.</li>
                                    <li>Anularea permisului de conducere se dispune de către poliţia rutieră pe a cărei rază de competenţă s-a produs una dintre faptele prevăzute la art. 114.</li>
                                    <li>Procedura aplicării măsurilor tehnico-administrative se stabileşte prin regulament.</li>
                                </ol>

                                <h3>Art. 98</h3>
                                <ol>
                                    <li>Amenzile contravenţionale se stabilesc în cuantumul determinat de valoarea numărului punctelor-amendă aplicate.</li>
                                    <li>Un punct-amendă reprezintă valoric 10% din salariul minim brut pe economie, stabilit prin hotărâre a Guvernului.</li>
                                    <li>Contravenţiilor prevăzute în prezenta ordonanţă de urgenţă li se stabilesc clase de sancţiuni cărora le corespunde un număr de puncte-amendă, în funcţie de gravitatea faptelor şi de pericolul social pe care acestea îl prezintă.</li>
                                    <li>Clasele de sancţiuni sunt următoarele:</li>
                                    <ol class="tip_a">
                                        <li>clasa I - 2 sau 3 puncte-amendă;</li>
                                        <li>clasa a II-a - 4 sau 5 puncte-amendă;</li>
                                        <li>clasa a III-a - de la 6 la 8 puncte-amendă;</li>
                                        <li>clasa a IV-a - de la 9 la 20 puncte-amendă;</li>
                                        <li>clasa a V-a - de la 21 la 100 puncte-amendă.</li>
                                    </ol>
                                    <li>Contravenţiile prevăzute la clasa a V-a de sancţiuni se aplică persoanelor juridice.</li>
                                </ol>

                                <h3>Art. 99</h3>
                                <ol>
                                    <li>Constituie contravenţii şi se sancţionează cu amenda prevăzută în clasa I de sancţiuni următoarele fapte săvârşite de către persoane fizice:</li>
                                    <ol>
                                        <li>conducerea unui autovehicul în mod nejustificat cu o viteză cu cel puţin 10 km/h sub limita minimă obligatorie stabilită pe tronsonul de drum respectiv;</li>
                                        <li>nerespectarea obligaţiei de semnalizare a manevrei de schimbare a direcţiei de mers;</li>
                                        <li>nerespectarea de către pietoni a normelor privind circulaţia pe drumurile publice;</li>
                                        <li>neîndeplinirea obligaţiei proprietarului sau a utilizatorului de autovehicul şi tractor agricol sau forestier de a solicita documentul de constatare a avariilor produse acestuia în alte împrejurări decât în urma unui accident de circulaţie;</li>
                                        <li>nerespectarea normelor privind circulaţia pe drumurile publice de către conducătorii coloanelor militare, ai grupurilor organizate autorizate şi cortegiilor;</li>
                                        <li>nerespectarea semnificaţiei semnalului luminos intermediar de forma uneia sau a unor săgeţi de culoare galbenă ori albă cu vârful orientat în jos spre dreapta, care anunţă schimbarea semnalului de culoare verde în cazul benzilor cu circulaţie reversibilă;</li>
                                        <li>conducerea unui vehicul avariat peste termenul de 30 de zile de la data eliberării documentului de constatare a avariei;</li>
                                        <li>nerespectarea obligaţiei pasagerilor aflaţi într-un autovehicul şi tractor agricol sau forestier de a purta, în timpul deplasării pe drumurile publice, centura sau dispozitivele de siguranţă omologate;</li>
                                        <li>nerespectarea obligaţiei de către persoana transportată pe motocicletă sau pe moped de a purta, în timpul deplasării pe drumurile publice, casca de protecţie omologată;</li>
                                        <li>nerespectarea obligaţiei conducătorului de vehicul de a lăsa liber traseul tramvaiului la apropierea acestuia, când drumul are o singură bandă;</li>
                                        <li>nerespectarea regulilor de circulaţie de către conducătorii de animale;</li>
                                        <li>nerespectarea obligaţiei de a aplica semnul distinctiv pe autovehicule şi tractoare agricole sau forestiere conduse de persoane care au mai puţin de un an vechime de la dobândirea permisului de conducere;</li>
                                        <li>lăsarea liberă în timpul conducerii a volanului, ghidonului sau a manetei de comandă a vehiculului;</li>
                                        <li>nerespectarea de către pasageri sau călători a obligaţiilor ce le revin atunci când se află în vehicule;</li>
                                        <li>nerespectarea semnificaţiei culorii galbene a semaforului;</li>
                                        <li>conducerea unui vehicul ale cărui plăcuţe cu numărul de înmatriculare sau de înregistrare sunt deteriorate, murdare ori acoperite cu gheaţă sau zăpadă de natură a împiedica identificarea numărului de înmatriculare sau de înregistrare;</li>
                                        <li>conducerea unui vehicul pe ale cărui plăcuţe cu numărul de înmatriculare sau de înregistrare sunt aplicate folii sau alte dispozitive care nu permit citirea numărului de înmatriculare ori plăcuţele nu corespund standardelor în vigoare;</li>
                                        <li>conducerea pe drumurile publice a unui vehicul cu defecţiuni tehnice, altele decât cele prevăzute la art. 102 alin. (3) lit. b), ori care are lipsă unul sau mai multe elemente de caroserie sau aceasta este deteriorată vizibil.</li>
                                    </ol>
                                    <li>Amenda contravenţională prevăzută la alin. (1) se aplică şi conducătorului de autovehicul, tractor agricol sau forestier ori tramvai care săvârşeşte o faptă pentru care se aplică 2 puncte de penalizare, conform art. 108 alin. (1) lit. a).</li>
                                </ol>

                                <h3>Art. 100</h3>
                                <ol>
                                    <li>Constituie contravenţii şi se sancţionează cu amenda prevăzută în clasa a II-a de sancţiuni următoarele fapte săvârşite de persoane fizice:</li>
                                    <ol>
                                        <li>nerespectarea semnalelor poliţiştilor de frontieră în punctele de trecere a frontierei de stat a României, ale îndrumătorilor de circulaţie ai Ministerului Apărării Naţionale, ale organelor fiscale din cadrul Agenţiei Naţionale de Administrare Fiscală, ale agenţilor de cale ferată, ale persoanelor desemnate pentru dirijarea circulaţiei, pe sectoarele de drum pe care se execută lucrări de reabilitare a acestora, precum şi cele ale patrulelor şcolare de circulaţie şi ale nevăzătorilor;</li>
                                        <li>nerespectarea regulilor de utilizare a mijloacelor de avertizare sonoră de către conducătorii de vehicule, cu excepţia celor care conduc autovehicule prevăzute la art. 32 alin. (2) lit. a) şi b);</li>
                                        <li>nerespectarea semnificaţiei indicatoarelor şi marcajelor de obligare;</li>
                                        <li>neîndeplinirea obligaţiei de a solicita autorităţii competente, în termenul prevăzut de lege, eliberarea unui nou permis de conducere sau certificat de înmatriculare ori de înregistrare, în cazul în care acestea au fost declarate furate, pierdute, deteriorate sau nu mai corespund din punctul de vedere al formei şi conţinutului celor în vigoare;</li>
                                        <li>lipsa dotărilor specifice la autovehiculele şi tractoarele agricole sau forestiere destinate învăţării conducerii auto, prevăzute în reglementările în vigoare;</li>
                                        <li>conducerea unui autovehicul şi tractor agricol sau forestier care are montate anvelope cu alte dimensiuni sau caracteristici decât cele prevăzute în certificatul de înmatriculare sau de înregistrare ori sunt uzate peste limita admisă;</li>
                                        <li>conducerea unui autovehicul şi tractor agricol sau forestier care, în mers sau staţionare, poluează fonic sau emană noxe peste limita legal admisă;</li>
                                        <li>nerespectarea traseelor stabilite de poliţia rutieră pentru pregătirea practică sau susţinerea examenului pentru obţinerea permisului de conducere;</li>
                                        <li>nerespectarea obligaţiei de a circula pe un singur şir, indiferent de direcţia de deplasare, într-o intersecţie în care circulă şi tramvaie şi de a lăsa liber traseul tramvaiului atunci când spaţiul dintre şina din dreapta şi trotuar nu permite circulaţia pe două şiruri;</li>
                                        <li>efectuarea de către conducătorul unui vehicul a unor activităţi de natură a-i distrage atenţia de la conducere ori folosirea instalaţiilor de sonorizare la un nivel de zgomot care afectează deplasarea în siguranţă a lui şi a celorlalţi participanţi la trafic;</li>
                                        <li>nerespectarea obligaţiei ce revine conducătorului de motocicletă sau moped de a avea în funcţiune, în timpul zilei, luminile de întâlnire în circulaţia pe drumurile publice;</li>
                                        <li>neutilizarea echipamentului de protecţie-avertizare fluorescent-reflectorizant de către persoana care execută lucrări în zona drumului public sau de către agentul de cale ferată care asigură trecerea la nivel;</li>
                                        <li>conducerea unui autovehicul şi tractor agricol sau forestier care nu este dotat cu trusă medicală, triunghiuri reflectorizante şi stingător pentru incendii, omologate.</li>
                                    </ol>
                                    <li>Amenda contravenţională prevăzută la alin. (1) se aplică şi conducătorului de autovehicul, tractor agricol sau forestier ori tramvai care săvârşeşte o faptă pentru care se aplică 3 puncte de penalizare, conform art. 108 alin. (1) lit. b).</li>
                                    <li>Constituie contravenţie şi se sancţionează cu amenda prevăzută în clasa a II-a de sancţiuni şi cu aplicarea sancţiunii contravenţionale complementare a suspendării exercitării dreptului de a conduce pentru o perioadă de 30 de zile săvârşirea de către conducătorul de autovehicul, tractor agricol sau forestier ori tramvai a următoarelor fapte:</li>
                                    <ol class="tip_a">
                                        <li>depăşirea coloanelor de vehicule oprite la culoarea roşie a semaforului sau la trecerile la nivel cu calea ferată;</li>
                                        <li>neacordarea priorităţii de trecere pietonilor angajaţi în traversarea regulamentară a drumului public prin locurile special amenajate şi semnalizate, aflaţi pe sensul de deplasare a autovehiculului, tractorului agricol sau forestier ori tramvaiului;</li>
                                        <li>neacordarea priorităţii de trecere vehiculelor care au acest drept;</li>
                                        <li>nerespectarea semnificaţiei culorii roşii a semaforului;</li>
                                        <li>nerespectarea regulilor privind depăşirea;</li>
                                        <li>nerespectarea semnalelor, indicaţiilor şi dispoziţiilor poliţistului rutier aflat în exercitarea atribuţiilor de serviciu;</li>
                                        <li>neprezentarea la unitatea de poliţie competentă pe raza căreia s-a produs un accident de circulaţie din care au rezultat numai pagube materiale, cu excepţia cazurilor prevăzute la art. 79 alin. (2).</li>
                                    </ol>
                                </ol>

                                <h3>Art. 101</h3>
                                <ol>
                                    <li>Constituie contravenţii şi se sancţionează cu amenda prevăzută în clasa a III-a de sancţiuni următoarele fapte săvârşite de persoane fizice:</li>
                                    <ol>
                                        <li>conducerea unui autovehicul şi tractor agricol sau forestier cu permis de conducere a cărui valabilitate a expirat;</li>
                                        <li>Abrogat</li>
                                        <li>conducerea unui autovehicul de către o persoană cu domiciliul în România care nu a preschimbat permisul de conducere obţinut în alt stat, în termenul prevăzut de lege;</li>
                                        <li>neîndeplinirea obligaţiilor de preschimbare a certificatului de înmatriculare sau de înregistrare a autovehiculului şi tractorului agricol sau forestier ori remorcii în cazurile prevăzute de lege;</li>
                                        <li>nepăstrarea distanţei laterale suficiente faţă de vehiculul care circulă din sens opus;</li>
                                        <li>nerespectarea de către conducătorul de vehicul a semnificaţiei indicatoarelor şi marcajelor de interzicere sau restricţie ori a celor temporare, cu excepţia celor care interzic accesul sau depăşirea care se încadrează în altă clasă de sancţiuni;</li>
                                        <li>nerespectarea obligaţiei de a permite părăsirea intersecţiei conducătorului vehiculului rămas în interiorul acesteia;</li>
                                        <li>nerespectarea normelor privind circulaţia bicicletelor;</li>
                                        <li>nereducerea vitezei în cazurile prevăzute de regulament;</li>
                                        <li>montarea la autovehicul şi tractor agricol sau forestier, remorcă sau tramvai a luminilor de altă culoare sau intensitate, a altor lumini ori dispozitive de avertizare sonoră sau accesorii ori modificări neomologate;</li>
                                        <li>circulaţia cu un autovehicul şi tractor agricol sau forestier, remorcă sau tramvai cu defecţiuni la sistemul de iluminare sau de avertizare sonoră ori când acestea lipsesc;</li>
                                        <li>nerespectarea regulilor în cazul imobilizării involuntare în pasaje subterane şi tuneluri;</li>
                                        <li>nerespectarea regulilor privind transportul persoanelor şi al obiectelor în sau pe vehicule;</li>
                                        <li>pornirea de pe loc a autovehiculului sau tramvaiului cu uşile deschise, circulaţia cu uşile deschise ori deschiderea acestora în timpul mersului; deschiderea uşilor autovehiculului atunci când acesta este oprit sau staţionat, fără asigurarea că nu se pune în pericol siguranţa deplasării celorlalţi participanţi la trafic;</li>
                                        <li>oprirea autovehiculelor destinate transportului public de persoane în alte locuri decât în staţiile semnalizate ca atare;</li>
                                        <li>nerespectarea regulilor privind circulaţia pe benzi;</li>
                                        <li>conducerea pe drumurile publice a vehiculelor cu două roţi, fără a se asigura contactul cu partea carosabilă pe ambele roţi.</li>
                                        <li>nerespectarea obligaţiei conducătorului de vehicul de a avea asupra sa documentele prevăzute la art. 35 alin. (2).</li>
                                    </ol>
                                    <li>Amenda contravenţională prevăzută la alin. (1) se aplică şi conducătorului de autovehicul, tractor agricol sau forestier ori tramvai care săvârşeşte o faptă pentru care se aplică 4 puncte de penalizare, conform art. 108 alin. (1) lit. c).</li>
                                    <li>Constituie contravenţie şi se sancţionează cu amenda prevăzută în clasa a III-a de sancţiuni şi cu aplicarea sancţiunii contravenţionale complementare a suspendării dreptului de a conduce pentru o perioadă de 60 de zile săvârşirea de către conducătorul de autovehicul, tractor agricol sau forestier ori tramvai a următoarelor fapte:</li>
                                    <ol class="tip_a">
                                        <li>nerespectarea regulilor privind prioritatea de trecere, depăşirea sau trecerea la culoarea roşie a semaforului, dacă prin aceasta s-a produs un accident de circulaţie din care au rezultat avarierea unui vehicul sau alte pagube materiale;</li>
                                        <li>nerespectarea interdicţiei temporare de circulaţie instituite pe un anumit segment de drum public;</li>
                                        <li>nerespectarea regulilor de circulaţie la trecerea unei coloane oficiale sau intercalarea într-o astfel de coloană;</li>
                                        <li>circulaţia pe sens opus, cu excepţia cazurilor în care se efectuează regulamentar manevra de depăşire.</li>
                                    </ol>
                                </ol>

                                <h3>Art. 102</h3>
                                <ol>
                                    <li>Constituie contravenţii şi se sancţionează cu amenda prevăzută în clasa a IV-a de sancţiuni următoarele fapte săvârşite de persoane fizice:</li>
                                    <ol>
                                        <li>conducerea pe drumurile publice a unui vehicul care nu corespunde din punct de vedere tehnic sau al cărui termen de valabilitate a inspecţiei tehnice periodice a expirat;</li>
                                        <li>Abrogat</li>
                                        <li>conducerea unui vehicul cu tracţiune animală neînregistrat;</li>
                                        <li>neefectuarea radierii vehiculelor din evidenţă, în cazurile şi termenele prevăzute de lege;</li>
                                        <li>conducerea unui autovehicul destinat transportului public de persoane sau de mărfuri fără a deţine atestatul profesional;</li>
                                        <li>neefectuarea verificării medicale periodice;</li>
                                        <li>Abrogat</li>
                                        <li>deţinerea simultană a două permise de conducere naţionale, dintre care unul eliberat de o autoritate competentă străină;</li>
                                        <li>lipirea de afişe, inscripţii sau înscrisuri pe indicatoarele sau dispozitivele ce servesc la semnalizarea rutieră, inclusiv pe suporturile acestora;</li>
                                        <li>deţinerea, montarea sau folosirea în circulaţia pe drumurile publice a mijloacelor speciale de avertizare sonoră sau luminoasă pe vehiculele care nu au acest drept;</li>
                                        <li>deţinerea, montarea sau folosirea în circulaţia pe drumurile publice a dispozitivelor care perturbă funcţionarea normală a dispozitivelor de măsurare a vitezei;</li>
                                        <li>folosirea nejustificată a mijloacelor speciale de avertizare luminoase sau sonore de către conducătorii autovehiculelor care au regim de circulaţie prioritară;</li>
                                        <li>Abrogat</li>
                                        <li>necomunicarea de către proprietarul sau utilizatorul unui vehicul, la solicitarea poliţiei rutiere, a identităţii persoanei căreia i-a încredinţat vehiculul spre a fi condus;</li>
                                        <li>neîndeplinirea obligaţiilor ce îi revin conducătorului de vehicule care efectuează transport public de persoane sau de mărfuri;</li>
                                        <li>nerespectarea obligaţiilor ce revin conducătorilor de vehicule cu tracţiune animală;</li>
                                        <li>nerespectarea dispoziţiilor art. 74 privind circulaţia pe autostrăzi;</li>
                                        <li>Abrogat</li>
                                        <li>efectuarea transportului de mărfuri sau persoane cu autovehicule şi tractoare agricole sau forestiere şi remorci care circulă în baza autorizaţiei pentru probe;</li>
                                        <li>conducerea unui autovehicul şi tractor agricol sau forestier care circulă în baza autorizaţiei pentru probe în afara judeţului sau a municipiului Bucureşti în raza căruia îşi are sediul titularul autorizaţiei;</li>
                                        <li>nerespectarea semnificaţiei luminii roşii a dispozitivelor instalate pentru semnalizarea benzilor cu circulaţie reversibilă;</li>
                                        <li>săvârşirea de către conducătorii de vehicule sau pasagerii acestora de gesturi obscene, proferarea de injurii, adresarea de expresii jignitoare sau vulgare participanţilor la trafic;</li>
                                        <li>aruncarea, lăsarea ori abandonarea pe drumul public de obiecte, materiale, substanţe sau vehicule, după caz;</li>
                                        <li>nerespectarea regulilor privind remorcarea vehiculelor;</li>
                                        <li>neprezentarea, în mod nejustificat, în termenul stabilit la unitatea de poliţie rutieră la care au fost invitate pentru soluţionarea oricărei probleme legate de calitatea de participant la trafic sau de proprietar ori utilizator de vehicul;</li>
                                        <li>pătrunderea pe drumurile publice modernizate cu un vehicul care are pe roţi sau pe caroserie noroi ce se depune pe partea carosabilă ori din care cad sau se scurg produse, substanţe sau materiale ce pun în pericol siguranţa circulaţiei;</li>
                                        <li>transportul animalelor pe locurile din faţă ale vehiculelor;</li>
                                        <li>conducerea autovehiculului pe drumurile publice acoperite cu zăpadă, gheaţă sau polei, fără ca acesta să fie dotat cu anvelope de iarnă, iar în cazul autovehiculului de transport marfă cu o masă totală maximă autorizată mai mare de 3,5 tone şi al autovehiculului de transport persoane cu mai mult de 9 locuri pe scaune, inclusiv cel al conducătorului auto, fără ca acestea să fie echipate cu anvelope de iarnă pe roţile axei/axelor de tracţiune sau fără a avea montate pe aceste roţi lanţuri sau alte echipamente antiderapante certificate;</li>
                                        <li>neaplicarea, în partea din spate a unui autovehicul şi tractor agricol sau forestier înmatriculat într-un stat care nu este semnatar al Convenţiei asupra circulaţiei rutiere, a semnului distinctiv al statului care a efectuat înmatricularea;</li>
                                        <li>Abrogat</li>
                                        <li>lovirea, deteriorarea sau ocolirea porţilor de gabarit instalate înaintea trecerii la nivel cu calea ferată;</li>
                                        <li>lovirea şi/sau deteriorarea pasajelor superioare de pe drumurile publice, prin nerespectarea gabaritului de liberă trecere semnalizat corespunzător;</li>
                                        <li>montarea pe autovehicul a unui sistem antifurt sonor a cărui durată a semnalului depăşeşte mai mult de un minut consecutiv, iar intensitatea semnalului depăşeşte pragul fonic prevăzut de lege;</li>
                                        <li>neaplicarea, în partea din spate a vehiculului care efectuează transport public de persoane sau de mărfuri, a indicatorului cu limitele de viteză admise pentru categoria din care face parte vehiculul condus;</li>
                                        <li>aplicarea tratamentelor chimice sau a foliilor pe parbriz, lunetă sau pe geamurile laterale, cu excepţia celor omologate şi/sau certificate de către autoritatea competentă şi care sunt marcate corespunzător;</li>
                                        <li>aplicarea de afişe, reclame publicitare, înscrisuri sau accesorii pe parbriz, lunetă sau geamurile laterale care restrâng sau estompează vizibilitatea sub limita legal admisă ori împiedică sau diminuează eficacitatea dispozitivelor de iluminare şi semnalizare luminoasă ori citirea numărului de înmatriculare;</li>
                                        <li>încălcarea obligaţiilor referitoare la circulaţia pe drumurile publice a vehiculelor care transportă produse sau mărfuri periculoase ori a vehiculelor cu masa şi/sau gabaritul depăşit.</li>
                                        <li>nerespectarea obligaţiei de comunicare prevăzute la art. 801 şi la art. 81 alin. (3) sau comunicarea de date inexacte ori incomplete.</li>
                                    </ol>
                                    <li>Amenda contravenţională prevăzută la alin. (1) se aplică şi conducătorului de autovehicul, tractor agricol sau forestier ori tramvai care săvârşeşte o faptă pentru care se aplică 6 puncte de penalizare, conform art. 108 alin. (1) lit. d).</li>
                                    <li>Constituie contravenţie şi se sancţionează cu amenda prevăzută în clasa a IV-a de sancţiuni şi cu aplicarea sancţiunii complementare a suspendării exercitării dreptului de a conduce pentru o perioadă de 90 de zile săvârşirea de către conducătorul de autovehicul, tractor agricol sau forestier ori tramvai a următoarelor fapte:</li>
                                    <ol class="tip_a">
                                        <li>conducerea sub influenţa băuturilor alcoolice, dacă fapta nu constituie, potrivit legii, infracţiune;</li>
                                        <li>conducerea vehiculului cu defecţiuni grave la sistemul de frânare sau la mecanismul de direcţie, constatate de poliţia rutieră împreună cu specialiştii Registrului Auto Român;</li>
                                        <li>neoprirea la trecerea la nivel cu calea ferată când barierele sau semibarierele sunt coborâte ori în curs de coborâre sau când semnalele cu lumini roşii şi/sau sonore sunt în funcţiune;</li>
                                        <li>Abrogat</li>
                                        <li>depăşirea cu mai mult de 50 km/h a vitezei maxime admise pe sectorul de drum respectiv şi pentru categoria din care face parte autovehiculul condus, constatată, potrivit legii, cu mijloace tehnice omologate şi verificate metrologic.</li>
                                    </ol>
                                </ol>

                                <h3>Art. 103</h3>
                                <ol>
                                    <li>Suspendarea exercitării dreptului de a conduce autovehicule şi tractoare agricole sau forestiere se dispune:</li>
                                    <ol class="tip_a">
                                        <li>pentru o perioadă de 30 de zile, dacă titularul permisului de conducere a săvârşit contravenţii care cumulează 15 puncte de penalizare;</li>
                                        <li>pentru o perioadă de 60 de zile, dacă titularul permisului de conducere cumulează din nou cel puţin 15 puncte de penalizare în următoarele 12 luni de la data expirării ultimei suspendări a exercitării dreptului de a conduce.</li>
                                        <li>pentru o perioadă de 90 de zile când fapta conducătorului de autovehicul, tractor agricol sau forestier ori tramvai a fost urmărită ca infracţiune la regimul circulaţiei pe drumurile publice, precum şi în cazul accidentului de circulaţie din care a rezultat decesul sau vătămarea corporală a unei persoane şi instanţa de judecată sau procurorul a dispus clasarea, renunţarea la urmărirea penală, renunţarea la aplicarea pedepsei sau amânarea aplicării pedepsei, dacă pentru regula de circulaţie încălcată prezenta ordonanţă de urgenţă prevede suspendarea exercitării dreptului de a conduce.</li>
                                    </ol>
                                    <p>1<sup>1</sup>. În situaţia prevăzută la alin. (1) lit. c), suspendarea exercitării dreptului de a conduce autovehicule, tractoare agricole sau forestiere ori tramvaie se dispune de către şeful poliţiei rutiere pe raza căreia a fost săvârşită fapta.</p>
                                    <li>În cazul în care conducătorul de autovehicul, tractor agricol sau forestier ori tramvai săvârşeşte, într-un interval de 6 luni de la data restituirii permisului de conducere, din nou o nouă faptă prevăzută la art. 100 alin. (3), art. 101 alin. (3) şi art. 102 alin. (3), perioada de suspendare se majorează cu încă 30 de zile.</li>
                                    <li>În cazurile prevăzute la alin. (1) şi (2) hotărârea de suspendare a exercitării dreptului de a conduce se comunică titularului de către serviciul poliţiei rutiere, care are în evidenţă contravenientul, în termen de 10 zile de la data constatării ultimei contravenţii.</li>
                                    <li>Punctele de penalizare se anulează la împlinirea termenului de 6 luni de la data constatării contravenţiei.</li>
                                    <li>Suspendarea exercitării dreptului de a conduce anulează toate punctele de penalizare acumulate până în acel moment.</li>
                                    <li>În cazurile prevăzute la alin. (1), contravenientul este obligat să se prezinte la unitatea de poliţie pe raza căreia domiciliază sau îşi are reşedinţa în sensul art. 231 alin. (2) ori, după caz, locuieşte, în situaţia persoanelor aflate la studii în România, în termen de 5 zile de la primirea înştiinţării scrise, pentru a preda permisul de conducere.</li>
                                    <li>Neprezentarea contravenientului în termenul prevăzut la alin. (6), în mod nejustificat, atrage majorarea cu 30 de zile a duratei de suspendare a exercitării dreptului de a conduce, prevăzută la alin. (1) lit. a) şi b).</li>
                                    <li>În situaţia în care autoritatea emitentă a permisului de conducere a sesizat instanţa de judecată potrivit art. 114 alin. (1) lit. e), autoritatea emitentă a permisului de conducere va dispune prin ordin suspendarea exercitării dreptului de a conduce autovehicule şi tractoare agricole sau forestiere, suspendare ce operează până la rămânerea definitivă şi irevocabilă a hotărârii judecătoreşti. În acest caz, titularul este obligat să se prezinte la unitatea de poliţie pe raza căreia domiciliază, are reşedinţa sau, după caz, locuieşte, în situaţia persoanelor aflate la studii în România, în termen de 5 zile de la comunicarea ordinului, pentru a preda permisul de conducere.</li>
                                </ol>

                                <h3>Art. 104</h3>
                                <p>La cererea titularului permisului de conducere, perioadele de suspendare se reduc de către şeful poliţiei rutiere a judeţului sau a municipiului Bucureşti pe raza căreia a fost săvârşită fapta ori de către şeful poliţiei rutiere din Inspectoratul General al Poliţiei Române, dar nu mai puţin de 30 de zile, în condiţiile prevăzute în regulament.</p>

                                <h3>Art. 105</h3>
                                <p>Constituie contravenţii şi se sancţionează cu amenda prevăzută în clasa a V-a de sancţiuni următoarele fapte săvârşite de către persoane juridice:</p>
                                <ol>
                                    <li>nesemnalizarea sau semnalizarea necorespunzătoare a drumului public sau a trecerilor la nivel cu calea ferată, conform standardelor în vigoare; neînlăturarea obstacolelor care împiedică vizibilitatea conducătorilor de vehicule la trecerile la nivel cu calea ferată;</li>
                                    <li>neîndeplinirea obligaţiilor de instalare a mijloacelor de semnalizare rutieră, precum şi a dispozitivelor speciale de acest fel;</li>
                                    <li>nesemnalizarea sau semnalizarea necorespunzătoare, conform standardelor în vigoare, a obstacolelor sau lucrărilor aflate în zona drumului public;</li>
                                    <li>neasigurarea stării de viabilitate a părţii carosabile potrivit standardelor în vigoare, precum şi neluarea măsurilor de înlăturare a obstacolelor aflate pe partea carosabilă;</li>
                                    <li>amplasarea în zona drumului public de dispozitive care pot fi confundate cu indicatoarele ori instalaţiile care servesc la semnalizarea rutieră ori realizarea de construcţii sau instalaţii ori crearea de alte obstacole de natură să le limiteze vizibilitatea sau eficacitatea;</li>
                                    <li>instituirea de restricţii de circulaţie pe drumurile publice fără autorizaţia administratorului drumului şi avizul poliţiei rutiere;</li>
                                    <li>nerespectarea termenelor şi condiţiilor stabilite de administratorul drumului public şi de poliţia rutieră privind amplasarea şi executarea de lucrări în zona drumului public;</li>
                                    <li>nerespectarea obligaţiilor de către executant sau, după caz, beneficiar ca, după terminarea lucrărilor în partea carosabilă, acostament sau trotuar, să readucă drumul public cel puţin la starea iniţială;</li>
                                    <li>neîndeplinirea obligaţiilor ce le revin, potrivit normelor legale, în legătură cu vehiculele şi conducătorii acestora;</li>
                                    <li>necomunicarea, în termen, la cererea poliţiei rutiere, a identităţii persoanei căreia i-a încredinţat vehiculul pentru a fi condus pe drumurile publice;</li>
                                    <li>lipsa dotărilor specifice obligatorii pentru admiterea şi menţinerea în circulaţie a vehiculelor;</li>
                                    <li>neasigurarea însoţirii deplasării vehiculelor care efectuează transport de mărfuri sau produse periculoase, precum şi a celor cu mase sau gabarite depăşite;</li>
                                    <li>nerespectarea obligaţiei de a echipa personalul de execuţie a lucrărilor în zona drumului public cu echipamente de protecţie-avertizare fluorescent-reflectorizant;</li>
                                    <li>amplasarea staţiilor mijloacelor de transport public de persoane fără avizul poliţiei rutiere;</li>
                                    <li>nerespectarea obligaţiilor de a efectua orele de educaţie rutieră în unităţile de învăţământ;</li>
                                    <li>practicarea actelor de comerţ pe trotuar, pe acostament sau pe partea carosabilă, iar în afara localităţilor, în zona de siguranţă a drumului public;</li>
                                    <li>refuzul nejustificat de a înmatricula sau de a înregistra un vehicul ori de a elibera plăcuţele cu numărul de înmatriculare sau de înregistrare ori de a menţiona în certificatul de înmatriculare datele de identificare a utilizatorului;</li>
                                    <li>neîndeplinirea, de către proprietarul sau deţinătorul mandatat al vehiculului, a obligaţiei de a solicita autorităţii competente înscrierea în certificatul de înmatriculare sau de înregistrare a datelor de identificare a utilizatorului;</li>
                                    <li>neîndeplinirea obligaţiilor ce revin organizatorilor întrecerilor autorizate de a lua toate măsurile necesare pentru desfăşurarea în siguranţă a acestora, precum şi pentru protecţia celorlalţi participanţi la trafic;</li>
                                    <li>neîndeplinirea obligaţiei, de către autorităţile publice locale, de a efectua amenajări rutiere destinate circulaţiei pietonilor, bicicliştilor, vehiculelor cu tracţiune animală şi calmării traficului, precum şi nesemnalizarea sau semnalizarea necorespunzătoare a acestora;</li>
                                    <li>încredinţarea unui vehicul destinat transportului public de persoane sau de mărfuri pentru a fi condus pe drumurile publice de către un conducător de autovehicul sau tramvai care nu are atestat profesional;</li>
                                    <li>dispunerea efectuării transportului de mărfuri şi produse periculoase sau a vehiculelor cu masa şi/sau gabaritul depăşit fără autorizaţie specială emisă în condiţiile legii ori pe alte trasee decât cele stabilite de autoritatea competentă;</li>
                                    <li>neîndeplinirea obligaţiei de înştiinţare a poliţiei rutiere de pe a cărei rază de competenţă pleacă transportul de mărfuri sau produse periculoase cu privire la traseul stabilit şi localitatea de destinaţie;</li>
                                    <li>neîndeplinirea obligaţiei de către autorităţile administraţiei publice locale de a amenaja drumuri laterale în condiţiile art. 71 alin. (2);</li>
                                    <li>nerespectarea obligaţiei administratorului drumului public sau autorităţii publice locale de a executa sau, după caz, de a desfiinţa amenajările rutiere, în termenul stabilit împreună cu poliţia rutieră;</li>
                                    <li>punerea în aplicare a planurilor de urbanism generale, zonale sau de detaliu, fără ca acestea să fie avizate în prealabil de către administratorul drumului public şi poliţia rutieră;</li>
                                    <li>încălcarea dispoziţiilor legale privind efectuarea de modificări şi completări în certificatul de înmatriculare sau de înregistrare ori în cartea de identitate a vehiculului, precum şi verificarea tehnică periodică a acestuia fără solicitarea prezentării de către proprietar a dovezii existenţei asigurării de răspundere civilă pentru pagube produse terţilor prin accidente de autovehicule;</li>
                                    <li>neîndeplinirea obligaţiei de întreţinere a drumului public pe timp de iarnă, potrivit reglementărilor în vigoare.</li>
                                    <li>nerespectarea obligaţiei de comunicare prevăzute la art. 801 şi la art. 81 alin. (3) sau comunicarea de date inexacte ori incomplete.</li>
                                </ol>

                                <h3>Art. 106</h3>
                                <ol>
                                    <li>Până la expirarea perioadei de suspendare a exercitării dreptului de a conduce, conducătorul de autovehicul, tractor agricol sau forestier şi tramvai trebuie să se prezinte la serviciul poliţiei rutiere care îl are în evidenţă, pentru verificarea cunoaşterii regulilor de circulaţie, după cum urmează:</li>
                                    <ol class="tip_a">
                                        <li>când permisul de conducere i-a fost reţinut pentru conducerea sub influenţa băuturilor alcoolice sau pentru nerespectarea regulilor privind prioritatea de trecere, depăşirea sau trecerea la culoarea roşie a semaforului, dacă prin aceasta s-a produs un accident de circulaţie din care a rezultat avarierea unui vehicul sau alte pagube materiale;</li>
                                        <li>când fapta a fost urmărită ca infracţiune contra siguranţei circulaţiei pe drumurile publice, iar procurorul a dispus clasarea ori renunţarea la urmărirea penală sau instanţa a dispus renunţarea la aplicarea pedepsei ori amânarea aplicării pedepsei;</li>
                                        <li>când a solicitat reducerea perioadei de suspendare a exercitării dreptului de a conduce, conform art. 104.</li>
                                    </ol>
                                    <li>Perioada de suspendare a exercitării dreptului de a conduce autovehicule, tractoare agricole sau forestiere ori tramvaie se prelungeşte cu 30 de zile, dacă titularul permisului de conducere nu promovează testul de cunoaştere a regulilor de circulaţie, în situaţiile prevăzute la alin. (1) lit. a) şi b), sau nu se prezintă la serviciul poliţiei rutiere pentru susţinerea verificării cunoaşterii regulilor de circulaţie.</li>
                                </ol>

                                <h3>Art. 107</h3>
                                <p>Sancţiunile prevăzute la art. 100 alin. (3), art. 101 alin. (3), art. 102 alin. (3), art. 103 alin. (2) şi la art. 106 se aplică şi instructorului auto atestat, aflat în procesul de instruire practică a persoanelor pentru obţinerea permisului de conducere, ori examinatorului aflat în timpul desfăşurării probei practice a examenului pentru obţinerea permisului de conducere.</p>

                                <h3>Art. 108</h3>
                                <ol>
                                    <li>Săvârşirea de către conducătorul de autovehicul, tractor agricol sau forestier ori tramvai a uneia sau mai multor contravenţii atrage, pe lângă sancţiunea amenzii, şi aplicarea unui număr de puncte de penalizare, după cum urmează:</li>
                                    <ol class="tip_a">
                                        <li>2 puncte de penalizare pentru săvârşirea următoarelor fapte:</li>
                                        <ol>
                                            <li>folosirea incorectă a luminilor de drum la întâlnirea cu un autovehicul şi tractor agricol sau forestier care circulă din sens opus;</li>
                                            <li>folosirea telefoanelor mobile în timpul conducerii, cu excepţia celor prevăzute cu dispozitive de tip "mâini libere";</li>
                                            <li>nerespectarea obligaţiei de a purta, în timpul circulaţiei pe drumurile publice, centura de siguranţă ori căştile de protecţie omologate, după caz;</li>
                                            <li>depăşirea cu 10-20 km/h a vitezei maxime admise pe sectorul de drum respectiv pentru categoria din care face parte autovehiculul condus, constatată, potrivit legii, cu mijloace tehnice omologate şi verificate metrologic;</li>
                                            <li>circulaţia pe un sector de drum pe care accesul este interzis;</li>
                                            <li>nerespectarea regulilor privind manevra de întoarcere, mersul înapoi, schimbarea benzii de circulaţie sau a direcţiei de mers;</li>
                                            <li>nerespectarea obligaţiei de a folosi luminile de întâlnire şi pe timpul zilei, pe autostrăzi, drumuri expres şi pe drumuri naţionale europene (E);</li>
                                            <li>oprirea neregulamentară;</li>
                                            <li>folosirea incorectă a luminilor de drum faţă de autovehiculul şi tractorul agricol sau forestier care circulă în faţa sa, în aceeaşi direcţie de mers.</li>
                                        </ol>
                                        <li>3 puncte de penalizare pentru săvârşirea următoarelor fapte:</li>
                                        <ol>
                                            <li>oprirea nejustificată sau circulaţia pe banda de urgenţă a autostrăzilor ori oprirea pe partea carosabilă a drumurilor expres sau a drumurilor naţionale europene (E);</li>
                                            <li>depăşirea cu 21-30 km/h a vitezei maxime admise pe sectorul de drum respectiv pentru categoria din care face parte autovehiculul condus, constatată, potrivit legii, cu mijloace tehnice omologate şi verificate metrologic;</li>
                                            <li>nerespectarea regulilor privind manevra de întoarcere, mersul înapoi, schimbarea benzii de circulaţie sau a direcţiei de mers, dacă prin aceasta s-a produs un accident din care au rezultat avarierea unui vehicul sau alte pagube materiale;</li>
                                            <li>nepăstrarea unei distanţe corespunzătoare faţă de vehiculul care îl precede, dacă prin aceasta s-a produs un accident din care au rezultat avarierea unui vehicul sau alte pagube materiale;</li>
                                            <li>nerespectarea semnificaţiei indicatorului "ocolire", instalat pe refugiul staţiilor de tramvai;</li>
                                            <li>pătrunderea într-o intersecţie atunci când circulaţia în interiorul acesteia este blocată;</li>
                                            <li>staţionarea neregulamentară;</li>
                                            <li>folosirea luminilor de ceaţă în alte condiţii decât pe timp de ceaţă;</li>
                                            <li>nerespectarea obligaţiei conducătorului de autovehicul de se asigura că persoanele minore poartă centuri de siguranţă sau sunt transportate în dispozitive de fixare în scaune pentru copii omologate, în condiţiile prevăzute de regulament;</li>
                                            <li>nerespectarea dispoziţiilor art. 36 alin. (13) sau a condiţiilor prevăzute de regulament privind transportul copiilor în autovehicule care nu sunt echipate cu sisteme de siguranţă;</li>
                                        </ol>
                                        <li>4 puncte de penalizare pentru săvârşirea următoarelor fapte:</li>
                                        <ol>
                                            <li>nerespectarea obligaţiilor care îi revin în cazul vehiculelor rămase în pană sau avariate;</li>
                                            <li>refuzul înmânării actului de identitate, permisului de conducere, certificatului de înmatriculare sau de înregistrare, a celorlalte documente prevăzute de lege, la cererea poliţistului rutier, precum şi refuzul de a permite verificarea vehiculului;</li>
                                            <li>depăşirea cu 31-40 km/h a vitezei maxime admise pe sectorul de drum respectiv pentru categoria din care face parte autovehiculul condus, constatată, potrivit legii, cu mijloace tehnice omologate şi verificate metrologic;</li>
                                            <li>circulaţia în timpul nopţii sau ziua, pe timp de ceaţă, ninsoare abundentă sau ploaie torenţială, cu un autovehicul şi tractor agricol sau forestier fără lumini sau fără semnalizare corespunzătoare;</li>
                                            <li>circulaţia în timpul nopţii sau ziua, pe timp de ceaţă, ninsoare abundentă sau ploaie torenţială, cu un autovehicul şi tractor agricol sau forestier fără lumini sau fără semnalizare corespunzătoare;</li>
                                        </ol>
                                        <li>6 puncte de penalizare pentru săvârşirea următoarelor fapte:</li>
                                        <ol>
                                            <li>refuzul de a permite imobilizarea vehiculului sau verificarea tehnică a acestuia;</li>
                                            <li>nerespectarea semnificaţiei semnalelor regulamentare ale agenţilor de cale ferată care dirijează circulaţia la trecerile la nivel cu calea ferată;</li>
                                            <li>depăşirea cu 41-50 km/h a vitezei maxime admise pe sectorul de drum respectiv pentru categoria din care face parte autovehiculul condus, constatată, potrivit legii, cu mijloace tehnice omologate şi verificate metrologic;</li>
                                            <li>conducerea pe drumurile publice a unui vehicul fără a avea montată una dintre plăcuţele cu numărul de înmatriculare sau de înregistrare ori dacă plăcuţele cu numărul de înmatriculare ori de înregistrare nu sunt fixate în locurile special destinate;</li>
                                            <li>circulaţia sau staţionarea pe spaţiul interzis care separă sensurile de circulaţie pe autostradă;</li>
                                            <li>staţionarea ori parcarea autovehiculelor pe autostradă în alte locuri decât cele special amenajate şi semnalizate;</li>
                                            <li>executarea pe autostradă a manevrei de întoarcere sau de mers înapoi, circulaţia sau traversarea de pe un sens de circulaţie pe celălalt prin zonele interzise, respectiv prin zona mediană sau racordurile dintre cele două părţi carosabile;</li>
                                            <li>nerespectarea semnificaţiei indicatoarelor Trecere la nivel cu o cale ferată simplă, fără bariere; Trecere la nivel cu o cale ferată dublă, fără bariere sau Oprire, instalate la trecerea la nivel cu o cale ferată;</li>
                                            <li>schimbarea direcţiei de mers prin viraj spre stânga, dacă prin aceasta se încalcă marcajul longitudinal continuu care separă sensurile de circulaţie;</li>
                                            <li>pătrunderea într-o intersecţie dirijată prin semafoare, dacă prin aceasta se produce blocarea circulaţiei în interiorul intersecţiei.</li>
                                        </ol>
                                    </ol>
                                    <li>Procedura de înregistrare a punctelor de penalizare se stabileşte prin regulament.</li>
                                </ol>

                                <h3>Art. 109</h3>
                                <ol>
                                    <li>Constatarea contravenţiilor şi aplicarea sancţiunilor se fac direct de către poliţistul rutier, iar în punctele de trecere a frontierei de stat a României, de către poliţiştii de frontieră.</li>
                                    <li>Constatarea contravenţiilor se poate face şi cu ajutorul unor mijloace tehnice certificate sau mijloace tehnice omologate şi verificate metrologic, consemnându-se aceasta în procesul-verbal de constatare a contravenţiei.</li>
                                    <li>În cazurile prevăzute la alin. (2), procesul-verbal se poate încheia şi în lipsa contravenientului, după stabilirea identităţii conducătorului de vehicul, menţionându-se aceasta în procesul-verbal, fără a fi necesară confirmarea faptelor de către martori.</li>
                                    <li>Forma şi conţinutul procesului-verbal de constatare a contravenţiei se stabilesc prin regulament.</li>
                                    <li>Contravenientul, cu excepţia persoanei juridice, poate achita, în termen de cel mult două zile lucrătoare de la data primirii procesului-verbal de constatare a contravenţiei, jumătate din minimul amenzii prevăzute de lege.</li>
                                    <li>Pentru amenzile contravenţionale în cuantum de până la 20 puncte-amendă, contravenientul poate achita pe loc agentului constatator jumătate din minimul amenzii prevăzute de lege.</li>
                                    <li>În cazul prevăzut la alin. (6), agentul constatator eliberează contravenientului chitanţa reprezentând contravaloarea amenzii, în care se menţionează data, numele şi prenumele contravenientului, fapta săvârşită, actul normativ care stabileşte şi sancţionează contravenţia, numele, prenumele şi semnătura agentului constatator, nemaifiind necesară încheierea procesului-verbal de constatare a contravenţiei dacă nu se dispune şi o sancţiune contravenţională complementară.</li>
                                    <li>Amenzile privind circulaţia pe drumurile publice se achită în condiţiile legii şi se fac venit integral la bugetele locale.</li>
                                    <li>Prevederile prezentei ordonanţe de urgenţă referitoare la contravenţii se completează cu cele ale Ordonanţei Guvernului nr. 2/2001 privind regimul juridic al contravenţiilor, aprobată cu modificări şi completări prin Legea nr. 180/2002, cu modificările şi completările ulterioare, dacă prin prezenta ordonanţă de urgenţă nu se dispune altfel.</li>
                                </ol>

                                <h3>Art. 110</h3>
                                <p>În cazul în care împotriva titularului permisului de conducere s-a luat măsura de siguranţă prevăzută la art. 108 lit. c) din Codul penal, suspendarea exercitării dreptului de a conduce se dispune pe întreaga perioada cât durează interzicerea dreptului de a exercita profesia sau ocupaţia de conducător de autovehicul.</p>

                                <h3>Art. 111</h3>
                                <ol>
                                    <li>Permisul de conducere sau dovada înlocuitoare a acestuia se reţine în următoarele cazuri:</li>
                                    <ol class="tip_a">
                                        <li>la cumularea a cel puţin 15 puncte de penalizare;</li>
                                        <li>când titularul acestuia a săvârşit una dintre infracţiunile prevăzute la art. 334, art. 335 alin. (2), art. 336, 337, art. 338 alin. (1) şi la art. 339 alin. (2), (3) şi (4) din Codul penal;</li>
                                        <li>la săvârşirea uneia dintre contravenţiile prevăzute la art. 100 alin. (3), art. 101 alin. (3), art. 102 alin. (3) şi în situaţia prevăzută la art. 115 alin. (1);</li>
                                        <li>când titularul acestuia a fost declarat inapt pentru a conduce autovehicule, tractoare agricole sau forestiere ori tramvaie;</li>
                                        <li>când prezintă modificări, ştersături sau adăugări ori este deteriorat;</li>
                                        <li>când se află în mod nejustificat asupra altei persoane;</li>
                                        <li>când perioada de valabilitate a expirat.</li>
                                    </ol>
                                    <li>La reţinerea permisului de conducere, în cazurile prevăzute la alin. (1), titularului acestuia i se eliberează o dovadă înlocuitoare cu sau fără drept de circulaţie.</li>
                                    <li>În situaţiile prevăzute la alin. (1) lit. a) şi d), la art. 102 alin. (3) lit. a) şi c) din prezenta ordonanţă de urgenţă, precum şi în cele menţionate la art. 334 alin. (2) şi (4), art. 335 alin. (2), art. 336, 337, art. 338 alin. (1), art. 339 alin. (2), (3) şi (4) din Codul penal, dovada înlocuitoare a permisului de conducere se eliberează fără drept de circulaţie.</li>
                                    <li>Permisul de conducere al conducătorului de autovehicul, tractor agricol sau forestier ori tramvai, implicat într-un accident de circulaţie din care a rezultat uciderea sau vătămarea corporală a unei persoane, se reţine de către poliţia rutieră dacă acesta a încălcat o regulă de circulaţie, eliberându-se dovada înlocuitoare fără drept de circulaţie, în situaţia în care regula de circulaţie încălcată este una dintre cele prevăzute la art. 102 alin. (3) lit. a) şi c), sau dovada înlocuitoare cu drept de circulaţie pentru o perioadă de 15 zile, în celelalte cazuri.</li>
                                    <li>În situaţiile prevăzute la alin. (1) lit. e) şi g) şi la alin. (3) lit. b) şi e) din prezenta ordonanţă de urgenţă, la art. 100 alin. (3), la art. 101 alin. (3), precum şi la art. 334 alin. (1) şi (3) din Codul penal, dovada înlocuitoare a permisului de conducere se eliberează cu drept de circulaţie pentru o perioadă de 15 zile.</li>
                                    <li>La cererea titularului permisului de conducere reţinut în condiţiile alin. (1) lit. b) sau ale alin. (4), procurorul care efectuează urmărirea penală sau exercită supravegherea cercetării penale ori, în faza de judecată, instanţa de judecată învestită cu soluţionarea cauzei poate dispune prelungirea dreptului de circulaţie, cu câte cel mult 30 de zile, până la dispunerea neînceperii urmăririi penale, scoaterii de sub urmărire penală ori încetării urmăririi penale sau, după caz, până la rămânerea definitivă a hotărârii judecătoreşti. Modul de soluţionare a cererii de prelungire a dreptului de circulaţie se comunică şi şefului poliţiei rutiere pe raza căreia s-a comis fapta.</li>
                                    <li>Alineatele (3)-(5) se aplică în mod corespunzător şi în situaţia în care se reţine dovada înlocuitoare a permisului reţinut pentru o faptă săvârşită anterior, aflată în termenul de valabilitate. Termenul de valabilitate al noii dovezi nu îl poate depăşi pe cel al primei dovezi.</li>
                                </ol>

                                <h3>Art. 112</h3>
                                <ol>
                                    <li>Certificatul de înmatriculare sau de înregistrare ori dovada înlocuitoare a acestuia se reţine de către poliţia rutieră în următoarele cazuri:</li>
                                    <ol class="tip_a">
                                        <li>vehiculul nu are efectuată inspecţia tehnică periodică valabilă;</li>
                                        <li>nu sunt respectate normele tehnice constructive referitoare la transportul produselor periculoase;</li>
                                        <li>vehiculul circulă noaptea fără faruri sau lămpi de semnalizare, dispozitivele de iluminare şi semnalizare luminoase, mijloacele fluorescent-reflectorizante, prevăzute în normele tehnice în vigoare;</li>
                                        <li>vehiculul circulă cu defecţiuni majore la sistemele de iluminare-semnalizare sau cu alte dispozitive decât cele omologate;</li>
                                        <li>sistemul de frânare de serviciu este defect;</li>
                                        <li>sistemul de frânare de ajutor sau de staţionare este defect;</li>
                                        <li>mecanismul de direcţie prezintă uzuri peste limitele admise;</li>
                                        <li>anvelopele au alte dimensiuni sau caracteristici decât cele prevăzute în cartea de identitate a vehiculului, prezintă tăieturi sau rupturi ale cordului ori sunt uzate peste limita legal admisă;</li>
                                        <p>h<sup>1</sup>. autovehiculul nu este dotat, la circulaţia pe drumurile publice acoperite cu zăpadă, gheaţă sau polei, cu anvelope de iarnă, iar autovehiculul de transport marfă cu o masă totală maximă autorizată mai mare de 3,5 tone şi autovehiculul de transport persoane cu mai mult de 9 locuri pe scaune, inclusiv cel al conducătorului auto, nu sunt echipate cu anvelope de iarnă pe roţile axei/axelor de tracţiune ori nu au montate pe aceste roţi lanţuri sau alte echipamente antiderapante certificate;</p>
                                        <li>zgomotul în mers sau staţionare depăşeşte limita legal admisă pentru tipul respectiv de vehicul;</li>
                                        <li>motorul emite noxe poluante peste limitele legal admise;</li>
                                        <li>elementele dispozitivului de cuplare pentru remorcare prezintă uzuri pronunţate ori nu sunt compatibile, fiind de natură să provoace desprinderea remorcii sau dezechilibrarea ansamblului;</li>
                                        <li>autovehiculul, tractorul agricol sau forestier ori tramvaiul au aplicate pe parbriz, lunetă sau geamurile laterale afişe sau reclame publicitare, folii neomologate şi/sau nemarcate corespunzător ori accesorii care restrâng sau estompează vizibilitatea în timpul mersului, atât din interior, cât şi din exterior;</li>
                                        <li>autovehiculul şi tractorul agricol sau forestier au aplicate pe partea frontală şi/sau posterioară a acestuia afişe, înscrisuri sau reclame care diminuează eficacitatea dispozitivelor de iluminare şi semnalizare luminoasă ori citirea numărului de înmatriculare;</li>
                                        <li>autovehiculul şi tractorul agricol sau forestier prezintă scurgeri semnificative de carburant sau lubrifiant;</li>
                                        <li>plăcuţele cu numărul de înmatriculare sau de înregistrare nu sunt conforme cu standardul ori au aplicate dispozitive de iluminare, altele decât cele omologate;</li>
                                        <li>datele din certificatul de înmatriculare sau de înregistrare nu concordă cu caracteristicile tehnice ale vehiculului;</li>
                                        <li></li>
                                        <li>vehiculul nu a fost radiat din circulaţie în cazurile prevăzute în prezenta ordonanţă de urgenţă;</li>
                                        <li>vehiculul nu este asigurat de răspundere civilă în caz de pagube produse terţilor prin accidente de circulaţie, conform legii;</li>
                                        <li>deţinătorul vehiculului nu a preschimbat certificatul de înmatriculare sau de înregistrare, în conformitate cu prevederile legale;</li>
                                        <li>vehiculul nu are montată una dintre plăcuţele cu numărul de înmatriculare sau de înregistrare;</li>
                                        <li>vehiculul are lipsă elemente ale caroseriei ori aceasta este într-o stare avansată de degradare;</li>
                                        <li></li>
                                        <li>lipsa dotărilor obligatorii pe autovehicule şi tractoare agricole sau forestiere destinate învăţării conducerii autovehiculelor în procesul instruirii persoanelor în vederea obţinerii permisului de conducere, prevăzute de reglementările în vigoare.</li>
                                    </ol>
                                    <li>În situaţiile prevăzute la alin. (1) lit. b), c), e), g), h1), k), o), p), r) şi s), la reţinerea certificatului de înmatriculare sau de înregistrare, poliţistul rutier eliberează conducătorului de vehicul o dovadă înlocuitoare fără drept de circulaţie, iar în cazurile prevăzute la alin. (1) lit. a), d), f), h), i), j), l), m), n), t), u), v) şi x), o dovadă înlocuitoare cu drept de circulaţie pentru 15 zile.</li>
                                    <li>În situaţiile prevăzute la alin. (1) lit. b), o), p), r) şi s), odată cu reţinerea certificatului de înmatriculare poliţistul rutier retrage şi plăcuţele cu numărul de înmatriculare sau de înregistrare.</li>
                                    <li>Certificatul de înmatriculare sau de înregistrare şi plăcuţele cu numărul de înmatriculare sau de înregistrare, cu excepţia celor care nu corespund standardelor, se restituie proprietarului sau utilizatorului vehiculului de către poliţia rutieră, la prezentarea de către acesta a dovezii încetării motivului pentru care documentul a fost reţinut, în condiţiile prevăzute în regulament.</li>
                                </ol>

                                <h3>Art. 113</h3>
                                <ol>
                                    <li>Permisul de conducere se restituie titularului:</li>
                                    <ol class="tip_a">
                                        <li>la expirarea perioadei de suspendare;</li>
                                        <li>Abrogat</li>
                                        <li>la încetarea măsurii de siguranţă prevăzute la art. 108 lit. c) din Codul penal;</li>
                                        <li>Abrogat</li>
                                        <li>în baza hotărârii judecătoreşti rămase definitive prin care s-a dispus achitarea inculpatului ori procesul-verbal de constatare a contravenţiei a fost anulat;</li>
                                        <li>la încetarea cauzelor pentru care a fost retras permisul de conducere în condiţiile art. 97 alin. (4), certificată printr-un act medico-legal.</li>
                                    </ol>
                                    <p>1<sup>1</sup>. Titularul permisului de conducere eliberat de o autoritate străină, împotriva căruia s-a dispus suspendarea dreptului de a conduce, poate solicita şefului poliţiei rutiere pe raza căreia a fost constatată fapta, restituirea documentului, înainte de expirarea perioadei de suspendare, cu cel mult o zi lucrătoare înainte de data părăsirii teritoriului României.</p>
                                    <p>1<sup>2</sup>. În situaţia restituirii permisului de conducere potrivit alin. (11), Inspectoratul General al Poliţiei Române comunică sancţiunea aplicată autorităţii străine care a eliberat documentul.</p>
                                    <li>Permisul de conducere se restituie de către poliţia rutieră în condiţiile stabilite în regulament.</li>
                                </ol>

                                <h3>Art. 114</h3>
                                <ol>
                                    <li>Anularea permisului de conducere se dispune în următoarele cazuri:</li>
                                    <ol class="tip_a">
                                        <li>titularul permisului de conducere a fost condamnat printr-o hotărâre judecătorească rămasă definitivă pentru o infracţiune care a avut ca rezultat uciderea sau vătămarea corporală a unei persoane, săvârşită ca urmare a nerespectării regulilor de circulaţie;</li>
                                        <li>titularul permisului de conducere a fost condamnat, printr-o hotărâre judecătorească rămasă definitivă, pentru infracţiunile prevăzute la art. 334 alin. (2) şi (4), art. 335 alin. (2), art. 336, 337, art. 338 alin. (1), art. 339 alin. (2), (3) şi (4) din Codul penal;</li>
                                        <li>Abrogat</li>
                                        <li>titularului permisului de conducere i s-a aplicat, printr-o hotărâre judecătorească rămasă definitivă, pedeapsa complementară a interzicerii dreptului de a conduce anumite categorii de vehicule stabilite de instanţă prevăzută la art. 66 alin. (1) lit. i) din Codul penal.</li>
                                        <li>permisul de conducere a fost obţinut cu încălcarea normelor legale, situaţie constatată de instanţa competentă.</li>
                                        <li>permisul de conducere a fost obţinut în perioada în care titularul era cercetat sau judecat în cadrul unui proces penal pentru săvârşirea unei infracţiuni la regimul circulaţiei pe drumurile publice, atunci când acesta a fost condamnat printr-o hotărâre judecătorească rămasă definitivă.</li>
                                    </ol>
                                    <li>Permisul de conducere se anulează şi în cazul în care titularul acestuia a decedat.</li>
                                    <li>Procedura anulării permisului de conducere se stabileşte prin regulament.</li>
                                </ol>

                                <h3>Art. 115</h3>
                                <ol>
                                    <li>Suspendarea exercitării dreptului de a conduce sau anularea permisului de conducere se dispune de către poliţia rutieră din cadrul Inspectoratului General al Poliţiei Române şi în cazul în care împotriva titularului acestuia s-a hotărât o astfel de măsură de către o autoritate străină competentă pentru o faptă săvârşită pe teritoriul altui stat, în condiţiile stabilite prin Convenţia europeană cu privire la efectele internaţionale ale interzicerii exercitării dreptului de a conduce un vehicul cu motor, adoptată la Bruxelles la 3 iunie 1976, ratificată de România prin Legea nr. 126/1997.</li>
                                    <li>Hotărârea asupra suspendării exercitării dreptului de a conduce un vehicul sau anulării permisului de conducere se comunică titularului de către poliţia rutieră care a dispus măsura.</li>
                                </ol>

                                <h3>Art. 116</h3>
                                <ol>
                                    <li>Persoana al cărei permis de conducere a fost anulat ca urmare a rămânerii definitive a unei hotărâri judecătoreşti de condamnare pentru una dintre faptele prevăzute la art. 114 alin. (1) şi la art. 115 alin. (1) se poate prezenta la examen pentru obţinerea unui nou permis de conducere, pentru toate categoriile avute anterior, după caz, dacă a intervenit una dintre situaţiile următoare:</li>
                                    <ol class="tip_a">
                                        <li>au trecut 6 luni de la data executării pedepsei amenzii sau a pedepsei în regim de privare de libertate ori la locul de muncă;</li>
                                        <li>a trecut un an de la data graţierii pedepsei sau a rămânerii definitive a hotărârii judecătoreşti prin care s-a dispus suspendarea executării pedepsei sub supraveghere;</li>
                                        <li>a intervenit amnistia;</li>
                                        <li>interzicerea dreptului de a conduce anumite categorii de vehicule stabilite de instanţă prevăzută la art. 66 alin. (1) lit. i) din Codul penal, a expirat sau a fost revocată.</li>
                                    </ol>
                                    <li>Persoana căreia i-a fost anulat permisul de conducere, înainte de intrarea în vigoare a prezentei ordonanţe de urgenţă, ca urmare a săvârşirii, într-un interval de 6 luni de la restituirea permisului de conducere, a unei fapte care atrăgea suspendarea exercitării dreptului de a conduce, se poate prezenta la examen în vederea obţinerii unui nou permis de conducere, fără a fi necesară trecerea vreunui termen de la data aplicării măsurii administrative.</li>
                                    <p>2<sup>1</sup>.  Persoana căreia i-a fost anulat permisul de conducere, ca urmare a condamnării pentru o infracţiune care a fost dezincriminată, în condiţiile art. 4 din Codul penal, se poate prezenta la autoritatea competentă pe raza căreia îşi are domiciliul sau reşedinţa, pentru eliberarea unui nou permis de conducere, în condiţiile ordinului ministrului afacerilor interne prevăzut la art. 24 alin. (53), fără a mai susţine examen şi cu prezentarea documentului care atestă o astfel de situaţie.</p>
                                    <p>2<sup>2</sup>. În situaţia în care anularea permisului de conducere nu a fost dispusă până la depunerea cererii de restituire de către titularul permisului de conducere, condamnat definitiv pentru o infracţiune care a fost dezincriminată, în condiţiile art. 4 din Codul penal, şeful serviciului rutier competent dispune restituirea acestuia, în baza documentului care atestă o astfel de situaţie.</p>
                                    <li>Pentru prezentarea la examen în vederea obţinerii unui nou permis de conducere, persoana aflată în una dintre situaţiile prevăzute la alin. (1) şi (2) trebuie să facă dovada că:</li>
                                    <ol class="tip_a">
                                        <li>este aptă din punct de vedere medical;</li>
                                        <li>nu a fost condamnată prin hotărâre judecătorească rămasă definitivă pentru una dintre infracţiunile prevăzute la art. 24 alin. (6), cu excepţia cazurilor în care a intervenit una dintre situaţiile prevăzute la alin. (1).</li>
                                    </ol>
                                </ol>

                                <h3>Art. 117</h3>
                                <ol>
                                    <li>Imobilizarea unui vehicul se dispune de către poliţistul rutier în cazul săvârşirii de către conducătorul acestuia a uneia dintre următoarele fapte:</li>
                                    <ol class="tip_a">
                                        <li>conducerea unui vehicul neînmatriculat sau neînregistrat ori cu număr de înmatriculare sau de înregistrare fals ori fără a avea montate plăcuţele cu numărul de înmatriculare sau de înregistrare;</li>
                                        <li>conducerea unui vehicul a cărui stare tehnică pune în pericol grav siguranţa circulaţiei, deteriorează drumul public sau afectează mediul;</li>
                                        <li>conducerea unui vehicul cu încălcarea regulilor referitoare la transportul mărfurilor periculoase ori cu gabarite şi/sau mase depăşite;</li>
                                        <li>conducerea unui vehicul despre care există date sau indicii că face obiectul unei fapte de natură penală;</li>
                                        <li>refuză să se legitimeze;</li>
                                        <li>se află sub influenţa băuturilor alcoolice, a substanţelor psihoactive, iar conducerea vehiculului nu poate fi asigurată de o altă persoană;</li>
                                        <li>nu respectă timpii de conducere şi de odihnă prevăzuţi de lege.</li>
                                    </ol>
                                    <li>Imobilizarea unui vehicul se dispune şi în cazul în care conducătorul acestuia ori unul dintre pasageri săvârşeşte o faptă de natură penală sau este urmărit pentru săvârşirea unei infracţiuni.</li>
                                    <li>Pentru oprirea forţată sau imobilizarea în cazurile prevăzute la alin. (1) şi (2), poliţia rutieră poate utiliza dispozitive speciale omologate.</li>
                                    <li>Procedura de imobilizare a vehiculelor în cazurile prevăzute la alin. (1) şi (2) se stabileşte prin regulament.</li>
                                </ol>
                                <form method="post" action="capitolTerminat.php">
                                <input class="buton-verif" type="submit" name="progres-raspunderea" value="Finalizeaza capitol" onclick="showImage(7)">  
                            </form>

                            </span>

                            <span id="pg8">

                                <div class="titlu-partea-dreapta">
                                    <h1>CAI DE ATAC IMPOTRIVA PROCESULUI VERBAL DE CONSTATARE A CONTRAVENTIEI</h1>
                                </div>

                                <h3>Art. 118</h3>
                                <ol>
                                    <li>Împotriva procesului-verbal de constatare a contravenţiilor se poate depune plângere, în termen de 15 zile de la comunicare, la judecătoria în a cărei rază de competenţă a fost constatată fapta.</li>
                                    <li>Plângerea suspendă executarea amenzilor şi a sancţiunilor contravenţionale complementare de la data înregistrării acesteia până la data pronunţării hotărârii judecătoreşti.</li>
                                    <li>Dovada înregistrării plângerii depuse la judecătorie în termenul prevăzut la alin. (1) se prezintă de contravenient la unitatea de poliţie din care face parte agentul constatator, care va efectua menţiunile în evidenţe şi îi va restitui permisul de conducere.</li>
                                    <li>În termen de 15 zile de la data pronunţării hotărârii judecătoreşti prin care instanţa a respins plângerea împotriva procesului-verbal de constatare a contravenţiei, contravenientul este obligat să se prezinte la serviciul poliţiei rutiere care îl are în evidenţă pentru a preda permisul de conducere.</li>
                                    <li>Neprezentarea contravenientului în termenul prevăzut la alin. (4), în mod nejustificat, atrage majorarea cu 30 de zile a duratei de suspendare a exercitării dreptului de a conduce.</li>
                                </ol>

                                <h3>Art. 119</h3>
                                <p>În cazul în care fapta unui conducător de autovehicul, tractor agricol sau forestier ori tramvai a avut ca urmare producerea unui accident de circulaţie, instanţa de judecată învestită cu soluţionarea cauzei va cita unitatea de poliţie din care face parte agentul constatator, părţile implicate în eveniment şi societatea de asigurare.</p>

                                <h3>Art. 120</h3>
                                <ol>
                                    <li>Procesul-verbal neatacat în termen de 15 zile de la data comunicării acestuia, precum şi, după caz, hotărârea judecătorească prin care s-a soluţionat plângerea constituie titluri executorii, fără vreo altă formalitate.</li>
                                    <li>Procesele-verbale ale cetăţenilor străini sau ale cetăţenilor români cu domiciliul sau, după caz, rezidenţa normală în străinătate, devenite titlu executoriu, se comunică de către poliţia rutieră pe raza căreia s-a produs fapta, Inspectoratului General al Poliţiei Române.</li>
                                    <li>Poliţia rutieră din cadrul Inspectoratului General al Poliţiei Române comunică în scris Inspectoratului General al Poliţiei de Frontieră, în cel mult 6 luni de la primirea titlului executoriu, numele şi prenumele contravenientului, numărul paşaportului şi al procesului-verbal de constatare a contravenţiei, precum şi suma datorată, pentru a fi luate în evidenţă şi a fi condiţionată intrarea pe teritoriul României a contravenientului.</li>
                                </ol>

                                <h3>Art. 121</h3>
                                <ol>
                                    <li>Abrogat</li>
                                    <li>Executarea sancţiunii contravenţionale complementare se prescrie în acelaşi termen în care se prescrie sancţiunea contravenţională principală.</li>
                                </ol>
                                <form method="post" action="capitolTerminat.php">
                                <input class="buton-verif" type="submit" name="progres-cai" value="Finalizeaza capitol" onclick="showImage(8)">  
                            </form>
                            </span>

                                <span id="pg9" onscroll="scrolled(this)">

                                    <div class="titlu-partea-dreapta">
                                        <h1>ATRIBUTII ALE UNOR MINISTERE SI ALE ALTOR  AUTORITATI ALE ADMINISTRATIEI PUBLICE</h1>
                                    </div>

                                    <h3>Art. 122</h3>
                                    <p>Ministerul Transporturilor, Construcţiilor şi Turismului are următoarele atribuţii:</p>
                                    <ol class="tip_a">
                                        <li>ia măsuri pentru menţinerea permanentă în stare tehnică bună a drumurilor pe care le administrează;</li>
                                        <li>ia măsuri pentru instalarea, aplicarea şi întreţinerea mijloacelor de semnalizare rutieră, precum şi a echipamentelor destinate siguranţei circulaţiei pe drumurile din administrarea sa, cu respectarea standardelor în vigoare;</li>
                                        <li>autorizează efectuarea lucrărilor în zonele de siguranţă şi protecţie a drumurilor din administrarea sa, verifică modul de executare şi respectarea termenelor stabilite;</li>
                                        <li>stabileşte condiţiile tehnice şi metodologia de omologare şi certificare a echipamentelor, pieselor de schimb şi materialelor de exploatare pentru vehicule;</li>
                                        <li>autorizează înfiinţarea şi funcţionarea staţiilor de inspecţie tehnică periodică, supraveghează şi controlează activitatea acestora şi atestă personalul care efectuează inspecţia tehnică periodică;</li>
                                        <li>stabileşte norme metodologice şi organizează pregătirea, examinarea şi atestarea profesională a instructorilor şi profesorilor de legislaţie în domeniul pregătirii candidaţilor pentru obţinerea permisului de conducere, în condiţiile legii;</li>
                                        <li>stabileşte condiţiile tehnice şi metodologice de omologare pentru circulaţia pe drumurile publice a vehiculelor, de inspecţie tehnică periodică, de certificare a autenticităţii, de identificare, precum şi de verificare tehnică în trafic a vehiculelor;</li>
                                        <li>autorizează înfiinţarea şi funcţionarea şcolilor pentru pregătirea conducătorilor de autovehicule şi tractoare agricole sau forestiere;</li>
                                        <li>stabileşte norme obligatorii privind organizarea şi desfăşurarea transporturilor rutiere şi controlează respectarea acestora;</li>
                                        <li>elaborează reglementări specifice în domeniul transporturilor rutiere;</li>
                                        <li>omologhează vehicule pentru circulaţie;</li>
                                        <li>certifică şi/sau omologhează echipamentele, piesele de schimb şi materialele de exploatare pentru vehiculele fabricate în ţară sau importate;</li>
                                        <li>autorizează agenţii economici care desfăşoară activităţi de reparaţii, de reglări, de modificări constructive, de reconstrucţie a vehiculelor, precum şi de dezmembrare a acestora;</li>
                                        <li>asigură efectuarea certificării autenticităţii sau a identificării vehiculelor rutiere, în vederea înmatriculării acestora;</li>
                                        <li>asigură eliberarea cărţii de identitate a vehiculelor rutiere;</li>
                                        <li>stabileşte normele metodologice şi organizează pregătirea şi examinarea conducătorilor auto, în vederea obţinerii certificatelor de atestare profesională.</li>
                                        <li>elaborează, în condiţiile legii, norme privind evaluarea capacităţilor psihologice solicitate în activitatea de conducere a autovehiculelor, tractoarelor agricole sau forestiere ori tramvaielor.</li>
                                    </ol>

                                    <h3>Art. 123</h3>
                                    <p>Ministerul Apărării are următoarele atribuţii:</p>
                                    <ol class="tip_a">
                                        <li>îndrumă, supraveghează şi controlează circulaţia pe drumurile publice a vehiculelor aparţinând acestui minister şi controlează respectarea de către conducătorii de vehicule din subordine a regulilor de circulaţie;</li>
                                        <li>cooperează cu poliţia rutieră pentru realizarea acţiunilor de însoţire a coloanelor oficiale militare, precum şi a vehiculelor din parcul propriu;</li>
                                        <li>înregistrează vehiculele din parcul propriu şi ţine evidenţa acestora;</li>
                                        <li>pregăteşte personalul din subordine pentru conducerea vehiculelor ministerului şi autorizează personalul didactic din şcolile de pregătire a conducătorilor auto din sistemul propriu, în vederea obţinerii permisului de conducere;</li>
                                        <li>organizează şi execută inspecţia tehnică periodică a vehiculelor din unităţile aflate în subordinea sa;</li>
                                        <li>elaborează, împreună cu Ministerul Administraţiei şi Internelor, norme privind condiţiile în care pot circula pe drumul public vehiculele speciale de luptă din parcul propriu;</li>
                                        <li>elaborează, împreună cu Ministerul Administraţiei şi Internelor, norme privind controlul circulaţiei autovehiculelor aparţinând Ministerului Apărării şi însoţirea coloanelor militare.</li>
                                    </ol>

                                    <h3>Art. 124</h3>
                                    <p>Ministerul Educaţiei şi Cercetării are următoarele atribuţii:</p>
                                    <ol class="tip_a">
                                        <li>asigură, prin programa şcolară, educaţia rutieră a preşcolarilor şi elevilor din învăţământul preuniversitar;</li>
                                        <li>asigură, în unităţile de învăţământ specializate, pregătirea cursanţilor în vederea obţinerii permisului de conducere;</li>
                                        <li>îndrumă, coordonează şi controlează, prin inspectoratele şcolare, activitatea de educaţie rutieră în unităţile de învăţământ, inclusiv de pregătire şi de perfecţionare a cadrelor didactice desemnate să execute astfel de activităţi;</li>
                                        <li>asigură materialul didactic pentru laboratoarele de educaţie rutieră şi parcurile-şcoală proprii de circulaţie.</li>
                                    </ol>

                                    <h3>Art. 125</h3>
                                    <p>Ministerul Sănătăţii Publice are următoarele atribuţii:</p>
                                    <ol class="tip_a">
                                        <li>elaborează norme referitoare la examinarea medicală a candidaţilor la examenul pentru obţinerea permisului de conducere şi a conducătorilor de vehicule;</li>
                                        <li>stabileşte măsurile ce trebuie luate de unităţile sanitare, în scopul prevenirii accidentelor de circulaţie generate de cauze medicale;</li>
                                        <li>elaborează norme privind examinarea medicală a conducătorilor de autovehicule, tractoare agricole sau forestiere şi tramvaie, precum şi norme privind prelevarea probelor biologice în vederea stabilirii intoxicaţiei etilice şi a stării de influenţă a substanţelor psihoactive asupra comportamentului conducătorilor de autovehicule, tractoare agricole sau forestiere şi tramvaie;</li>
                                        <li>stabileşte semnul distinctiv ce se aplică pe ambalajul medicamentelor contraindicate conducerii vehiculelor;</li>
                                        <li>stabileşte şi certifică conţinutul truselor medicale de prim ajutor.</li>
                                    </ol>

                                    <h3>Art. 126</h3>
                                    <p>Comisia pentru Supraveghere a Asigurărilor împreună cu poliţia rutieră întocmesc programe de prevenţie rutieră şi îndrumă, coordonează şi controlează modul de aplicare a acestora. Fondurile necesare desfăşurării acestor programe se asigură de către Comisia de Supraveghere a Asigurărilor împreună cu societăţile de asigurare autorizate.</p>

                                    <h3>Art. 127</h3>
                                    <ol>
                                        <li>În scopul coordonării unei strategii unitare, multidisciplinare în domeniul siguranţei circulaţiei rutiere, în subordinea Guvernului funcţionează Consiliul Interministerial pentru Siguranţa Rutieră.</li>
                                        <li>Atribuţiile Consiliului Interministerial pentru Siguranţa Rutieră se stabilesc prin hotărâre a Guvernului.</li>
                                    </ol>

                                    <h3>Art. 128</h3>
                                    <ol>
                                        <li>Autorităţile administraţiei publice locale au următoarele atribuţii:</li>
                                        <ol class="tip_a">
                                        <li>iau măsuri pentru menţinerea permanentă în stare tehnică bună a drumurilor pe care le administrează, precum şi pentru iluminarea corespunzătoare a acestora, conform legii;</li>
                                        <li>iau măsuri pentru instalarea, aplicarea şi întreţinerea mijloacelor de semnalizare rutieră şi a echipamentelor destinate siguranţei circulaţiei, conform standardelor în vigoare, ţinând evidenţa acestora;</li>
                                        <li>întocmesc şi actualizează planurile de organizare a circulaţiei pentru localităţile urbane şi iau măsuri pentru realizarea lucrărilor ce se impun în vederea asigurării fluenţei şi siguranţei traficului, precum şi a reducerii nivelurilor de emisii poluante, cu avizul poliţiei rutiere;</li>
                                        <li>stabilesc reglementări referitoare la regimul de acces şi circulaţie, staţionare şi parcare pentru diferite categorii de vehicule, cu avizul poliţiei rutiere;</li>
                                        <li>iau măsuri pentru amenajarea de trotuare şi drumuri laterale pentru circulaţia pietonilor, vehiculelor cu tracţiune animală, a tractoarelor agricole sau forestiere, de piste pentru biciclete, precum şi de benzi destinate exclusiv transportului public de persoane pe drumurile pe care le administrează, cu avizul poliţiei rutiere;</li>
                                        <li>înregistrează şi ţin evidenţa vehiculelor nesupuse înmatriculării;</li>
                                        <li>iau măsuri pentru ridicarea şi depozitarea, în spaţii special amenajate, a autovehiculelor, remorcilor, caroseriilor sau subansamblurilor acestora, devenite improprii din punct de vedere tehnic pentru a circula pe drumurile publice, abandonate sau părăsite pe domeniul public;</li>
                                        <li>iau măsuri pentru asigurarea spaţiului şi depozitării vehiculelor cu tracţiune animală, depistate circulând pe drumurile publice pe care le este interzis accesul;</li>
                                        <li>sprijină activităţile organizate de Ministerul Educaţiei şi Cercetării şi de Ministerul Administraţiei şi Internelor pentru educaţia rutieră a elevilor.</li>
                                    </ol>
                                    <li>Proiectele de sistematizare a localităţilor, de reglementare a circulaţiei, precum şi a drumurilor publice din interiorul şi din afara acestora, elaborate de autorităţile publice locale, vor fi avizate de şeful poliţiei rutiere a judeţului, municipiului Bucureşti sau, după caz, al poliţiei rutiere din Inspectoratul General al Poliţiei Române.</li>
                                    </ol>

                                    <h3>Art. 129</h3>
                                    <ol>
                                        <li>Ministerul Administraţiei şi Internelor şi autorităţile administraţiei publice locale iau măsuri pentru popularizarea regulilor de circulaţie în rândul tuturor persoanelor care folosesc drumurile publice şi în acest scop vor prevedea în planurile anuale fondurile necesare.</li>
                                        <li>În unităţile de învăţământ preşcolar, primar şi gimnazial obligatoriu se desfăşoară cel puţin o oră de educaţie rutieră pe săptămână, pe parcursul anului şcolar.</li>
                                        <li>Mass-media poate sprijini acţiunile Ministerului Administraţiei şi Internelor şi ale autorităţilor administraţiei publice locale în legătură cu popularizarea regulilor de circulaţie pe drumurile publice.</li>
                                        <li>Poliţia rutieră din cadrul Inspectoratului General al Poliţiei Române se va implica în realizarea programelor de siguranţă rutieră, stabilite de Comisia Economică pentru Europa a Organizaţiei Naţiunilor Unite.</li>
                                    </ol>

                                    <h3>Art. 130</h3>
                                    <p>Orele de educaţie rutieră din instituţiile de învăţământ preşcolar, primar şi gimnazial se desfăşoară potrivit programei aprobate prin ordin comun al ministrului educaţiei şi cercetării şi al ministrului administraţiei şi internelor, care se publică în Monitorul Oficial al României, Partea I.</p>
                                    
                                    <form method="post" action="capitolTerminat.php">
                                <input class="buton-verif" type="submit" name="progres-atributii" value="Finalizeaza capitol" onclick="showImage(9)">  
                            </form>
                                </span>
                                
                                <span id="pg10">

                                    <div class="titlu-partea-dreapta">
                                        <h1>DISPOZITII FINALE SI ANEXA</h1>
                                    </div>

                                    <h3>Art. 131</h3>
                                    <p>În desfăşurarea activităţilor de prevenire a accidentelor rutiere, poliţia rutieră poate solicita sprijinul unor asociaţii profesionale şi al unor conducători de autovehicule şi tractoare agricole sau forestiere, care consimt să participe voluntar la acestea, conform legii.</p>

                                    <h3>Art. 132</h3>
                                    <p>Anual se stabilesc fonduri din bugetul Ministerului Administraţiei şi Internelor, destinate campaniilor şi activităţilor de educaţie rutieră.</p>
                                    
                                    <h3>Art. 133</h3>
                                    <ol>
                                        <li>Modelele indicatoarelor, marcajelor şi semnalelor luminoase, precum şi semnalele poliţiştilor rutieri sunt prevăzute în anexa nr. 2.</li>
                                        <li>Anexa prevăzută la alin. (1) poate fi modificată şi completată prin hotărâre a Guvernului, pe baza modificărilor şi completărilor aduse convenţiilor şi acordurilor internaţionale în domeniu, la care România este parte.</li>
                                    </ol>

                                    <h3>Art. 134<sup>1</sup></h3>
                                    <p>Substanţele ori produsele stupefiante prevăzute în prezenta ordonanţă de urgenţă, precum şi medicamentele cu efecte similare acestora se stabilesc şi se actualizează periodic, prin lege, la propunerea Ministerului Sănătăţii.</p>

                                    <h3>Art. 134</h3>
                                    <ol>
                                        <li>Prezenta ordonanţă de urgenţă se aplică începând cu data de 1 februarie 2003. Pe aceeaşi dată se abrogă Decretul nr. 328/1966 privind circulaţia pe drumurile publice, cu modificările ulterioare, republicat în Buletinul Oficial, Partea I, nr. 49 din 28 iunie 1984, precum şi orice alte dispoziţii contrare prezentei ordonanţe de urgenţă.</li>
                                        <li>În termen de 30 de zile de la data publicării Ministerul Administraţiei şi Internelor va elabora regulamentul de aplicare a prezentei ordonanţe de urgenţă, care se aprobă prin hotărâre a Guvernului.</li>
                                    </ol>

                                    <h3>Art. 135</h3>
                                    <p>În termen de 90 de zile de la publicarea în Monitorul Oficial al României, Partea I, a legii de aprobare a prezentei ordonanţe de urgenţă, la propunerea Ministerului Administraţiei şi Internelor, Guvernul va emite hotărârea de modificare şi completare a Hotărârii Guvernului nr. 85/2003 pentru aprobarea Regulamentului de aplicare a Ordonanţei de urgenţă a Guvernului nr. 195/2002 privind circulaţia pe drumurile publice, denumit regulament în cuprinsul prezentei ordonanţe de urgenţă, care se va publica în Monitorul Oficial al României, Partea I.</p>

                                    <h3>Art. 136</h3>
                                    <p>În termen de 90 de zile de la publicarea în Monitorul Oficial al României, Partea I, a legii de aprobare a prezentei ordonanţe de urgenţă, ministerele cu atribuţii în domeniul circulaţiei pe drumurile publice vor elabora, vor aproba şi vor publica în Monitorul Oficial al României, Partea I, normele de aplicare a prevederilor prezentei ordonanţe de urgenţă, după cum urmează:</p>
                                    <ol class="tip_a">
                                        <li>Ministerul Administraţiei şi Internelor, pentru prevederile art. 15 alin. (4), art. 23 alin. (10), art. 24 alin. (2) şi ale art. 83 alin. (4);</li>
                                        <li>Ministerul Transporturilor, Construcţiilor şi Turismului, pentru prevederile art. 23 alin. (33) şi (35) şi ale art. 66 alin. (3);</li>
                                        <li>Ministerul Transporturilor, Construcţiilor şi Turismului şi Ministerul Administraţiei şi Internelor, pentru prevederile art. 9 alin. (2) şi ale art. 14 alin. (2);</li>
                                        <li>Ministerul Sănătăţii, pentru prevederile art. 22 alin. (2), (5) şi (7) şi ale art. 125 litera a);</li>
                                        <li>Abrogat</li>
                                        <li>Ministerul Transporturilor, Construcţiilor şi Turismului, Ministerul Educaţiei şi Cercetării şi Ministerul Administraţiei şi Internelor, pentru prevederile art. 23 alin. (5) şi (8);</li>
                                        <li>Ministerul Apărării şi Ministerul Administraţiei şi Internelor, pentru prevederile art. 123 lit. f) şi g);</li>
                                        <li>Ministerul Educaţiei şi Cercetării şi Ministerul Administraţiei şi Internelor, pentru prevederile art. 130.</li>
                                    </ol>

                                    <h3>Art. 137</h3>
                                    <p>Anexele nr. 1 şi 2 fac parte integrantă din prezenta ordonanţă de urgenţă.</p>

                                    <h3>Anexa 1: categorii de vehicule pentru care se elibereaza permisul de conducere</h3>
                                    <p>Categoriile de vehicule pentru care se eliberează permisul de conducere, prevăzute la art. 20 alin. (2), se definesc astfel:</p>
                                    <ol class="tip_a">
                                        <li>categoria AM: mopede;</li>
                                        <li>categoria A1:</li>
                                        <ol>
                                            <li>motociclete cu cilindree maximă de 125 cm3, cu puterea maximă de 11 kW şi cu un raport putere/greutate de cel mult 0,1 kW/kg;</li>
                                            <li>tricicluri cu motor cu puterea maximă de 15 kW;</li>
                                        </ol>
                                        <li>categoria A2: motociclete cu puterea maximă de 35 kW, cu un raport putere/greutate care nu depăşeşte 0,2 kW/kg şi care nu sunt derivate dintr-un vehicul având mai mult de dublul puterii sale;</li>
                                        <li>categoria A: motociclete cu sau fără ataş şi tricicluri cu motor cu puterea de peste 15 kW;</li>
                                        <li>categoria B1: cvadricicluri a căror masă proprie nu depăşeşte 400 kg (550 kg pentru vehiculele destinate transportului de mărfuri), neincluzând masa bateriilor în cazul vehiculelor electrice şi care sunt echipate cu motor cu ardere internă a cărui putere netă maximă nu depăşeşte 15 kW sau cu motor electric a cărui putere nominală continuă maximă nu depăşeşte 15 kW;</li>
                                        <li>categoria B:</li>
                                        <ol>
                                            <li>autovehiculul a cărui masă totală maximă autorizată nu depăşeşte 3.500 kg şi al cărui număr de locuri pe scaune, în afara conducătorului, nu este mai mare de 8;</li>
                                            <li>ansamblul format dintr-un autovehicul trăgător din categoria B şi o remorcă a cărei masă totală maximă autorizată nu depăşeşte 750 kg;</li>
                                            <li>ansamblul de vehicule a căror masă totală maximă autorizată nu depăşeşte 4.250 kg, format dintr-un autovehicul trăgător din categoria B şi o remorcă a cărei masă totală maximă autorizată depăşeşte 750 kg;</li>
                                        </ol>
                                        <li>categoria BE: ansamblul de vehicule a căror masă totală maximă autorizată depăşeşte 4.250 kg, format dintr-un autovehicul trăgător din categoria B şi o remorcă sau semiremorcă a cărei masă totală maximă autorizată nu depăşeşte 3.500 kg;</li>
                                        <li>categoria C1: autovehiculul, altul decât cel din categoria D sau D1, a cărui masă totală maximă autorizată depăşeşte 3.500 kg, dar nu mai mare de 7.500 kg, şi care este proiectat şi construit pentru transportul a maximum 8 pasageri în afară de conducătorul auto. Autovehiculului din această categorie i se poate ataşa o remorcă a cărei masă totală maximă autorizată nu depăşeşte 750 kg;</li>
                                        <li>categoria C1E:</li>
                                        <ol>
                                            <li>ansamblul de vehicule constând dintr-un autovehicul trăgător din categoria C1 şi o remorcă sau semiremorcă a cărei masă totală maximă autorizată este mai mare de 750 kg, cu condiţia ca masa totală maximă autorizată a ansamblului să nu depăşească 12.000 kg;</li>
                                            <li>ansamblurile de vehicule în care vehiculul trăgător face parte din categoria B, iar remorca sau semiremorca sa are o masă totală maximă autorizată de peste 3.500 kg, cu condiţia ca masa totală maximă autorizată a ansamblului să nu depăşească 12.000 kg;</li>
                                        </ol>
                                        <li>categoria C:</li>
                                        <ol>
                                            <li>autovehiculul, altul decât cele din categoria D sau D1, a cărui masă totală maximă autorizată este mai mare de 3.500 kg şi care este proiectat şi construit pentru transportul a maximum 8 pasageri în afara conducătorului auto;</li>
                                            <li>ansamblul format dintr-un autovehicul din categoria C şi o remorcă a cărei masă totală maximă autorizată nu depăşeşte 750 kg;</li>
                                        </ol>
                                        <li>categoria CE: ansamblul de vehicule constând dintr-un autovehicul trăgător din categoria C şi o remorcă sau semiremorcă a cărei masă totală maximă autorizată este mai mare de 750 kg;</li>
                                        <li>categoria D1:</li>
                                        <ol>
                                            <li>autovehiculul proiectat şi construit pentru transportul a maximum 16 pasageri în afară de conducătorul auto şi a cărui lungime maximă nu depăşeşte 8 m;</li>
                                            <li>ansamblul de vehicule format dintr-un autovehicul trăgător din categoria D1 şi o remorcă a cărei masă totală maximă autorizată nu depăşeşte 750 kg;</li>
                                        </ol>
                                        <li>categoria D1E: ansamblul de vehicule constând dintr-un autovehicul trăgător din categoria D1 şi o remorcă a cărei masă totală maximă autorizată este mai mare de 750 kg. Remorca nu trebuie să fie destinată transportului de persoane;</li>
                                        <li>categoria D: autovehiculul destinat transportului de persoane având mai mult de 8 locuri pe scaune, în afara locului conducătorului. Autovehiculului din această categorie i se poate ataşa o remorcă a cărei masă totală maximă autorizată nu depăşeşte 750 kg;</li>
                                        <li>categoria DE: ansamblul de vehicule constând dintr-un autovehicul trăgător din categoria D şi o remorcă a cărei masă totală maximă autorizată este mai mare de 750 kg. Remorca nu trebuie să fie destinată transportului de persoane;</li>
                                        <li>categoria Tr: tractoare agricole sau forestiere.</li>
                                        <li>categoria Tb: troleibuz;</li>
                                        <li>categoria Tv: tramvai.</li>
                                    </ol>

                                    <h3>Anexa 2: indicatoare rutiere</h3>
                                    <form method="post" action="capitolTerminat.php">
                                <input class="buton-verif" type="submit" name="progres-dfinale" value="Finalizeaza capitol" onclick="showImage(10)">  
                            </form>
                                    </span>
                        </div>
            
                </div>
                
                        </div>

        </div>
        
        <script type="text/javascript" src="img_visibility_cod.js"></script>
    </body>
</html>

<?php
    if(isset($_SESSION['email']))
    {
        $id = return_id();
    }
    else{
        $id=0;
    }

    progres_codrutier($conn,$id);
        
?>