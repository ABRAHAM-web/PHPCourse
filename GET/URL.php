1 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>url</title>
  </head>
  <body>
    <?php
      $web = "water-bearer PS";
      $search = 'Tuntin $ pumpkin';
      $result = 'https://'.rawurlencode($web).'?search='.rawurlencode($search);
      echo "weet nie jong ".$result;

     ?>
  </body>
</html>
