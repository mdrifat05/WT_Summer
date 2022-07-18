
<?php
//check update process
if(isset($_POST['update'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $age=$_POST['age'];
    $designation=$_POST['designation'];
    $planguage=$_POST['planguage'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $picture=$_POST['picture'];
    $id=$_POST['id'];
    $tablename=$_POST['tablename'];
    $conn=new DB();
    $conn=$conn->opencon();
    //$conn->InsertData($fname, $lname, $age, $designation, $planguage, $email, $password, $picture, $tablename, $conn);
    //$conn->closecon($conn);
}
?>