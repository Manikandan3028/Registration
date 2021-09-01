<!DOCTYPE html>
<html>
<head>
  <title>Student Data</title>
    <link rel="stylesheet" href="css\styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<h2>Student Details</h2>
  <button  onClick="myFunction()"   type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Back</button>
<br><br>

<script>
 function myFunction() {
   window.location.href="http://localhost:8080/Registration/index.html";
 }
</script>

<div class="container">
<table  class="table table-striped" border="2">
  <tr>
    <td>Student Name</td>
    <td>Course Name</td>
    <td>Mobile Number (+91)</td>
    <td>DOB</td>
    <td>Address</td>
  </tr>

<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from registration"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['StudentName']; ?></td>
    <td><?php echo $data['CourseName']; ?></td>
    <td><?php echo $data['MobileNumber']; ?></td>
    <td><?php echo $data['DOB']; ?></td>
    <td><?php echo $data['Address']; ?></td>
  </tr>
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>
</div>
</body>
</html>
