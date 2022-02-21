<?php
echo "The cookie information should always be placed in the beginning of the page <br>";
echo "1 ana<br>";
echo "2 ana<br>";
echo "3<br>";
  $expireTime = time()+86400;

echo "The current time is :".$expireTime."<br>";
setcookie("name","Gerhard",$expireTime);
setcookie("surName","Beukes",$expireTime);
setcookie("ouderdom","99",$expireTime);
echo "1"."<br>";
echo $_COOKIE["name"]."<br>";
echo "2"."<br>";
echo $_COOKIE["surName"]."<br>";
echo "3"."<br>";
echo $_COOKIE["ouderdom"]."<br>";
  $expireTime = time()-86400;
setcookie("name","Gerhard",$expireTime);
if(isset($_COOKIE["name"])) {
  echo "My naam is ".$_COOKIE["name"]." en my van is ".$_COOKIE["surName"]." , verder is ek op die oomblik ".$_COOKIE["ouderdom"]."<br>";
} else {
  echo "Die bleddie koekie is nie eers gestel nie man.";
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cookie</title>
  </head>
  <body>
    <h3>Playing with Cookies</h3>


  </body>
</html>
