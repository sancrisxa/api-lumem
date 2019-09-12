$('#campo-busca').autocomplete({
	minLength: 1,
	autoFocus: true,
	delay: 300,
	// position: {
	// 	my: 'left top',
	// 	at: 'right top'
	// },
	appendTo: '#result',
	source: function(request, response){
		$.ajax({
			url: 'http://localhost:8000/api/v1/events/search/' + $('#campo-busca').val(),
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