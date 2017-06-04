function showNews(selection) {	
   if (window.XMLHttpRequest) {
     xmlhttp=new XMLHttpRequest();
   } else {
     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
   }
   xmlhttp.onreadystatechange=function() {
     if (this.readyState==4 && this.status==200) {   
       var obj = JSON.parse(xmlhttp.responseText);
	   var size = obj.Size;
	   var duration = 0;
	   var textOfLink="Click here to full article";
	    (function update (index) {
         setTimeout(function () {
             document.getElementById("title").innerHTML=obj.Title[index]; 
	         document.getElementById("link").innerHTML=textOfLink.link(obj.Link[index]);
	         document.getElementById("description").innerHTML=obj.Description[index];
	         document.getElementById("pubDate").innerHTML=obj.PubDate[index];
         if (++index!=size+1) {          
		 update(index);
         }
		 else
			update(index=0);
         }, duration);duration=8000;
      })(0); 
     }
   }
   xmlhttp.open("GET","client.php?q="+selection,true);
   xmlhttp.send();
}


 





 
