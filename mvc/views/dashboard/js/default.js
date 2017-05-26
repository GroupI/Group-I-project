function getusername() {

    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
            var jsonData = JSON.parse(this.responseText);
            return false;
        }
    }
    xmlhttp.open("GET", "dashboard", true);
    xmlhttp.send();
}