class ToDo {
    constructor() {
        this.text = null;
        this.deadline = null;
    }
    showList() {
        var xmlhttp;
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var x = eval('(' + this.responseText + ')');
                var tr, td;
                for (var k in x) {
                    tr = document.createElement('tr');
                    td = tr.appendChild(document.createElement('td'));
                    td.innerHTML = x[k]['ToDo'];
                    td = tr.appendChild(document.createElement('td'));
                    td.innerHTML = x[k]['Created'];
                    td = tr.appendChild(document.createElement('td'));
                    td.innerHTML = x[k]['Deadline'];
                    td = tr.appendChild(document.createElement('td'));
                    if (x[k]['Done'] == 0)
                        td.innerHTML = '<button onclick="todo.Done(this,' + x[k]['id'] + ')">Done</button>';
                    else
                        td.innerHTML = '<td>complete</td>';
                    td = tr.appendChild(document.createElement('td'));
                    td.innerHTML = '<button onclick="todo.deleteRow(this,' + x[k]['id'] + ')" value="Delete"> X</button>';
                    document.getElementById("listInserts").appendChild(tr);
                }
            }
        }
        xmlhttp.open("GET", "ToDoList/xhrGetListings", true);
        xmlhttp.send();

    }
    insert(text, deadline) {
        var xmlhttp;
        this.text = text;
        this.deadline = deadline;
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var jsonData = JSON.parse(this.responseText);
                return false;
                window.location.reload();
            }
        }
        xmlhttp.open("POST", "ToDoList/xhrInsert?t=" + this.text + "&d=" + this.deadline, true);
        xmlhttp.send();

    }
    deleteRow(row, id) {
        var xmlhttp;
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText) {
                    var i = row.parentNode.parentNode.rowIndex;
                    document.getElementById("listInserts").deleteRow(i);
                }
            }
        }
        xmlhttp.open("POST", "ToDoList/xhrDeleteListing?id=" + id, true);
        xmlhttp.send();
    }
    Done(row, id) {
        var xmlhttp;
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText) {
                    window.location.reload();
                }
            }
        }
        xmlhttp.open("POST", "ToDoList/xhrDone?id=" + id, true);
        xmlhttp.send();
    }
}
let todo = new ToDo();



// function showList() {
//     if (window.XMLHttpRequest) {
//         xmlhttp = new XMLHttpRequest();
//     } else {
//         xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//     }
//     xmlhttp.onreadystatechange = function () {
//         if (this.readyState == 4 && this.status == 200) {
//             var x = eval('(' + this.responseText + ')');
//             var tr, td;
//             for (var k in x) {
//                 tr = document.createElement('tr');
//                 td = tr.appendChild(document.createElement('td'));
//                 td.innerHTML = x[k]['ToDo'];
//                 td = tr.appendChild(document.createElement('td'));
//                 td.innerHTML = x[k]['Created'];
//                 td = tr.appendChild(document.createElement('td'));
//                 td.innerHTML = x[k]['Deadline'];
//                 td = tr.appendChild(document.createElement('td'));
//                 if (x[k]['Done']==0)
//                     td.innerHTML = '<button onclick="Done(this,'+x[k]['id']+')">Done</button>';
//                 else
//                     td.innerHTML = '<td>complete</td>';
//                 td = tr.appendChild(document.createElement('td'));
//                 td.innerHTML ='<button onclick="deleteRow(this,'+x[k]['id']+')" value="Delete"> X</button>';
//                 document.getElementById("listInserts").appendChild(tr);
//             }
//         }
//     }
//         xmlhttp.open("GET", "ToDoList/xhrGetListings", true);
//         xmlhttp.send();
// }
// function insert(text, deadline) {
//     if (window.XMLHttpRequest) {
//         xmlhttp = new XMLHttpRequest();
//     } else {
//         xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//     }
//     xmlhttp.onreadystatechange = function () {
//         if (this.readyState == 4 && this.status == 200) {
//
//             var jsonData = JSON.parse(this.responseText);
//             window.location.reload();
//         }
//     }
//     xmlhttp.open("POST", "ToDoList/xhrInsert?t=" + text + "&d=" + deadline, true);
//     xmlhttp.send();
// }
//
// function deleteRow(row,id) {
//     if (window.XMLHttpRequest) {
//         xmlhttp = new XMLHttpRequest();
//     } else {
//         xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//     }
//     xmlhttp.onreadystatechange = function () {
//         if (this.readyState == 4 && this.status == 200) {
//             if(this.responseText)
//             {
//                 var i = row.parentNode.parentNode.rowIndex;
//                 document.getElementById("listInserts").deleteRow(i);
//             }
//         }
//     }
//     xmlhttp.open("POST", "ToDoList/xhrDeleteListing?id=" + id, true);
//     xmlhttp.send();
// }
// function Done(row,id) {
//     if (window.XMLHttpRequest) {
//         xmlhttp = new XMLHttpRequest();
//     } else {
//         xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//     }
//     xmlhttp.onreadystatechange = function () {
//         if (this.readyState == 4 && this.status == 200) {
//             if (this.responseText) {
//                 window.location.reload();
//             }
//         }
//     }
//     xmlhttp.open("POST", "ToDoList/xhrDone?id=" + id, true);
//     xmlhttp.send();
//
// }

