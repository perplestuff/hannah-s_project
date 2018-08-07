function refresh(){
	$.get('getvent', function(res){
		$('#timeline').html(res);
	});
}
function msgDelete(id){
	$.post('deletevent', {
		id: id
	}, function(res){
		refresh();
		if (res !== '') {
			alert(res);
		}
	})
}
$(document).ready(function(){
	$('#ventspace').submit(function(e){
		e.preventDefault();
		$.ajax({
			type: 'POST',
			url: 'postvent',
			data: new FormData(this),
			success: function(res){
				refresh();
				$('#title').val('');
				$('#msg').val('');
				$('#pic').val('');
				if (res !== '') {
					alert(res);
				}
			},
			error: function(res){
				alert("Error.");
			},
			cache: false,
			contentType: false,
			processData: false
		});
	});
});
