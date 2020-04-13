<?php include('db.php') ?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<style>

</style>
</head>
<body>



<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#contact">Contact</a>
  <a href="zenderoverzicht.php">zender</a>
  <a href="phplogin/home.php">Admin Login</a>
  <div class="search-container">
  <form name="frmSearch" method="post" action="search.php">
    <table>
      <tr>
      <input name="var1" type="text" id="var1">
      <input type="submit" value="Search" name="search"></th>
    </tr>
  </table>
</form>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div class="img" style="padding-left:16px">
  <img src="./images/dj.jpg" alt="">
  <img src="./images/dj1.jpg" alt="">
  <img src="./images/dj2.jpg" alt="">
</div><br><br>


  <div class="grid-container">
  <div class="grid-item">
    <?php
    $record = $conn->prepare('SELECT omschrijving, slogan FROM zender WHERE omschrijving = "KKSoul";');
    $record->execute();
    $row = $record->fetchAll();
    echo $row[0]['omschrijving'] . '<br> '. $row[0]['slogan']; 
    ?><br>
    <a href="overzicht.php">programmaoverzicht</a>
    </div>
  <div class="grid-item">
  <?php
    $record = $conn->prepare('SELECT omschrijving, slogan FROM zender WHERE omschrijving = "KKRock";');
    $record->execute();
    $row = $record->fetchAll();
    echo $row[0]['omschrijving'] . '<br> '. $row[0]['slogan']; 
    ?><br>
    <a href="">programmaoverzicht</a>
  </div>
  <div class="grid-item">
  <?php
    $record = $conn->prepare('SELECT omschrijving, slogan FROM zender WHERE omschrijving = "KKLounge";');
    $record->execute();
    $row = $record->fetchAll();
    echo $row[0]['omschrijving'] . '<br> '. $row[0]['slogan']; 
    ?><br>
    <a href="">programmaoverzicht</a>
  </div>  
  <div class="grid-item">
  <?php
    $record = $conn->prepare('SELECT omschrijving, slogan FROM zender WHERE omschrijving = "KKAlternative";');
    $record->execute();
    $row = $record->fetchAll();
    echo $row[0]['omschrijving'] . '<br> '. $row[0]['slogan']; 
    ?><br>
    <a href="">programmaoverzicht</a>
  </div>
  <div class="grid-item">
  <?php
    $record = $conn->prepare('SELECT omschrijving, slogan FROM zender WHERE omschrijving = "KKCountry";');
    $record->execute();
    $row = $record->fetchAll();
    echo $row[0]['omschrijving'] . '<br> '. $row[0]['slogan']; 
    ?><br>
    <a href="">programmaoverzicht</a>
  </div>
  <div class="grid-item">
  <?php
    $record = $conn->prepare('SELECT omschrijving, slogan FROM zender WHERE omschrijving = "KKGrasshopper";');
    $record->execute();
    $row = $record->fetchAll();
    echo $row[0]['omschrijving'] . '<br> '. $row[0]['slogan']; 
    ?><br>
    <a href="">programmaoverzicht</a>
  </div>  
  <div class="grid-item">
  <?php
    $record = $conn->prepare('SELECT omschrijving, slogan FROM zender WHERE omschrijving = "KKHiphop";');
    $record->execute();
    $row = $record->fetchAll();
    echo $row[0]['omschrijving'] . '<br> '. $row[0]['slogan']; 
    ?><br>
    <a href="">programmaoverzicht</a>
  </div>
  <div class="grid-item">
  <?php
    $record = $conn->prepare('SELECT omschrijving, slogan FROM zender WHERE omschrijving = "KKMetal";');
    $record->execute();
    $row = $record->fetchAll();
    echo $row[0]['omschrijving'] . '<br> '. $row[0]['slogan']; 
    ?><br>
    <a href="">programmaoverzicht</a>
  </div>
  <div class="grid-item">
  <?php
    $record = $conn->prepare('SELECT omschrijving, slogan FROM zender WHERE omschrijving = "KKWorkout";');
    $record->execute();
    $row = $record->fetchAll();
    echo $row[0]['omschrijving'] . '<br> '. $row[0]['slogan']; 
    ?><br>
    <a href="">programmaoverzicht</a>
     
    
  </div>  
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
