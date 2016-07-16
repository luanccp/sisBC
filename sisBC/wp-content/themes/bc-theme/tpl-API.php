<?php
// Template Name: API

$debug = false;
if (isset ( $_REQUEST ['ilha_debug'] )) {
	$debug = true;
}

/* VERIFICA SE OS PARAMETROS DA API ESTAO OK */
if (! isset ( $_REQUEST ['action'] )) {
	/* NAO EXISTE ACTION DEFINIDO - TENTATIVA DE ACESSAR A API */
	header ( 'HTTP/1.1 403 Forbidden' );
	exit ( 403 );
}

/* VERIFICA SE EXISTE A CLASSE PARA GERENCIAR A API */
$filename = get_stylesheet_directory () . "/includes/api/$action.php";
if (! file_exists ( $filename )) {
	header ( 'HTTP/1.1 403 Forbidden' );
	exit ( 403 );
}

include_once $filename;