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
	   "+obj.Name+" of "+obj.Country+", has rate "+obj.Rate+", updated on \
	   "+obj.Update;
	   calculate(obj.Rate/obj.Unit);
     }
   }
   xmlhttp.open("GET","client.php?q="+str,true);
   xmlhttp.send();
 }
  
function calculate(rate){
	   var val = document.getElementById("input").value; 
	   document.getElementById("sum").innerHTML = "The sum is : "+val*rate+" ₪";	 
 }
 
 
 function color(val){
	 if(val<0)
		 return "red";
	 else
		 return "green";
 }