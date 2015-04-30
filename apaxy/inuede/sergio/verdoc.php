<?php
	include "lib.php";

	// Recuperamos la foto de la tabla

	$verimg = SelectSimple( Conectar(), "contenido", "inuede_pages", "id = " . $_GET[ 'id' ]);


	// Muestra la imagen
	echo $verimg[ 0 ][ 'contenido' ];

?>