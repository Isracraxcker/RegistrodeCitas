$(function(){

	// Lista de Continentes
	$.post( '../view/select/medico.php' ).done( function(respuesta)
	{
		$( '#continentes' ).html( respuesta );
	});

	// lista de Paises	
	$('#continentes').change(function()
	{
		var el_continente = $(this).val();
		
		// Lista de Paises
		$.post( '../view/select/area.php', { continente: el_continente} ).done( function( respuesta )
		{
			$( '#paises' ).html( respuesta );
		});
	});
	
	// Lista de Ciudades
	$( '#paises' ).change( function()
	{
		


		var el_horario = $(this).val();
		$.post( '../view/select/doctor_horario', { horario: el_horario} ).done( function( respuesta )
		{
			$( '#horario' ).html( respuesta );
		});


		
	});

})
