/**
 * Created by shani_000 on 5/4/2017.
 */
function Adduser(user,password,cpassword) {
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == 2) {
                document.getElementById("password").value = "";
                document.getElementById("cpassword").value = "";
                alert("The passwords are not match");
            }
            if (this.responseText == 3) {
                document.getElementById("username").value = "";
                alert("The username is already exists");
            }

            if (this.responseText==true) {
                alert("Registration successful");
                window.location.replace('/project/mvc/login');
            }
        }

    }
    xmlhttp.open("POST", "register/run?username=" + user + "&password=" + password + "&cpassword=" + cpassword, true);
    xmlhttp.send();
    return false;
}