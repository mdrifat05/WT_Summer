 function fname_check()
  {
    var fname = document.getElementById("fname").value;
    var fname_pattern = /^[a-zA-Z\s]*$/;
    if (fname_pattern.test(fname)) 
    {
        document.getElementById("errorfname").innerHTML="Name is correct";
        return true;
    }
    else
    {
        document.getElementById("errorfname").innerHTML="First Name must be Alphabets";
        return false;
    }
  }
  function lname_check()
  {
    var lname = document.getElementById("lname").value;
    var lname_pattern = /^[a-zA-Z\s]*$/;
    if (lname_pattern.test(lname)) 
    {
        document.getElementById("errorlname").innerHTML="Name is correct";
        return true;
    }
    else
    {
        document.getElementById("errorlname").innerHTML="Last Name must be Alphabets";
        return false;
    }
  }
  function email_check()
  {
    var email = document.getElementById("email").value;
    var email_pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (email_pattern.test(email)) 
    {
        document.getElementById("erroremail").innerHTML="email is correct";
        return true;
    }
    else
    {
        document.getElementById("erroremail").innerHTML="Email format is not correct!";
        return false;
    }
  }

  function age_check()
  {
    var age = document.getElementById("age").value;
    var age_pattern = /^[0-9]\d{1}$/;
    if (age_pattern.test(age)) 
    {
        document.getElementById("errorage").innerHTML="age is correct";
        return true;
    }
    else
    {
        document.getElementById("errorage").innerHTML="age is incorrect";
        return false;
    }
  }

  function pass_check()
  {
    var pass = document.getElementById("pass").value;
    var pass_pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
    if (pass_pattern.test(pass)) 
    {
        document.getElementById("errorpass").innerHTML="passwared is correct ";
        return true;
    }
    else
    {
        document.getElementById("errorpass").innerHTML="Password must have at least one alphabet and one number and should not be less than 8 characters!";
        return false;
    }
  }
  function radiovalue()
    {
        if(document.getElementById("junior").checked==true)
        {
            document.getElementById("radiovalue").innerHTML="Junior has been checked";
            return true;
        }
        else if (document.getElementById("senior").checked==true)
        {
            document.getElementById("radiovalue").innerHTML="Senior has been checked";
            return true;
        }
        else if (document.getElementById("plead").checked==true)
        {
            document.getElementById("radiovalue").innerHTML="Progamming lead has been checked";
            return true;
        }
        else
        {
            document.getElementById("radiovalue").innerHTML="Please select a radio!";
            return false;
        }
    }

    function checkvalue()
    {
        if(document.getElementById("php").checked==true)
        {
            document.getElementById("checkvalue").innerHTML="php has been checked";
            return true;
        }
        else if (document.getElementById("java").checked==true)
        {
            document.getElementById("checkvalue").innerHTML="java has been checked";
            return true;
        }
        else if (document.getElementById("cpp").checked==true)
        {
            document.getElementById("checkvalue").innerHTML="cpp has been checked";
            return true;
        }
        else
        {
            document.getElementById("checkvalue").innerHTML="Please select a radio!";
            return false;
        }
    }
function form_check()
{
    if(fname_check() == true && lname_check() == true && age_check() == true && email_check() == true && pass_check() == true && radiovalue() == true && checkvalue() == true)
    {
        console.log('success');
        document.getElementById("errorform").innerHTML="All fields are ok";
        return true;
    }
    else
    {
        document.getElementById("errorform").innerHTML="All filed are required";
        return false;
    }
}