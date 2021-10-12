<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Arrays</title>
  </head>
  <body>
    <?php
      $ma = array("ouna","oupa",5,3,8,array(1,2,3));
    ?>
    is dit so my ou ? : <?php echo $ma[0]."<br>"; ?>
    huh : <?php echo $ma[1];?><br>
    vat so : <?php echo $ma[2];?><br>
    vat so ja : <?php echo $ma[3];?><br>
    En weer : <?php echo $ma[5][2];?><br>
    <hr>
    Array structure : <?php print_r($ma) ?>
    <hr>
  </body>
</html>
