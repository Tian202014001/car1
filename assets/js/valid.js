function validate()
{
    var password = document.getElementById("password").value;
    var user = document.getElementById("user").value;

    if(user=="admin"&& password=="abcde")
    {
        alert("login Successfull");
        window.location.href = "http://localhost/carshop%20merged%20with%20search%20bar/car-rental-website-template/admin.php"; 
      
    }
    else {
        alert("login Failed");
    }
}

