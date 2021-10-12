<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>While Loop</title>
  </head>
  <body>
      <?php
        $N = 50;
        $cnt = 1;
        while ($cnt <= $N) {
          $t  = $N-$cnt;
          echo "The value of cnt at this stage is : {$cnt} and {$t} less that {$N} <br>";
          $cnt++;
        };
      ?>
  </body>
</html>
