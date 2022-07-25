<?php
class db{

    function openConn()
    {
        $servername="localhost";
        $username = "root";
        $password = "";
        $dbname = "labtask";
        $conn =  new mysqli($servername,$username,$password,$dbname);
        if($conn -> connect_error)
        {
            echo "error connecting database";
       
        }
        return $conn;
    }


    function insertUser($fname,$lname,$age,$designation,$planguage,$email,$pass,$picture,$table,$conn)
    {
        $sqlstr="INSERT INTO employee(fname,lname,age,designation,planguage,email,password,picture)
        VALUES ('$fname','$lname','$age','$designation','$planguage','$email','$pass','$picture') ";

        if($conn-> query($sqlstr))
        {
            echo "Data saved";
        }
        else{
            echo "cant insert". $conn->error;
        }
    }

}
?>