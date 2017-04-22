function showList() {
    if (window.XMLHttpRequest) {
        xmlhttp=new XMLHttpRequest();
    } else {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            document.getElementById("listInserts").innerHTML=this.responseText;
        }
    }
    xmlhttp.open("GET","http://localhost/project/mvc/ToDoList/xhrGetListings",true);
    xmlhttp.send();
}

function insert(){
    if (window.XMLHttpRequest) {
        xmlhttp=new XMLHttpRequest();
    } else {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            document.getElementById("listInserts").innerHTML=this.responseText;
        }
    }
    xmlhttp.open("POST","http://localhost/project/mvc/ToDoList/xhrInsert",true);
    xmlhttp.send();
}
// $(function () {
//     $.get("ToDoList/xhrGetListings", function (data) {
//         var jsonData = JSON.parse(data);
//         for (var i = 0; i < jsonData.length; i++) {
//             $('#listInserts').append('<tr>' + '<td>' + jsonData[i][2] + '</td>'
//                 + '<td>' + jsonData[i][3] + '</td>'
//                 + '<td>' + jsonData[i][4] + '</td>'
//                 + '<td>' + jsonData[i][5] + '</td>'
//                 + '<td class="del" rel="' + jsonData[i][0] + '" href="#"> X</td>'
//                 + '</tr>');
//
//         }
//
//         //delete item
//         $('#listInserts').on('click', '.del', function () {
//             delItem = $(this);
//             var id = $(this).attr('rel');
//             $.post("ToDoList/xhrDeleteListing", {'id': id}, function (data) {
//                 delItem.parent().remove();
//             }, 'json');
//             return false;
//         });
//
//     })
//     //insert
//     $('#randomInsert').on('submit', function () {
//         var data1=$(this).serialize();
//         $.post('ToDoList/xhrGetListings',data1,function(data) {
//             var jsonData = JSON.parse(data);
//             window.location.reload();
//             $('#listInserts').append('<tr>'+ '<td>' + jsonData[0] + '</td>'
//                 + '<td>'+ '0' +'</td>'
//                 + '<td>'+ +'</td>'
//                 + '<td>'+ jsonData[1]+'</td>'
//                 + '<td class="del" rel="'+data+'" href="#"> X</td></tr>');
//             document.getElementById("text").value = "";
//
//         });
//         return false;
//     });
// });
