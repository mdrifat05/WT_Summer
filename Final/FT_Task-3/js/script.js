 function fname_check()
  {
    var fname = document.getElementById("fname").value;
    var fname_pattern =  /^[A-Za-z]+$/;
    var fn_check = fname_pattern.test(fname);
    if (fn_check) 
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
    var lname_pattern =  /^[A-Za-z]+$/;
    var fn_check = lname_pattern.test(lname);
    if (fn_check) 
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
    var email_pattern = /^\w+([-+.']\w+)*@[A-Za-z\d]+\.aiub.edu$/;
    var em_check = email_pattern.test(email);
    if (em_check) 
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
    var age_check = age_pattern.test(age);
  
    if (age_check) 
    {
        document.getElementById("errorage").innerHTML="age is correct";
        return true;
    }
    else
    {
        document.getElementById("errorage").innerHTML="Please use number";
        return false;
    }
  }

age_check();
  function pass_check()
  {
    var pass = document.getElementById("pass").value;
    var pass_pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
    var pass_check = pass_pattern.test(pass);
    if (pass_check) 
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
  function getradiovalue()
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

    function getcheckvalue()
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
    if(fname_check() == true && lname_check() == true && age_check() == true && email_check() == true && pass_check() == true && getradiovalue() == true && getcheckvalue() == true)
    {
        document.getElementById("errorform").innerHTML="All fields are ok";
        return true;
    }
    else
    {
        document.getElementById("errorform").innerHTML="All filed are required";
        return false;
    }
}