/**
 * Created by shani_000 on 4/25/2017.
 */
function login(user,password) {
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (!this.responseText) {
                document.getElementById("username").value = "";
                document.getElementById("password").value = "";
                alert("worng Username/Password");
            }
            else {
                window.location.replace('/project/mvc/dashboard');
            }
        }
    }
    xmlhttp.open("POST", "login/run?username=" + user + "&password=" + password, true);
    xmlhttp.send();
    return false;
}