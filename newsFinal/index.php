<html>
 <head>
 <script src="newsScripts.js"></script> 
 <link rel="stylesheet" type="text/css" href="style.css">


 </head>
 <body>

 <section id="widget_top">
  <p>
  Select a wanted topic to get news:
  <select name="curr_from" onchange="showNews(this.value)">
                    <option value="">Select wanted topic</option>
                    <option value="0">Top stories</option>
					<option value="1">World</option>
                    <option value="2">Africa</option>
                    <option value="3">Americas</option>
                    <option value="4">Asia</option>
		            <option value="5">Europe</option>
		            <option value="6">Middle East</option>
		            <option value="7">U.S.</option>
		            <option value="8">Technology</option>
		            <option value="9">Science & Space</option>
		            <option value="10">Entertainment</option>
		            <option value="11">World Sport</option>
		            <option value="12">Football</option>
					<option value="13">Golf</option>
					<option value="14">Motorsport</option>
		            <option value="15">Tennis</option>
					<option value="16">Travel</option>
					
  </select>
  </p>
 </section>
 
  <form id="container">
  <p>
  <h3 id="pubDate"></h3>
  <h3 id="title">Select a wanted topic to get news</h3>
  <p id="description"></p>
  </p>
  </form>

 <section id="widget_bottom">
  <h3 id = "link"></h3>
  <marquee direction="left" scrollamount="5">
  <a href="http://edition.cnn.com/" target="_blank">News provided by CNN.</a> 
  </marquee> 
 </section>

 
 </body>
</html>