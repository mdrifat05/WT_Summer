<?php
session_start();
$pass_Error ="";
if(isset($_REQUEST["submit"]))
{
$first_name=$_REQUEST['f_name'];
$last_name=$_REQUEST['l_name'];
$user_age=$_REQUEST['age'];
$user_email=$_REQUEST['email'];
$user_pass=$_REQUEST['pass'];

if(strlen($_REQUEST["f_name"])<5)
{
    echo "<br>First Name should be more than 4 characters.";
}
else{
    $_SESSION["f-name"]=$name;
}
if(strlen($_REQUEST["l_name"])<5)
{
    echo "<br>Last Name should be more than 4 characters.";
}

$designation="";
if(isset($_POST["designation"]))
{
    $designation = $_POST["designation"];
}
else
{
    
    echo "<br>Please select designation ";
}

$programming_language="";
if(isset($_POST["java"]) && isset($_POST["php"]) && isset($_POST["c++"]))
       {
        $programming_language = $_POST["java"]." , ".$_POST["php"]." , ".$_POST["c++"];

       } 
       else if(isset($_POST["php"]) && isset($_POST["c++"]))
       {
        $programming_language= $_POST["php"]." , ".$_POST["c++"];
           
       }
       else if(isset($_POST["java"]) && isset($_POST["c++"]))
       {
           
        $programming_language= $_POST["java"]." , ".$_POST["c++"];
       }
       else if(isset($_POST["java"]) && isset($_POST["php"]))
       {
        $programming_language= $_POST["java"]." , ".$_POST["php"];
           
       }
       else if(isset($_POST["c++"]))
       {
        $programming_language= $_POST["c++"];
           
       }
       else if(isset($_POST["php"]))
       {
        $programming_language= $_POST["php"];
           
       }
       else if(isset($_POST["java"]))
       {
        $programming_language= $_POST["java"];
            
       }
   else
   {
        echo "<br>No Language Selected";
   }

if(empty($user_email))
{
    echo "<br>";
    echo "Email should not be empty";
}

if (preg_match("/^[a-zA-Z-' ]*$/",$user_pass))
    {
        $pass_Error = "Password should at least contain one numeric value!!";
    }

//file upload    
echo "<br>";
echo "The uploaded file name is" .$_FILES["myfile"]["name"];
echo "<br>";
if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../uploads/".$_FILES["myfile"]["name"]))
{
    echo "file uploaded successful";
}
else
{
    echo "file upload failed";
}


$mydata = array(
    'First_name'=>$first_name,
    'Last_name'=>$last_name,
    'Age'=>$user_age,
    'Designation'=>$designation,
    'Preferred_Language'=>$programming_language,
    'Email'=>$user_email,
    'password'=>$user_pass,
    'file'=>$_FILES["myfile"]["name"]
);

//json work
$existing_Data = file_get_contents('../data/data.json');
$JsonData = json_decode($existing_Data);

    $JsonData[] = $mydata;
    $jd=json_encode($JsonData, JSON_PRETTY_PRINT);
    if(file_put_contents("../data/data.json",$jd))
    {
        echo "<br>Data saved";
    }
}
