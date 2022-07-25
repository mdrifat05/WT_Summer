<?php
session_start();

include("../model/db.php");

  $hasError=0;
  $nameErr = "";
  $name2Err = "";
  $AgeErr = "";
  $passErr = "";
  $emailErr = "";
  $fileErr = "";
  $desigErr ="";
  $LanErr ="";
  $Designation="";
  $planguage="";
  $fromdata ="";
  $filepath ="";
if(isset($_POST["Submit"]))
{
 
$name = $_POST["fname"];
$name2 = $_POST["lname"];
$Age = $_POST["age"];

$pass = $_POST["pass"];
$email = $_POST["email"];
if(isset($planguage))
{
    $LanErr = 'You Havent Selected a checkbox';
}

if(isset($Designation))
{
    $desigErr = 'You have not selected any Designation';
}
else{$Designation = $_POST["designation"];}

        if (empty($name))
    {
        $nameErr ='Please Enter First Name';
        $hasError =1;
    }
      else if(is_numeric($name))
      {
        $nameErr ='First Name can not be numeric';
        $hasError =1;
      }
         else
    {
        echo 'Your First Name is ' . $name;
        $_SESSION["name"]= $name;
    }
    echo '<br>';

   
        if (empty ($name2))
    {
        $name2Err = 'Please Enter Last Name';
    }
    else if(is_numeric($name2))
    {
      $name2Err ='Last Name can not be numeric';
    }
       else
    {
        echo 'Your Last Name is ' . $name2;
    }

    echo '<br>';

   

        if (empty ($Age))
    {
        $AgeErr= 'Please Enter your Age ';
    } else
    {
        echo 'Your Age is ' . $Age;
    }

    echo '<br>';
   
    if (
        isset($Designation) )
        {
        if ("juniorprogrammer"==$Designation) {
            $desigErr = 'You selected Junior Programmer ';
         
        }
        if ($Designation=='seniorprogrammer') {
            $desigErr = 'You selected Senior Programmer';
         
        }
        if ($Designation=='projectlead') {
            $desigErr ='You selected Project Lead';
         
        }
    } else {
        $desigErr = 'You have not selected any Designation';
    }

    echo '<br>';

    if (
        isset($_POST['PreferredLanguage1']) ||
        isset($_POST['PreferredLanguage2']) ||
        isset($_POST['PreferredLanguage3'])) {
        if (isset($_POST['PreferredLanguage1'])) {
            $LanErr = 'Your Have Selected JAVA ';
            $planguage = $planguage. $_POST['PreferredLanguage1'];
            echo '<br>';
        }
   
        if (isset($_POST['PreferredLanguage2'])) {
            $LanErr = 'Your Have Selected PHP';
            $planguage =  $planguage.''.$_POST['PreferredLanguage2'];
            echo '<br>';
        }
        if (isset($_POST['PreferredLanguage3'])) {
            $LanErr = 'Your Have Selected C++';
            $planguage = $planguage.''. $_POST['PreferredLanguage2'];
            echo '<br>';
        }
    }
   
      else {
        $LanErr = 'You Have not Selected a checkbox';
        echo '<br>';
    }

    if(empty($email)  )
    {
        $emailErr = "You must enter email";
    }
    else if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    { $emailErr = "Wrong Pattern Email";}
    else{
      echo "Your email is ".$email;
      echo '<br>';
    }

   
    if (strlen($pass) < 5) {
        $passErr =  'Enter a valid password';
    } else
     {
        echo 'password is valid';
    }


if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../uploads/".$_FILES["myfile"]["name"]))
{ $picture = "../uploads/".$_FILES["myfile"]["name"];
    $fileErr = "File Uploaded";
}

else
$fileErr = 'Upload Error';

$mydb = new db();
$myconn = $mydb -> openConn();
$mydb -> insertUser($name,$name2,$Age,$Designation,$planguage,$email,$pass, $picture,"employee",$myconn);
   
}


?>