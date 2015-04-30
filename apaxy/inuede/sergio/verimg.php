<?php
	include "lib.php";

	// Recuperamos la foto de la tabla

	$verimg = SelectSimple( Conectar(), "imagen", "inuede_content", "id = " . $_GET[ 'id' ]);

	header("Content-Type: image/jpeg,image/png");

	// Muestra la imagen
	echo $verimg[ 0 ][ 'imagen' ];

?>