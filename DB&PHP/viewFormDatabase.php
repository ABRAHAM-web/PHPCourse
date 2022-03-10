<?php
  require_once("include/db.php");
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>View from Database</title>
     <link rel="stylesheet" href="style.css">
   </head>
   <body>
       <h3>Viewing data from database</h3>
       <table class="dbTableView" style="solid" border="5" align="center">
         <caption><h4>View the client data from database</h4></caption>
          <tr>
            <th>id</th>
            <th>UserName</th>
            <th>SSN</th>
            <th>DepartmenT</th>
            <th>Salary</th>
            <th>Address</th>
            <th>Update</th>
            <th>Delete</th>

          </tr>
          <?php
            global $sqldb;
            $sqlString = "select * from emp_record";
            $stmt = $sqldb->query($sqlString);
            while ($Datarows=$stmt->fetch()) {
              $id = $Datarows['id'];
              $employeeName = $Datarows['employeeName'];
              $ssn = $Datarows['ssn'];
              $department = $Datarows['department'];
              $salary = $Datarows['salary'];
              $address = $Datarows['homeAddress'];

              echo "<tr>
                      <td>$id</td>
                        <td>$employeeName</td>
                        <td>$ssn</td>
                        <td>$department</td>
                        <td>$salary</td>
                        <td>$address</td>
                        <td><a href='updateDatabase.php?id=$id'><?php'>Update id $id<a/></td>
                        <td><a href='deleteFromDatabase.php?id=$id'>Delete id $id</a></td>
                    </tr>";
            }
           ?>
      </table>
   </body>
 </html>
