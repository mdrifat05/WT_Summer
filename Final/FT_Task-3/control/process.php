<?php
include("../model/model.php");
if(isset($_POST["submit"]))
{
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $age=$_POST["age"];
    $desg=$_POST["des"]; 
    $email=$_POST["email"];
    $pre=$_POST["check"];
    $password=$_POST["password"];
    $file=$_POST["file"];
    $mydb= new db();
    $myconn = $mydb->openCon();
    $mydb->insertUser($fname,$lname,$age,$desg,$pre,$email,$password,$file,"employee",$myconn);
}
?>