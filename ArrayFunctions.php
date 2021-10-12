<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Array Fuctions</title>
  </head>
  <body>
    <?php
      $names = array("Pieter","Brandweer ertjie","louwtjie","saartjie");
      $sin = array("Ek ","hou ","nie ","van ","bier ","nie ");
    ?>

    <?php
      echo print_r($names);  //print_r returns complete array structure
    ?><br>
    <?php
      array_pop($names);
      echo print_r($names);
    ?><br>
    <?php
      array_pop($names);
      echo print_r($names);
    ?><br>
    <?php
      array_pop($names);
      echo print_r($names);
    ?><br>
    <?php
      array_push($names,"Adrie","Abraham","Isak");
      echo print_r($names);
    ?><br>
    <?php
      echo count($names)."<br>";
      echo max($names)."<br>";
      echo min($names)."<br>";

      echo print_r($sin)."<br>";
      implode($sin);
      echo print_r($sin)."<br>";
      //explode($sin);
      echo print_r($sin)."<br>";
    ?>
  </body>
</html>
