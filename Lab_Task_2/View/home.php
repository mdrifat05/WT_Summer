<html>
<head>
    <title>My Home</title>
</head>
<body>
    <h1>Registration Form</h1><hr>
<form action="../control/process.php" method="POST">
<table>
    <tr><td>First Name</td> 
    <td><input type="text" name="f_name"></td></tr>
       <tr><td>Last Name</td>
       <td><input type="text"name="l_name"></td></tr>
       <tr><td>Age</td>
       <td><input type="text"name="age"></td></tr>
       <tr><td>Designation</td>
       <td><input type="radio" name="dg" value="junior programmer">Junior Programmer
       <td><input type="radio" name="dg" value="senior programmer">Senior Programmer
       <td><input type="radio" name="dg" value="project lead">Project Lead</td></tr>

       <tr><td>Preferred Language</td>
       <td><input type="checkbox" name="java" value="Java">java
       <td><input type="checkbox" name="php" value="senior_programmer">PHP
       <td><input type="checkbox" name="c++" value="project_lead">C++</td></tr>
  

       <tr><td>E-mail</td> 
       <td><input type="text" name="email"></td></tr>
       <tr><td>Password</td>
       <td><input type="password"name="pass"></td></tr>

</table>
Please choose a file <input type="file"><br>
<input type="submit" name="submit" value="Submit">
       <input type="Reset" name="Reset" value="Reset">
</form>
</body>
</html>