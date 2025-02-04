<?php

include('connessione.php');

$COD = $_GET["COD"];


$sql = "DELETE FROM proiezioni WHERE CodProiezione = $COD";

if($conn->query($sql)) {
    if($conn-> affected_rows > 0) {
        echo "<p> Eliminazione andata a buon fine </p>";
    } else {
            echo "<p> Non è stato eliminato nulla </p>";
        }
    } else {
        echo "<p> Errore </p>";

}


echo "<a href='form.html'> VAI ALLA PAGINA HTML";

?>