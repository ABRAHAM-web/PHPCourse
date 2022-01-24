<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Branching</title>
  </head>
  <body>
    <?php
      $names = array("Pieter","Bennie","Dieter","Francois");
      for ($i = 0;$i<=3;$i++) {

              //Continue;
              if ($names[$i] == "Bennie") {
                break;
              }
              echo "{$names[$i]} is gevind <br>";

      }
    ?>
  </body>
</html>
