<?php
$first_name=$_POST['f_name'];
$last_name=$_POST['l_name'];
$user_email=$_POST['email'];
$user_pass=$_POST['pass'];

if(strlen($_REQUEST["f_name"])<5)
{
    echo "<br>First Name should be more than 4 characters.";
}
if(strlen($_REQUEST["l_name"])<5)
{
    echo "<br>Last Name should be more than 4 characters.";
}

if(isset($_REQUEST["dg"]))
{
    $deg=$_POST['dg'];
}

if(!isset($deg))
{
    echo "<br>Designation must be selected";
}

if(isset($_POST['java']) || isset($_POST['php'])||isset($_POST['cpp']))
{
    
}
else
{
    echo "<br>Preferred language must be selected";
}

if(empty($user_email))
{
    echo "<br>";
    echo "Email should not be empty";
}

if (preg_match("/^[a-zA-Z-' ]*$/",$user_pass))
    {
        echo "<br>";
        echo "Password should at least contain one numeric value";
    }
?>