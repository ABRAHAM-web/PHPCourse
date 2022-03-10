
<?php
    require_once("include/db.php");

    $employeeNameErrorMessage = "Numbers, letters, @ and . allowed";
    $employeeName = "";
    $ssnErrorMessage = "Numbers and letter allowed";
    $ssn = "";
    $errorMessage2 = "";
    $departmentErrorMessage = "Only numbers and letters allowed";
    $department = "";
    $salaryErrorMessage = "Please only numbers";
    $salary = "";
    $address = "No address yet";
    $addressErrorMessage = "Numbers and letters allowed on multiple lines";
    $infoOK = 1;


    if(!isset($_POST['Submit'])){
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


   } else {
       if(empty($_POST["employeeName"]))  {
        $employeeNameErrorMessage = "Geen employeeName";
        $infoOK = 0;
       } else {
       $employeeName = retunValues($_POST["employeeName"]);
       if(!preg_match("/[A-Za-z0-9@.]*/i",$employeeName)){
         $employeeNameErrorMessage = 'No '.$employeeName.' found in the name that you have provided';
         $infoOk = 0;
       } else {
           $employeeNameErrorMessage = "The employeeName ".$employeeName." that you have provided is correct";
         }
      }

      if(empty($_POST["ssn"]))  {
        $ssnErrorMessage = "Niks ssn";
        $infoOK = 0;
      } else {
        $ssn = retunValues($_POST["ssn"]);
        if(!preg_match("/[A-Za-z0-9]*/i",$ssn)){
          $ssnErrorMessage = 'No '.$ssn.' found in the name that you have provided';
          $infoOk = 0;
        } else {
          $ssnErrorMessage = "The ssn ".$ssn." that you have provided is correct";
        }
      }
      if(empty($_POST["department"])) {
        $departmentErrorMessage = "departement ????!!!!!";
        $infoOK = 0;
      } else {
        $department = retunValues($_POST["department"]);
        if(!preg_match("/[A-Za-z0-9]*/i",$department)){
          $departmentErrorMessage = 'No '.$department.' found in the department that you have provided';
          $infoOk = 0;
        } else {
          $departmentErrorMessage = "The department ".$department." that you have provided is correct";
        }
      }
      if(empty($_POST["salary"]))  {
        $salaryErrorMessage = "En Salarissie";
        $infoOK = 0;
      } else {
        $salary = retunValues($_POST["salary"]);
        if(!preg_match("/[0-9.]/i",$salary)){
          $salaryErrorMessage = 'No '.$salary.' found in the department that you have provided';
          $infoOk = 0;
        } else {
          $salaryErrorMessage = "The salary ".$salary." that you have provided is correct";
        }
      }

      if(empty($_POST["address"]))  {
        $addressErrorMessage = "Waar bly jy?";
        $infoOK = 0;
      } else {
        $address = retunValues($_POST["address"]);
        if(!preg_match("/[A-Za-z0-9 .,]*/i",$address)){
          $address = 'The '.$address.' that you have provided is wrong.';
          $infoOk = 0;
        } else {
          $address = "The address \"".$address."\" that you have provided is correct";
        }
      }

      if($infoOK) {
        //echo "Alle data aanvaarbaar";
        echo "<fieldset>";
        echo "<legend>Your submitted data</legend><br>";
        echo "Employee Name : ".$employeeName."<br>";
        echo "Social security Number : ".$ssn."<br>";
        echo "Department : ".$department."<br>";
        echo "Salary : ".$salary."<br>";
        echo "address : ".$address."<br>";
        $sql = "UPDATE emp_record SET employeeName=:enamE, ssn=:ssN, department=:departmenT, homeAddress=:homeAddresS, salary=:salarY WHERE id = '12';";
        echo $sql."<br>";
        echo "pre-psrepare<br>";
        $stmt = $sqldb->prepare($sql);
        echo "post-prepare<br>";
        $stmt->bindvalue(':enamE',$employeeName);
        $stmt->bindvalue(':ssN',$ssn);
        $stmt->bindvalue(':departmenT',$department);
        $stmt->bindvalue(':salarY',$salary);
        $stmt->bindvalue(':homeAddresS',$address);
        //echo "preExecute<br>";
        $execute = $stmt->execute();
        //echo "postExecute<br>";
          if($execute) {
             echo "<span>Record has been Updated successfully</span><br>";
          }
       echo "</fieldset>";

      }
    }

    function retunValues($data){
        return $data;
     }

      //echo "hallo0";
      //if($infoOK) {
        //echo "hallo";
        // echo "<fieldset>";
        // echo "<legend>Your submitted data</legend><br>";
        // echo "Employee Name : ".$employeeName."<br>";
        // echo "Social security Number : ".$ssn."<br>";
        // echo "Department : ".$department."<br>";
        // echo "Salary : ".$salary."<br>";
        // echo "address : ".$address."<br>";
        //$sql = "INSERT INTO emp_record (id, employeeName, ssn, department, homeAddress) VALUES (NULL, :enamE, :ssN, :departmenT,:salarY, :addresS)";
        //UPDATE emp_record SET employeeName='De Gouws', ssn='4664', department='Heuning', homeAddress='Platte Dorp', salary='587' WHERE id = 12;
         //$sql = 'UPDATE emp_record SET employeeName=':enamE', ssn=':ssN', department=':departmenT', homeAddress=':homeAddresS', salary=':salarY' WHERE id = 12;';
         //echo $sql."<br>";
       //  $stmt = $sqldb->prepare($sql);
       //  $stmt->bindvalue(':enamE',$employeeName);
       //  $stmt->bindvalue(':ssN',$ssn);
       //  $stmt->bindvalue(':departmenT',$department);
       //  $stmt->bindvalue(':salarY',$salary);
       //  $stmt->bindvalue(':homeAddresS',$address);
       //  $execute = $stmt->execute();
       // if($execute) {
       //   echo "<span>Record has been Updated successfully</span><br>";
       // }
      //  echo "</fieldset>";
      //}

 ?>


