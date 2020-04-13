<?php include('db.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>7abibi</title>
</head>
<body>
  <style>
        .overzicht {
      background-color: rgba(255, 255, 255, 0.8);
      border: 1px solid rgba(0, 0, 0, 0.8);
      padding: 20px;
      font-size: 30px;
      text-align: center;
    }
  </style>
    <div class="overzicht">
    <?php
    $record1 = $conn->prepare('SELECT omschrijving, datum, begintijd, nickname FROM programma INNER JOIN uitzending ON programma.idprogramma = uitzending.idprogramma INNER JOIN medewerker ON programma.idprogramma = medewerker.idmedewerker;');
    $record1->execute();
    $row1 = $record1->fetchAll();
    echo $row1[0]['omschrijving'] . '<br> '. $row1[0]['datum'] . '<br> '. $row1[0]['begintijd'] . '<br> '. $row1[0]['nickname'] . '<br><br>';
    echo $row1[1]['omschrijving'] . '<br> '. $row1[1]['datum'] . '<br> '. $row1[1]['begintijd'] . '<br> '. $row1[1]['nickname'] . '<br><br>';
    echo $row1[2]['omschrijving'] . '<br> '. $row1[2]['datum'] . '<br> '. $row1[2]['begintijd'] . '<br> '. $row1[2]['nickname'] . '<br><br>';
   
    ?>

    </div>


    




  
</body>
</html>