<?php
include("../control/process.php");
?>
<html>
<head>
    <title>My Home</title>
</head>
<body>
    <h1>Registration Form</h1><hr>
<form action="" method="POST" enctype="multipart/form-data">
<table>
    <tr><td>First Name</td> 
    <td><input type="text" name="f_name"></td></tr>
       <tr><td>Last Name</td>
       <td><input type="text"name="l_name"></td></tr>
       <tr><td>Age</td>
       <td><input type="text"name="age"></td></tr>
       <tr><td>Designation</td>
       <td><input type="radio" name="designation" value="junior programmer">Junior Programmer
       <td><input type="radio" name="designation" value="senior programmer">Senior Programmer
       <td><input type="radio" name="designation" value="project lead">Project Lead</td></tr>

       <tr><td>Preferred Language</td>
       <td><input type="checkbox" name="java" value="Java">java
       <td><input type="checkbox" name="php" value="PHP">php
       <td><input type="checkbox" name="c++" value="Cpp">c++</td></tr>
  

       <tr><td>E-mail</td> 
       <td><input type="text" name="email"></td></tr>
       <tr><td>Password</td>
       <td><input type="password"name="pass"></td>

      <td> <?php
            echo $pass_Error;

       ?>
    </td></tr>
</table>
Please choose a file <input type="file" name="myfile"><br>
<input type="submit" name="submit" value="Submit">
       <input type="Reset" name="Reset" value="Reset">
</form>
</body>
</html>