<?php include('db.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zender overzicht</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="zendermaken">
    <a href="zendermaken.html">Zender Toevoegen</a>
    </div>

    
<div class="grid-container">
  <div class="grid-item">
    <?php
    $record = $conn->prepare('SELECT omschrijving, slogan FROM zender WHERE omschrijving = "KKSoul";');
    $record->execute();
    $row = $record->fetchAll();
    echo $row[0]['omschrijving'] . '<br> '. $row[0]['slogan']; 
    ?><br>
    <a href="zenderwijzegen.html">Zender wijzegen/verwijderen</a>
    <a href="programmatonen.php">Programma overzicht tonen</a>
    <a href="programmatoevoegen.html">Programma toevoegen</a>
    </div>
  <div class="grid-item">
  <?php
    $record = $conn->prepare('SELECT omschrijving, slogan FROM zender WHERE omschrijving = "KKRock";');
    $record->execute();
    $row = $record->fetchAll();
    echo $row[0]['omschrijving'] . '<br> '. $row[0]['slogan']; 
    ?><br>
    <a href="zenderwijzegen.html">Zender wijzegen/verwijderen</a>
    <a href="programmatonen.php">Programma overzicht tonen</a>
    <a href="programmatoevoegen.html">Programma toevoegen</a>
  </div>
  <div class="grid-item">
  <?php
    $record = $conn->prepare('SELECT omschrijving, slogan FROM zender WHERE omschrijving = "KKLounge";');
    $record->execute();
    $row = $record->fetchAll();
    echo $row[0]['omschrijving'] . '<br> '. $row[0]['slogan']; 
    ?><br>
    <a href="zenderwijzegen.html">Zender wijzegen/verwijderen</a>
    <a href="programmatonen.php">Programma overzicht tonen</a>
    <a href="programmatoevoegen.html">Programma toevoegen</a>
  </div>  
  <div class="grid-item">
  <?php
    $record = $conn->prepare('SELECT omschrijving, slogan FROM zender WHERE omschrijving = "KKAlternative";');
    $record->execute();
    $row = $record->fetchAll();
    echo $row[0]['omschrijving'] . '<br> '. $row[0]['slogan']; 
    ?><br>
    <a href="zenderwijzegen.html">Zender wijzegen/verwijderen</a>
    <a href="programmatonen.php">Programma overzicht tonen</a>
    <a href="programmatoevoegen.html">Programma toevoegen</a>
  </div>
  <div class="grid-item">
  <?php
    $record = $conn->prepare('SELECT omschrijving, slogan FROM zender WHERE omschrijving = "KKCountry";');
    $record->execute();
    $row = $record->fetchAll();
    echo $row[0]['omschrijving'] . '<br> '. $row[0]['slogan']; 
    ?><br>
    <a href="zenderwijzegen.html">Zender wijzegen/verwijderen</a>
    <a href="programmatonen.php">Programma overzicht tonen</a>
    <a href="programmatoevoegen.html">Programma toevoegen</a>
  </div>
  <div class="grid-item">
  <?php
    $record = $conn->prepare('SELECT omschrijving, slogan FROM zender WHERE omschrijving = "KKGrasshopper";');
    $record->execute();
    $row = $record->fetchAll();
    echo $row[0]['omschrijving'] . '<br> '. $row[0]['slogan']; 
    ?><br>
    <a href="zenderwijzegen.html">Zender wijzegen/verwijderen</a>
    <a href="programmatonen.php">Programma overzicht tonen</a>
    <a href="programmatoevoegen.html">Programma toevoegen</a>
  </div>  
  <div class="grid-item">
  <?php
    $record = $conn->prepare('SELECT omschrijving, slogan FROM zender WHERE omschrijving = "KKHiphop";');
    $record->execute();
    $row = $record->fetchAll();
    echo $row[0]['omschrijving'] . '<br> '. $row[0]['slogan']; 
    ?><br>
    <a href="zenderwijzegen.html">Zender wijzegen/verwijderen</a>
    <a href="programmatonen.php">Programma overzicht tonen</a>
    <a href="programmatoevoegen.html">Programma toevoegen</a>
  </div>
  <div class="grid-item">
  <?php
    $record = $conn->prepare('SELECT omschrijving, slogan FROM zender WHERE omschrijving = "KKMetal";');
    $record->execute();
    $row = $record->fetchAll();
    echo $row[0]['omschrijving'] . '<br> '. $row[0]['slogan']; 
    ?><br>
    <a href="zenderwijzegen.html">Zender wijzegen/verwijderen</a>
    <a href="programmatonen.php">Programma overzicht tonen</a>
    <a href="programmatoevoegen.html">Programma toevoegen</a>
  </div>
  <div class="grid-item">
  <?php
    $record = $conn->prepare('SELECT omschrijving, slogan FROM zender WHERE omschrijving = "KKWorkout";');
    $record->execute();
    $row = $record->fetchAll();
    echo $row[0]['omschrijving'] . '<br> '. $row[0]['slogan']; 
    ?><br>
    <a href="zenderwijzegen.html">Zender wijzegen/verwijderen</a>
    <a href="programmatonen.php">Programma overzicht tonen</a>
    <a href="programmatoevoegen.php">Programma toevoegen</a>
     
    
  </div>  
</div>
    
</body>
</html>