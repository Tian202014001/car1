function validate()
{
    var password = document.getElementById("password").value;
    var user = document.getElementById("user").value;

    if(user=="admin"&& password=="abcde")
    {
        alert("login Successfull");
        window.location.href = "admin.html"; 
      
    }
    else {
        alert("login Failed");
    }
}

