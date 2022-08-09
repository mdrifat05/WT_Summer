<?php
class db
{
    function openCon()
    {
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="labtask";

    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error)
    {
        echo "Unable to create connection object".$conn->connect_error;
    }
    return $conn;
    }

    //query to insert data into database
    function InsertData($fname,$lname,$age,$desg,$pre,$email,$password,$file,$table,$conn)
    {
    $sqlstr="INSERT into $table (fname,lname,age,designation,planguage,email,password,picture) 
    VALUES ('$fname','$lname',$age,'$desg','$pre','$email','$password','$file')";
        if($conn->query($sqlstr))
        {
            echo "data inserted Successfully";
        }
        else
        {
        echo "failed".$conn->error;
        } 
    }

//query to show data from database
function showUser($tablename, $conn){
    $sqlstr="SELECT * FROM $tablename";
    return $conn->query($sqlstr);
}


//close connection
function closecon($conn){
    $conn->close();
}
}
?>