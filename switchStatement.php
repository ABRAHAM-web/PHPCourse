<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Switch Statement</title>
  </head>
  <body>
     <?php
        $weather = "Windier";

        switch($weather) {
          case "Sunny" : echo "Ok the weather is sunny and nice"."</br>";
          break;
          case "Windy" : echo "The wind is hectic today."."</br>";
          break;
          case "Cold" : echo "Stay at home"."</br>";
          break;
          default : echo "The weather cannot be determined in your area.";
          break;
        }

      ?>
  </body>
</html>
