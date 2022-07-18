<?php
include "../control/reg_process.php"
?>

<html>
<body>
    
    <h1> Registration Form </h1> <hr>
    
<form action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td> First Name : </td>
<td> <input type="text" name="firstname"> </td>
<td> <?php echo $a ?> </td>
</tr>
<tr>
<td> Last Name : </td>
<td> <input type="text" name="lastname"> </td>
<td> <?php echo $b ?> </td>
</tr>
<tr>
<td> Age : </td>
<td> <input type="number" name="age"> </td>
<td> <?php echo $c ?> </td>
</tr>
<tr>
<td> Designation: </td>
<td> <input type="radio" name="designation" value="Junior Programmar">Junior Programmar 
<input type="radio" name="designation" value="Senior Programmar">Senior Programmar
<input type="radio" name="designation" value="Project Lead">Project Lead </td>
<td> <?php echo $d ?> </td>
</tr>
<tr>
<td> Preferred Language: </td>
<td> <input type = "checkbox" name="JAVA" value="JAVA">JAVA
     <input type = "checkbox" name="PHP" value="PHP">PHP
     <input type = "checkbox" name="C++" value="C++">C++ </td>
     <td> <?php echo $programming_language?> </td>
</tr>
<tr>
<td> Email : </td>
<td> <input type = "text" name= "email" > </td>
<td> <?php echo $f?> </td>
</tr>

<tr>
<td> Password : </td>
<td> <input type = "password" name= "password" placeholder=""> </td>
<td> <?php echo $g ?> </td>
</tr>

<!-- <tr>
<td> Confirm Password : </td>
<td> <input type = "password" name= "confirmpassword" placeholder="More than 4 characters"> </td>
<td> <?php echo $g ?> </td>
</tr> -->

<tr>
<td> Please choose a file </td>
<td> <input type="file" name="myfile"> </td>
<td> <?php echo $h ?> </td>
</tr>
<tr>
<td> <input type="submit" value="Submit" name="submit">
<input type="reset" value="Reset"> </td>
</tr>
</table>
</body>
</html>
