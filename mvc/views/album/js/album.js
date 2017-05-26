function ajax_json_gallery(folder){
    var thumbnailbox = document.getElementById("thumbnailbox");
    var pictureframe = document.getElementById("pictureframe");
    var hr = new XMLHttpRequest();
    hr.open("POST", "album/run", true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var d = JSON.parse(hr.responseText);
            pictureframe.innerHTML = "<img src='"+d.img1.src+"'>";
            thumbnailbox.innerHTML = "";
            for(var o in d){
                if(d[o].src){
                    thumbnailbox.innerHTML += '<div onclick="putinframe(\''+d[o].src+'\')"><img src="'+d[o].src+'"></div>';
                }
            }
        }
    }
    hr.send("folder="+folder);
    thumbnailbox.innerHTML = "requesting...";
}
function putinframe(src){
    var pictureframe = document.getElementById("pictureframe");
    alert(src);
    pictureframe.innerHTML = '<img src="'+src+'">';
}
