
<?php
    require_once("include/db.php");
    global $sqldb;
    $id = $_GET['id'];

    $sql = 'select * from emp_record where id = '.$id.';';
    //echo $sql;
    $stmt = $sqldb->query($sql);
    while ($dataRows=$stmt->fetch()) {
        $employeeName = $dataRows['employeeName'];
        $ssn = $dataRows['ssn'];
        $department = $dataRows['department'];
        $salary = $dataRows['salary'];
        $address = $dataRows['homeAddress'];
    }

    $sql = "delete from emp_record where id=:iD;";
    $stmt = $sqldb->prepare($sql);
    $stmt->bindvalue(':iD',$id);

    echo "<fieldset>";
    echo "<legend>information about to be deleted</legend>";
    echo "employee Name : ".$employeeName."<br>";
    echo "ssn : ".$ssn."<br>";
    echo "Department : ".$department."<br>";
    echo "Salary : ".$salary."<br>";
    echo "Address : ".$address."<br>";
    echo "The SQL query looks like : ".$sql."<br>";
    echo "The id to be deleted is : ".$id."<br>";
    //echo $stmt->HttpQueryString."<br>";
    echo "</fieldset>";
    echo "Before execute<br>";
    try {
      $execute = $stmt->execute();
      // $execute = $stmt->execute();
    } catch (Exception $ex) {
       //echo "The following error occured : ".$ex->getMessage()."<br>";
       echo $ex->getMessage;
    } finally {
      echo 'Transaction completed...<br>';
    }

    echo "After execute<br>";
    if($execute) {
      echo "The selected employee has been deletet from the database. ";
    } else {
      echo "Something went wrong and the onformation specified by you could not be deleted...<br>";
    }
 ?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Deleting employee from database</title>
    <link rel="stylesheet" href="include/style.css">
  </head>
  <body>
        <h3>Deleting employee from database</h3> <?php echo "Hoezit!!!!...ek se....!!!"; ?>
        <hr>
        <div class="container">
            <a href="viewFormDatabase.php">Goto overview</a>
        </div>
  </body>

</html>
