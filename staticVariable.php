<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Static Vaiables</title>
  </head>
  <body>
      <h1>Static variables</h1>
      <?php
        function staticno () {
          $num = 1;
          echo $num."<br>";
          $num++;
        }

        function staticon () {
          static $num = 1;
          echo $num."<br>";
          $num++;
        }

        echo "Testing staticno<hr><br>";
        echo staticno();
        echo staticno();
        echo staticno();
        echo "Testing staticon<hr><br>";
        echo staticon();
        echo staticon();
        echo staticon();
       ?>
  </body>
</html>
