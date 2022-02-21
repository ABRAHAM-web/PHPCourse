<?php
  echo "Session course. Always also at beginning like the cookies<br><br>";
  session_start();
  //$_SESSION
  $_SESSION["Name"] = "Pietertjie";
  echo $_SESSION["Name"]."<br>";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sessions ek se...</title>
  </head>
  <body>
      <h3>Sessions</h3>

  </body>
</html>
