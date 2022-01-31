<?php

  $nameError = "";
  $name = "";
  $emailError = "";
  $email ="";
  $genderError = "";
  $gender = "";
  $websiteError = "";
  $Website = "";
  $infoOk = 0;
  $comment = "";

  if(isset($_POST["Submit"])){
    if(empty($_POST['Name'])){
          $nameError = 'No name was provided';
          $infoOk = 0;
    } else {
      $name = test_User_Input($_POST["Name"]);
      if(!preg_match("/gerhard/i",$name)){
        $nameError = "The name that you have provided is wrong";
        $infoOk = 0;
      } else {
        $nameError = "The name that you have provided is correct";
        $infoOk = 1;
      }
    }
    if(empty($_POST['e-mail'])){
          $emailError = 'No email was provided';
    } else {
      $email = test_User_Input($_POST["e-mail"]);
      if(!preg_match("/localaxe@gmail.com/i",$email)){
        $emailError = 'No '.$email.' found in the name that you have provided';
        $infoOk = 0;
      } else {
        $emailError = "The email ".$email." that you have provided is correct";
        $infoOk = 1;
      }
    }

    if(empty($_POST['Website'])){
          $websiteError = 'No Website was provided';
          $infoOk = 0;
    } else {
      $website = test_User_Input($_POST["Website"]);
      if(!preg_match("/water-bearer.co.za/i",$website)){
        $websiteError = 'No '.$website.' found in the name that you have provided';
        $infoOk = 0;
      } else {
        $websiteError = "The web address ".$website." that you have provided is correct";
        $infoOk = 1;
      }

      if(empty($_POST['comment'])){
            //websiteError = 'No comments was provided';
      } else {
        $comment = test_User_Input($_POST["comment"]);
          $comment = test_User_Input($_POST["comment"]);
        }


    }



    // if(isset($_POST['Gender'])){
    //       $genderError = 'No Gender was provided';
    // } else {
    //   $genderError = 'Got it';
      // $gender = test_User_Input($_POST["Gender"]);
      // $genderError = "The Gender that you have provided was {$gender}"
      // if(!preg_match("/localaxe@gmail.com/i",$email)){
      //   $emailError = 'No '.$email.' found in the name that you have provided';
      // } else {
      //   $emailError = "The email ".$email." that you have provided is correct";
      // }
  //}
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
    <link type="text/css" rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
      if($infoOk) {
        echo "<p>Your Submission data</p><br>";
        echo "Name :{$name}<br>";
        echo "E-mail :{$email}<br>";
        echo "Website :{$website}<br>";
        echo "Comments :{$comment}<br>";
        // echo "<br>"
        echo      "<hr><br>";
      } else //{
        //echo "No submission data (yet!)";
    ?>

      <fieldset>
      <legend>* Please fill in the following fields</legend>
          <form action="formValidation.php" method="post">
            <label for="Name">Name:</label><br>
            <input type="text" id="Name" name="Name" value=""><span class="inputError">*<br><?PHP echo $nameError;?></span><br><br>
            <label for="e-mail">E-mail:</label><br>
            <input type="email" id="e-mail" name="e-mail" value="">*<br><?PHP echo $emailError; ?><br><br>
            <label for="Male">Male:</label>
            <input type="radio" class="Gender" name="Gender" value="">
            <label for="Female">Female:</label>
            <input type="radio" class="Gender"  name="Gender" value="">*<br><?PHP echo $genderError; ?><br>
            <label for="Website">Website:</label><br>
            <input type="Website" id="Website" name="Website" value="">*<br><?PHP echo $websiteError; ?><br><br>
            <label for="comment">Comment:</label><br>
            <textarea  name="comment" rows="5" cols="25"></textarea><br>
            <input type="Submit" name="Submit" value="Submit">
          </form>
      </fieldset>


  </body>
</html>
