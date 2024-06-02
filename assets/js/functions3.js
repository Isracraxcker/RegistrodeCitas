$(function(){

	// Lista de docente
	$.post( '../view/select/doctor.php' ).done( function(respuesta)
	{
		$( '#doctor' ).html( respuesta );
	});
	
	
	// Lista de Ciudades
	$( '#doctor' ).change( function()
	{
		var el_continente = $(this).val();

	});


	
	
	

})
