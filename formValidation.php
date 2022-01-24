<?php

  $nameError = "";
  $name = "";
  if(isset($_POST["Submit"])){
    if(empty($_POST['Name'])){
          $nameError = 'No name was provided';
    } else {
      $name = test_User_Input($_POST["Name"]);
      if(!preg_match("/gerhard/i",$name)){
        $nameError = 'No '.$name.' found in the name that you have provided';
      } else {
        $nameError = "The name ".$name." that you have provided is correct";
      }
    }
  }

  function test_User_Input($data){
      return $data;
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form validation</title>
  </head>
  <body>
      <fieldset>
      <legend>* Please fill in the following fields</legend>
          <form action="formValidation.php" method="post">
            <label for="Name">Name:</label><br>
            <input type="text" id="Name" name="Name" value="">*<?PHP echo $nameError; ?><br><br>
            <input type="Submit" name="Submit" value="Submit">
          </form>
      </fieldset>


  </body>
</html>
