$(document).ready(function(){

			$('#curr_index').change(function(){

                $("#result").empty();

            	$.ajax({
					type: "POST",
					url: "client.php",
					data: "currency_id="+$("#curr_index option:selected").val(),
					success: function(html){$("#result").html(html);}
				});
				return false;
			});
});