<?php

include('connessione.php');

$id = $_GET["id"];
$voto = $_GET["voto"];



$sql = "UPDATE recensioni SET Voto = $voto WHERE IDRecensione = $id";

if($conn->query($sql)) {
    if($conn-> affected_rows > 0) {
        echo "<p> Aggiornamento andato a buon fine </p>";
    } else {
            echo "<p> Non è stato eliminato nulla </p>";
        }
    } else {
        echo "<p> Errore </p>";

}


echo "<a href='form.html'> VAI ALLA PAGINA HTML";

?>