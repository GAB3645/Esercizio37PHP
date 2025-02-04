<?php

include('connessione.php');

$nome = $_GET["nome"];
$anno = $_GET["anno"];
$nazionalita = $_GET["nazionalita"];



$sql = "INSERT INTO attori (nome,AnnoNascita,Nazionalita) VALUES ('$nome', $anno, '$nazionalita')";

if($conn->query($sql)) {
    echo "<p> Inserimento andato a buon fine </p>";
} else {
    echo "<p> ERRORE </p>";

}


echo "<a href='form.html'> VAI ALLA PAGINA HTML";

?>