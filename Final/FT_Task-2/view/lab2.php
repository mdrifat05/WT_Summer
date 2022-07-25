<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/mycss.css">
</head>
<body>


<div class="header">
  <center>
  <h1>ABC Management System</h1>
  <h2>We Create Future</h2>
  </center>
</div>
<div class="topnav">
  <a href="#">Home</a>
  <a href="#">About US</a>
  <a href="#">Shop</a>


</div><br>
<div class="registrationBox">
<h1 align="left">Registration form </h1>
</div>
<hr>
<form action="" method="post" enctype="multipart/form-data">

<table>
        <tr><td>
        First Name:
        </td><td>
        <input type="text" name="fname">
        </td></tr>
        <tr><td>
        Last Name:
        </td><td>
        <input type="text" name="lname">
        </td></tr>
        <tr><td>
        Age:
        </td><td>
        <input type="text" name="age">
        </td></tr>
        <tr><td>
        Designation:
        </td><td>
        <input type="radio" name="des" value = "Junior Programmer">Junior Programmer
        <input type="radio" name="des" value = "Senior Programmer">Senior Programmer
        <input type="radio" name="des" value = "Project Leader">Project Lead
        </td></tr>
        <tr><td>
        Preferred language:
        </td><td>
        <input type="checkbox" name="check" value="Java">JAVA
        <input type="checkbox" name="check" value="PHP">PHP
        <input type="checkbox" name="check" value="CPP">C++
        </td></tr>
        <tr><td>
        E-mail:
        </td><td>
        <input type="email" name="email">
        </td></tr>
        <tr><td>
        Enter a Password:
        </td><td>
        <input type="password" name="password">
        </td></tr>
        <tr><td>
        Please choose a file
        </td><td>
        <input type="file" name="file">
        </td></tr>

    </table><br>
    <input type="submit" class="button submit" name="submit">
        <input type="reset" class="button reset" name="reset">
</form>

</body>
</html>