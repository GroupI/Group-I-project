function showInfo(str) {

    if (window.XMLHttpRequest) {
        xmlhttp=new XMLHttpRequest();
    } else {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            var obj = JSON.parse(xmlhttp.responseText);
            document.getElementById("informer").innerHTML="The inserted currency,\
	   "+obj.NAME+" of "+obj.COUNTRY+", has rate "+obj.RATE/obj.UNIT+" "+obj.NAME+" for 1 ₪";
            calculate(obj.RATE/obj.UNIT);
            color(obj.CHANGE);
        }
    }

    xmlhttp.open("GET","currency/passJson?q="+str,true);
    xmlhttp.send();
}

function calculate(rate){
    var val = document.getElementById("input").value;
    document.getElementById("sum").innerHTML = "The sum is : "+Math.abs(val)*rate+" ₪";
}


function color(value){
    if (value<0){
        var textColor="red";
        var arrow="↓";
    }
    else{
        var textColor="lime";
        var arrow="↑";
    }
    document.getElementById("color").style.color = textColor;
    document.getElementById("color").innerHTML = "Change rate is : "+ value +"% "+arrow;
}







