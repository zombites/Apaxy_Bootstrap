<?php

function Conectar() {
	
	$conexion = mysql_connect( 'localhost' , 'root' , 'root' );
	if( !$conexion ) {
		die('No pudo conectarse: ' . mysql_error() );
	}

	return $conexion;

}

function DesConectar( $conexion ) {

	mysql_close( $conexion );

}

function DoLogin( $c, $u, $p ) {

	mysql_select_db( "inuede", $c );

	$sql = "SELECT rol FROM inuede_users WHERE user LIKE '$u' AND pass LIKE '$p'";

	$query = mysql_query( $sql, $c );

	$isUser = mysql_num_rows( $query );

	mysql_free_result($query);

	return $isUser;
}

function Logout() {
	// Destruir todas las variables de sesión.
	$_SESSION = array();

	// Destruir la sesión completamente
	if (ini_get("session.use_cookies")) {
	    $params = session_get_cookie_params();
	    setcookie(session_name(), '', time() - 42000,
	        $params["path"], $params["domain"],
	        $params["secure"], $params["httponly"]
	    );
	}

	// Destruir la sesión.
	session_destroy();
}

function SelectSimple( $c, $campos, $tabla, $where) {

	mysql_select_db( "inuede", $c );

	$sql = "SELECT " . $campos . " FROM " . $tabla . " WHERE " . $where;
	$query = mysql_query( $sql, $c);

	while($fila = mysql_fetch_array( $query )) {
		$filas[] = $fila;
	}

	mysql_free_result($query);

	return $filas;
}

?>