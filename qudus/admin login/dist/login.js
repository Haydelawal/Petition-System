function validate(){

var username = document.getElementById("username").value;
var password = document.getElementById("password").value;


if(username == "admin@admin.com" && password == "password"){


    location.replace('http://localhost/qudus/admin/index.php');
 alert("LOG IN SUCCESSFUL");
// window.location.href = 'https://google.com/';


return false;


} else{
    alert("INCORRECT CREDENTIALS")
}




}