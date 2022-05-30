<html>
<head>
    <title>My Home</title>
</head>
<body>
    <h1>Registration Form</h1><hr>
<form action="../control/process.php" method="POST">
<table>
    <tr><td>First Name</td> 
    <td><input type="text" name="fname"></td></tr>
       <tr><td>Last Name</td>
       <td><input type="text"name="lname"></td></tr>
       <tr><td>Age</td>
       <td><input type="text"name="age"></td></tr>
       <tr><td>Designation</td>
       <td><input type="radio" name="designation" value="junior_programmer">Junior Programmer
       <td><input type="radio" name="designation" value="senior_programmer">Senior Programmer
       <td><input type="radio" name="designation" value="project_lead">Project Lead</td></tr>

       <tr><td>Preferred Language</td>
       <td><input type="checkbox" name="java" value="Java">java
       <td><input type="checkbox" name="php" value="senior_programmer">PHP
       <td><input type="checkbox" name="c++" value="project_lead">C++</td></tr>
  

       <tr><td>E-mail</td> 
       <td><input type="text" name="email"></td></tr>
       <tr><td>Password</td>
       <td><input type="password"name="Password"></td></tr>

</table>
Please choose a file <input type="file"><br>
<input type="submit" name="submit" value="Submit">
       <input type="Reset" name="Reset" value="Reset">
</form>
</body>
</html>