<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Defined Functions</title>
  </head>
  <body>
      <?php
        function welcome() {
          echo "Welcome to the PHP course <br>";
        }
        welcome();welcome();welcome();

        $number1 = 3;
        $number2 = 7;

        function mult ($number1,$number2) {
            $number3 = $number1*$number2;
            //echo "The multiplication of the two numbers is : {[$number3]}";
            return $number3;
        }
        echo mult($number1,$number2);



      ?>
  </body>
</html>
