<?php include('db.php') ?>

<div class="overzicht">
    <?php
    $record1 = $conn->prepare('SELECT datum, omschrijving, begintijd, nickname FROM programma INNER JOIN uitzending ON programma.idprogramma = uitzending.idprogramma INNER JOIN medewerker ON programma.idprogramma = medewerker.idmedewerker GROUP BY datum;');
    $record1->execute();
    $row1 = $record1->fetchAll();
    echo $row1[0]['datum'] . '<br> '. $row1[0]['omschrijving'] . '<br> '. $row1[0]['begintijd'] . '<br> '. $row1[0]['nickname'] . '<br><br>';
    echo $row1[1]['datum'] . '<br> '. $row1[1]['omschrijving'] . '<br> '. $row1[1]['begintijd'] . '<br> '. $row1[1]['nickname'] . '<br><br>';
   
    ?>

    </div>