<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>IF Statement</title>
  </head>
  <body>
      <?php
        $name = "abraham1";
        $age = 46;
      ?>

      <?php
        if ($name == "abraham") {
          echo "<h1>Checking name {$name}</h1><br>";
          echo "<p>The name {$name} checkes out fine.</p><br><br>";
        } elseif ($name != "abraham") {
          echo "<h1>Checking name {$name}</h1><br>";
          echo "<p>The name {$name} does not check out fine at all, please inject yourself with something asap.</p><br><br>";
        };
       ?>
  </body>
</html>
