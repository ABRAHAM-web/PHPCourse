<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Global Variables</title>
  </head>
  <body>
    <?php
        echo "hi";
        $num = 19;
        function showNum () {
          global $num;

          echo $num;
        };
        showNum();
    ?>

  </body>
</html>
