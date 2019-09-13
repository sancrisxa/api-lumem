$('#campo-busca').autocomplete({
	minLength: 2,
	autoFocus: true,
	delay: 300,
	appendTo: '#result',
	source: function(request, response){
		$.ajax({
			url: 'http://localhost:8080/api/v1/events/search/' + $('#campo-busca').val(),
			type: 'get',
			dataType: 'html',
			data: {
				'termo': request.term
			}
		}).done(function(data){
			if(data.length > 0){

                data = data.split(',');
				response( $.each(data, function(key, item){
					return({
						label: item
					});
				}));
			}
		});
	}
});
