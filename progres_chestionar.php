<?php include('server.php') ?>
<?php
    if(isset($_SESSION['email'])){
    echo "
    <form method=\"post\" action=\"capitolTerminat.php\"> 
        <input type=\"submit\" name=\"finalizare-chestionar\" value=\"Finalizeaza chestionar\">    
    </form>
    ";}
?>