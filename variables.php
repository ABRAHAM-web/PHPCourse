<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $phrase1 = "My name is Fritz and her name is ";
      $phrase2 = "Tacha. :";
      $cP = $phrase1 ." (omw) ... " . $phrase2;

    ?>
    <br>

      <hr>
        Repeat : <?php echo str_repeat($cP."<br>",6);?>
        Substring : <?php echo substr($cP,3,4);?><br>
        Position of any specific word :   <?php echo strpos($cP,"Fritz");?><br>
        Position of any Character :  <?php echo strpos($cP,"a");?><br>
      <hr>


      <h1>String variables</h1>

      <hr>
      <h1>PHP variables</h1>
      <?php
      $name = 'Peter';
      echo $name
      ?>
      <hr>
  </body>
</html>
