<html>
    <body >
        <h1 align="left">Registration Form</h1>
        <form name="myForm" action="" onsubmit="return form_check()" method="post">
        <br>
        <table>
        <tr><td>
        First Name:
        </td><td>
        <input type="text" id="fname" onkeyup="fname_check()" name="fname"><p id="errorfname"></p></td></tr>
        </td></tr>
        <tr><td>
        Last Name:
        </td><td>
        <input type="text" id="lname" onkeyup="lname_check()" name="lname"><p id="errorlname"></p></td></tr>
        </td></tr>
        <tr><td>
        Age:
        </td><td>
        <input type="text" id="age" onkeyup="age_check()" name="age"><p id="errorage"></p></td></tr>
        </td></tr>
        <tr><td>
        Designation:
        </td><td>
        <input type="radio" name="des" value ="Junior Programmer" id="junior" onclick="getradiovalue()" >Junior Programmer
        <input type="radio" name="des" value ="Senior Programmer" id="senior" onclick="getradiovalue()" >Senior Programmer
        <input type="radio" name="des" value ="Project Leader" id="plead" onclick="getradiovalue()" >Project Lead
        </td></tr>
        <tr><td>
        Preferred language:
        </td><td>
        <input type="checkbox" name="java" value="Java" id="java" onclick="getcheckvalue()">JAVA
        <input type="checkbox" name="php" value="PHP" id="php" onclick="getcheckvalue()">PHP
        <input type="checkbox" name="cpp" value="CPP" id="cpp" onclick="getcheckvalue()">C++
        </td></tr>
        <tr><td>
        E-mail:
        </td><td>
        <input type="text" id="email" onkeyup="email_check()" name="email"><p id="erroremail"></p></td></tr>
        </td></tr>
        <tr><td>
        Enter a Password:
        </td><td>
        <input type="text" id="pass" onkeyup="pass_check()" name="pass"><p id="errorpass"></p></td></tr>
        </td></tr>
        <tr><td>
        Please choose a file
        </td><td>
        <input type="file" name="file">
        </td></tr>
        <tr><td>
        <input type="submit" name="submit" onclick="form_check()" name="submit"><p id="errorform"></p></td></tr>
        </td><td>
        <input type="reset" name="reset">
        </td></tr>
    </table>
    </form>
    </center>
    <script src="../js/script.js"></script>
    </body>
</html>