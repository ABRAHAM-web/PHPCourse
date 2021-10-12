<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>insideJob</title>
  </head>
  <body>
      <?php $numbers = array(34,52,1,65,43,77,3,25); ?>
      <?php
        echo current($numbers)."<br>";
        next($numbers);
        echo current($numbers)."<br>";
        next($numbers);
        echo current($numbers)."<br>";
        next($numbers);
        echo current($numbers)."<br>";
        next($numbers);
        echo current($numbers)."<br>";
        next($numbers);
        echo current($numbers)."<br>";
        next($numbers);
        echo current($numbers)."<br>";
        next($numbers);
        echo current($numbers)."<br>";
        reset($numbers);
        echo current($numbers)."<br>";
        end($numbers);
        echo current($numbers)."<br>";
        next($numbers);
        echo current($numbers)."<br>";
        reset($numbers);
        echo current($numbers)."<br>";




      ?>

  </body>
</html>
