<?php
//echo "Hello";

 if (isset($_POST["Submit"])) {
  // echo $_POST["userName"]."<br>";
  // echo $_POST["password"];

    $username = $_POST["userName"];
   $password = $_POST["password"];

   echo $username."<br>";
   echo $password."<br>";

   if ($username == "Gerhard" && $password == "bees") {
       echo "welcome ".$username."<br>";
       echo "Cheers<br>";
     } else {
      echo "That account doesn't exists";
    }
    // } else {
    //   echo "Wrong info submitted or no info at all"; }
}

 ?>
