<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Foreach loop</title>
  </head>
  <body>
      <?php
        $numbers = array(22,55,32,65,34);
        echo print_r($numbers);

        foreach ($numbers as $number) {
          echo $number."<br>";
          // code...
        };
      ?>
      <?php
        echo "<hr>";
        $asnumbers  = array("na_am"=>"15","va_n"=>"van wijk","hoo_gte"=>"baie","dik_te"=>"erg");
        $editedstr = "";
        foreach ($asnumbers as $Key=>$Value) {
          $editedstr = ucwords(str_replace("_"," ",$Key));
          //if ($editedstr == "Na An") {
            //echo $editedstr."<br>";
            if ($editedstr == "Na Am") {
              if (is_numeric($Value)) {
                  echo "The name is {$editedstr} and the value is : {$Value} <br>";
              }

            }

        };

        echo "<hr>";
      ?>
      <!-- //php loop associative arrays with key and value pairs
      //$mense = ("Naam"=>"Pieter","Van"=>"Poepol"); -->


  </body>
</html>
