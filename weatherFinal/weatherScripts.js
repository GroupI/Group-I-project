function showWeather(weatherIndex){
	
   if (window.XMLHttpRequest){
     xmlhttp=new XMLHttpRequest();
	 } 
	 else {
		 xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		 }
		 xmlhttp.onreadystatechange=function() {
			 if (this.readyState==4 && this.status==200) {  
			 
			 var obj = JSON.parse(xmlhttp.responseText);
	         document.getElementById("date").innerHTML="Today";
	         document.getElementById("max_temperature").innerHTML="Max Temperature : "+obj.TodayMaxTemp+"°C";
	         document.getElementById("min_temperature").innerHTML="Min Temperature : "+obj.TodayMinTemp+"°C";
	         document.getElementById("max_humidity").innerHTML="Max Humidity : "+obj.TodayMaxHumidity+"%";
	         document.getElementById("min_humidity").innerHTML="Min Humidity : "+obj.TodayMinHumidity+"%";
             document.getElementById("wind_direction").innerHTML="Wind Direction and Speed : "+obj.TodayWindDirection;
	    
			 document.getElementById("date1").innerHTML="Tomorrow";
	         document.getElementById("max_temperature1").innerHTML="Max Temperature : "+obj.MaxTemp1+"°C";
	         document.getElementById("min_temperature1").innerHTML="Min Temperature : "+obj.MinTemp1+"°C";
	   
	         document.getElementById("date2").innerHTML="Date : "+obj.CurrentDate2;
	         document.getElementById("max_temperature2").innerHTML="Max Temperature : "+obj.MaxTemp2+"°C";
	         document.getElementById("min_temperature2").innerHTML="Min Temperature : "+obj.MinTemp2+"°C";
	   
	         document.getElementById("date3").innerHTML="Date : "+obj.CurrentDate3;
	         document.getElementById("max_temperature3").innerHTML="Max Temperature : "+obj.MaxTemp3+"°C";
	         document.getElementById("min_temperature3").innerHTML="Min Temperature : "+obj.MinTemp3+"°C";
			 }
		 }
		 xmlhttp.open("GET","clientWeather.php?q="+weatherIndex,true);
		 xmlhttp.send();
		 
		 }
		 
		 
		 
var colors = ['white'];
var windowHeight = 0;
var parendElement;
window.onload = function () {
    parendElement = document.getElementById("container");
    windowHeight = window.innerHeight;
    document.body.style.height = windowHeight + "px";
    generateBall();
  
    //Creates ball for every 1 second interval
    var interval = setInterval(function () {
        generateBall();
    }, 300);
};
function generateBall() {
    
    var leftPos = Math.floor((Math.random() * window.innerWidth)-30);
    var para = document.createElement("p");
    para.setAttribute("class", 'circle');
    para.style.background = colors[Math.floor(Math.random() * colors.length)];
    para.style.left = leftPos + "px";
    parendElement.appendChild(para);
    var btmPos = 0;
    var animationInterval = setInterval(function () {
        if (btmPos < windowHeight) {
            btmPos += 0;
        } else {
            //console.log("yes");
            clearInterval(animationInterval);
            parendElement.removeChild(para);
        }
        para.style.bottom = btmPos + "px";
        para.style.left = leftPos + "px";
    }, 100);
}

		 




 