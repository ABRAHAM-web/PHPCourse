<?php

  // if (isset($_POST["Submit"])) {
  //   // echo $_POST["userName"]."<br>";
  //   // echo $_POST["password"];
  //
  //    $username = $_POST["userName"];
  //    $password = $_POST["password"];
  //
  //   echo $username."<br>"; 
  //   echo $password."<br>";
  //
  //   if ($username == "Gerhard" && $password == "bees") {
  //       echo "welcome ".$username."<br>";
  //       echo "Cheers<br>";
  //     } else {
  //       echo "That account doesn't exists";
  //     }
  //     // } else {
  //     //   echo "Wrong info submitted or no info at all"; }
  // }


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>post</title>
  </head>
  <body>
    <fieldset>
    <legend>HTML 5 Form</legend>
    <form action="ExternalPHP.php" method="POST">
      <label for="userName">Username: </label>
      <input type="text" id="userName" name="userName"><br><br>
      <label for="password">Password: </label>
      <input type="password" id="password" name="password"><br><br>
      <input type="Submit" value="Submitted" name="Submit">
    </form>
    </fieldset>


    <?php
      //$a = 1;
      //$B = 2;
      //echo print_r($GLOBALS)."<br><hr>";
      //echo print_r($GLOBALS['_GET']);
    ?>
    <legend>Hallo daar</legend>
  </body>
</html>
