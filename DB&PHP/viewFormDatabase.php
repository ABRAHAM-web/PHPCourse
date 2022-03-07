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
       <table class="dbTableView">
        <td>
          <tr>
            <th>id</th>
            <th>UserName</th>
            <th>SSN</th>
            <th>DepartmenT</th>
            <th>Address</th>
          </tr>
        </td>
       </table>
   </body>
 </html>
