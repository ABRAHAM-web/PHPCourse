<?php
  echo "<h3>Playing with the server info globals</h3><br>";
  echo "Server Name : ".$_SERVER["SERVER_NAME"]."<br> ";
  echo "Server ADDR : ".$_SERVER["SERVER_ADDR"]."<br>";
  echo "Server PORT : ".$_SERVER["SERVER_PORT"]."<br>";
  echo "Server ROOT : ".$_SERVER["DOCUMENT_ROOT"]."<br>";
  echo "Server HttpQueryString : ".$SERVER["QUERY_STRING"]."<br>";
  echo "Remote address : ".$SERVER["REMOTE_ADDR"]."<br>";
  echo "Remote port : ".$SERVER["REMOTE_PORT"];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Server info super global variable</title>
  </head>
  <body>
    <h3>Exploring server super global variables</h3>
  </body>
</html>
