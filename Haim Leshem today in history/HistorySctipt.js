let xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        let data = xmlhttp.responseText;
        let obj = JSON.parse(data);
        document.getElementById("History").innerHTML =  obj.date + ", " + obj.year + ": " + obj.text;
    }

};
xmlhttp.open("GET", "client.php", true);
xmlhttp.send();
