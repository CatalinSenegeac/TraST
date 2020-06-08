<?php
/* Using PHP's mail() function it's possible. Remember mail function will not work on a Local server. */

if(isset($_POST['submit']))
{
    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $mailFrom = $_POST['email'];
    $subiect = $_POST['subiect'];
    $mesaj = $_POST['mesaj'];

    $mailTo = "radu.poleuca23@yahoo.com";
    $headers = "From: TraST - ".$mailFrom;
    $txt = "Ai primit un e-mail de la ".$nume." ".$prenume".\n\n".$mesaj;

    mail($mailTo, $subiect, $txt, $headers);

    mail("catalin.senegeac@info.uaic.ro", $subiect, $txt, $headers);

    header("Location: contact.php?mailsend");
}

?>