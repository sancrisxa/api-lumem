<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
	<head>
		<title>Autocomplete do jQuery UI com o Ajax do jQuery - Thiengo [Calopsita]</title>
	
		<style type="text/css">
			form {
				width: 400px;
				margin: 100px auto;
			}
			#campo-busca {
				width: 295px;
			}			
			.ui-autocomplete {
				padding: 5px;
				background: #f00;
			}
			.ui-menu-item {
				padding: 5px;
				background: #ff0;
			}
			.ui-menu-item .ui-corner-all {
				margin: 5px;
				background: green;
			}
			.ui-menu-item .ui-state-focus {
				color: #fff;
			}
		</style>
	</head>
	
	
	
	<body>
		<form>
			<h3>Plugin Autocomplete do jQuery UI trabalhando em Conjunto com a Interface Ajax do jQuery</h3>
			<fieldset>
				<input type="text" id="campo-busca" placeholder="Buscar" />
			</fieldset>
		</form>

		<div id="result"></div>
		
		<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<script type="text/javascript">
			
			$('#campo-busca').autocomplete({
				minLength: 1,
				autoFocus: true,
				delay: 300,
				position: {
					my: 'left top',
					at: 'right top'
				},
				appendTo: '#result',
				source: function(request, response){
					$.ajax({
						url: 'http://localhost:8000/api/v1/products/search/' + $('#campo-busca').val(),
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
			
			
		</script>
	</body>
</html>