<?php
/**
 * VARIAVEL GLOBAL PARA TODAS AS FUNCOES DO WORDPRESS
 */
global $template_name;
global $bc_global_vars;
$bc_global_vars = array ();
$bc_global_vars ['stylesheet_uri'] = get_stylesheet_directory_uri ();
$bc_global_vars ['stylesheet_directory'] = get_stylesheet_directory ();
$bc_global_vars ['siteurl'] = get_site_url ( null, '', 'https' );

/**
 * Pega o nome da pagina e volta sua URL
 *
 * @param String $nome
 *        	- Nome do Arquivo do Template. Ex: tpl-dashboard.php
 * @return String $guid - Nome da Pagina
 */
function concilia_getPagesUrl($nome) {
	$pages = get_pages ( array (
			'meta_key' => '_wp_page_template',
			'meta_value' => $nome 
	) );
	if (isset ( $pages [0] )) {
		/* EXISTE PELO MENOS UMA PAGINA */
		$guid = ( string ) $pages [0]->guid;
		return ($guid);
	}
	return (NULL);
}