<!DOCTYPE html>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Updating employee in database</title>
    <link rel="stylesheet" href="include/style.css">
  </head>
  <body>
        <h3>Updating $employeeNameErrorMessage</h3> <?php echo "Hoezit!!!!...ek se....!!!"; ?>
        <hr>
        <div class="container">
          <fieldset class="fieldSet">
          <legend>Insert Into Database</legend>
              <form class="formContainer" action="updateDatabase.php" method="post">
                <label  for="employeeName">User</label><br>
                <input type="text" alt=""id="employeeName" name="employeeName"placeholder="your name is your shame" value="<?php echo $employeeName;?>"><?php echo "* ".$employeeNameErrorMessage ?><br>

                <label  for="ssn" placeholder="Social Security Number">Social Sucurity Number</label><br>
                <input type="text" id="ssn" name="ssn"placeholder="Social Security Number"  value="<?php echo $ssn;?>"><?php echo "* ".$ssnErrorMessage ?><br>

                <label for="department">department</label><br>
                <input type="text" id="department" name="department"placeholder="department"  value="<?php echo $department;?>"><?php echo "* ".$departmentErrorMessage ?><br>

                <label  for="salary">salary</label><br>
                <input type="text" id="salary" name="salary"placeholder="salary" value="<?php echo $salary;?>"><?php echo "* ".$salaryErrorMessage ?><br>

                <label  for="address">Address</label><br>
                <textarea  name="address"placeholder="address" rows="8" cols="80" value="<?php echo $address;?>"></textarea><br><?php echo "* ".$addressErrorMessage ?><br>

                <label for="Submit">Submit</label><br>
                <input type="Submit" name="Submit" value="Update your record"><?php echo $errorMessage ?>
              </form>
          </fieldset>
      </div>
  </body>

</html>
