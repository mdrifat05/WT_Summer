<?php
class DB
{
    //connection function
    function opencon(){
    $DBHostname="localhost";
    $DBUsername="root";
    $DBPass="";
    $DBName="labtask";

$conn=new mysqli($DBHostname, $DBUsername, $DBPass, $DBName);
if($conn->connect_error)
{
    echo "Unable to create connection object".$conn->connect_error;
}
return $conn;
    }
//query function
    function InsertData($fname, $lname, $age, $designation, $planguage, $email, $password, $picture, $tablename, $conn){
    $sqlstr="INSERT INTO $tablename(fname, lname, age, designation, planguage, email, password, picture) values ('$fname', '$lname', $age, '$designation', '$planguage', '$email', '$password', '$picture')";

if($conn->query($sqlstr)==TRUE)
{
    echo "Data Inserted Successfully";
}
else{
    echo "cant insert".$conn->err;
}
}
function showUser($tablename, $conn){
    $sqlstr="SELECT * FROM $tablename";
    return $conn->query($sqlstr);
}
//close function
function closecon($conn){
    $conn->close();
}

}
?>