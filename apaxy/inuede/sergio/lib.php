<?php

function Conectar() {

	$conexion = new mysqli( 'localhost' , 'root' , 'root', 'inuede' );
	//$conexion = new mysqli( 'localhost' , 'nujcvlpd' , 'fomopove', 'nujcvlpd_inuede' );

	if( $conexion->connect_errno ) {
	    echo "Fallo al contenctar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
	}

	return $conexion;

}

function DesConectar( $conexion ) {

	$conexion->close();

}

function DoLogin( $c, $u, $p ) {

	$sql = "SELECT rol FROM inuede_users WHERE user LIKE '$u' AND pass LIKE '$p'";

	$respuesta = $c->query( $sql );

	$isUser = $respuesta->fetch_assoc();

	$respuesta->free_result();

	return $isUser[ 'rol' ];
}

function Logout() {
	// Destruir todas las variables de sesión.
	$_SESSION = array();

	// Destruir la sesión completamente
	if ( ini_get( "session.use_cookies" ) ){
	    $params = session_get_cookie_params();
	    setcookie( session_name(), '', time() - 42000, $params[ "path" ], $params[ "domain" ], $params[ "secure" ], $params[ "httponly" ] );
	}

	// Destruir la sesión.
	session_destroy();
}

function SelectSimple( $c, $campos, $tabla, $where, $order = FALSE, $limit = FALSE ) {

	$sql = "SELECT " . $campos . " FROM " . $tabla . " WHERE " . $where;

	if( $order ) $sql .= " ORDER BY " . $order;

	if( $limit ) $sql .= " LIMIT " . $limit;

	$respuesta = $c->query( $sql );

	$filas = FALSE;

	while($fila = $respuesta->fetch_assoc() ) {
		$filas[] = $fila;
	}

	$respuesta->free_result();

	return $filas;
}

function InsertSimple( $c, $tabla, $values) {
	
	$sql = "INSERT INTO " . $tabla . " VALUES (" . $values . ")";
	$respuesta = $c->query( $sql );

	if( $respuesta != TRUE )
		$respuesta = "Error en la inserción: (" . $c->errno . ") " . $c->error;

	return $respuesta;
}

function UpdateSimple( $c, $tabla, $values, $where ) {

	$sql = "UPDATE " . $tabla . " SET " . $values . " WHERE " . $where;
	$respuesta = $c->query( $sql );

	if( $respuesta != TRUE )
		$respuesta = "Error en la actualización: (" . $c->errno . ") " . $c->error;

	return $respuesta;
}

function ObtenerEnlaces() {

	$c = Conectar();

	$filas = SelectSimple ( $c, "enlace", "inuede_pages", 1);

	foreach ($filas as $fila)
		$resultado[] = $fila [ 'enlace' ];

	DesConectar ( $c );

	return $resultado;
}

function ExisteContenido( $enlace ){
	
	$c = Conectar();

	$fila = SelectSimple( $c, "id", "inuede_content", "enlace = '" . $enlace . "'" );

	return $fila;
}

function ControlImagen( $file ){

	if( $file[ 'imagen' ][ 'error' ] == 4 ) return FALSE;

	$valido = TRUE;
	$finfo = new finfo(FILEINFO_MIME_TYPE);

	$types = array('image/jpeg', 'image/png');

	if( $file[ 'imagen' ][ 'error' ] != 0 )
		$valido = "Error al subir la imagen: " . $file[ 'imagen' ][ 'error' ] . ".";
	elseif( $file[ 'imagen' ][ 'size' ] > 1050000)
		$valido = "Imagen de tamaño más grande del permitido.";
	elseif( false === array_search( $finfo->file( $file[ 'imagen' ][ 'tmp_name' ] ), array( 'jpg' => 'image/jpeg', 'png' => 'image/png', ), true ) )
		$valido = "Fichero de formato no permitido.";
	
	// Lo siguiente se comenta hasta actualizar la versión de PHP en el servidor
	// elseif( !in_array( $file[ 'imagen' ][ 'type' ], $types ) )
	//	$valido = "Fichero de formato no permitido.";
	


	return $valido;
}

?>