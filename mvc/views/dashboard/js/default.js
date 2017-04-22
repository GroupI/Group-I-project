$(function () {
        $.get("dashboard/xhrGetListings", function (data) {
            var jsonData = JSON.parse(data);
            for (var i = 0; i < jsonData.length; i++) {
                $('#listInserts').append('<tr>' + '<td>' + jsonData[i][2] + '</td>'
                    + '<td>' + jsonData[i][3] + '</td>'
                    + '<td>' + jsonData[i][4] + '</td>'
                    + '<td>' + jsonData[i][5] + '</td>'
                    + '<td class="del" rel="' + jsonData[i][0] + '" href="#"> X</td>'
                    + '</tr>');

            }

            //delete item
            $('#listInserts').on('click', '.del', function () {
                delItem = $(this);
                var id = $(this).attr('rel');
                $.post("dashboard/xhrDeleteListing", {'id': id}, function (data) {
                    delItem.parent().remove();
                }, 'json');
                return false;
            });

        })
    //insert
    $('#randomInsert').on('submit', function () {
        var url=$(this).attr('action');
        var data=$(this).serialize();
        $.post(url,data,function(data) {
            var jsonData = JSON.parse(data);
            window.location.reload();
            $('#listInserts').append('<tr>'+ '<td>' + jsonData[0] + '</td>'
                                           + '<td>'+ '0' +'</td>'
                                           + '<td>'+ +'</td>'
                                            + '<td>'+ jsonData[1]+'</td>'
                                           + '<td class="del" rel="'+data+'" href="#"> X</td></tr>');
            document.getElementById("text").value = "";

        });
       return false;
    });
});
