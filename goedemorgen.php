<?php
 $hour = date("G");
 $minutes = date("i");
 if ($hour < "12") {
  $groet = "Goede Morgen!";
  $sfeer = "goedemorgen";
  }
 if ($hour >= "12") { 
  $groet = "Goede Middag!";
  $sfeer = "goedemiddag";
  }
 if ($hour >= "18") {
  $groet = "Goede Avond!";
  $sfeer = "goedeavond";
 }
 if ($hour >= "22") {
  $groet = "Goede Nacht!";
  $sfeer = "goedenacht";
 }
?>
<html>
 <head>
   <title><?=$groet ?></title>
  <meta charset="utf-8">
  <link href="goede.css" rel="stylesheet" type="text/css" />
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="logo.png">
 </head>

   <body>
      <div class="<?=$sfeer ?>">
         <h1><?=$groet ?></h1>
         <p>Het is nu <?=date ("G:i") ?></p>
      </div>

   </body>
</html>