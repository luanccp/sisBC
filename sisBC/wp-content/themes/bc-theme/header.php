<?php
/* VARIAVEIS GLOBAIS */
global $bc_global_vars;

/* Verifica se o usuario esta logado e possui acesso  pagina */
require_once ('libs/check_security.php');

// Configuracoes base do template
global $template_name;
global $directory_uri;
global $assets_uri;
global $pages_uri;


/* REMOVE O WP_ADMIN_BAR */
add_filter ( 'show_admin_bar', '__return_false' );

// -----------INCLUSAO DO CSS
wp_enqueue_style ( 'style', $bc_global_vars ['stylesheet_uri'] . '/style.css' );
wp_enqueue_style ( 'pace-theme-flash', $bc_global_vars ['stylesheet_uri'] . '/assets/plugins/pace/pace-theme-flash.css' );
wp_enqueue_style ( 'bootstrap', $bc_global_vars ['stylesheet_uri'] . '/assets/plugins/boostrapv3/css/bootstrap.min.css' );
wp_enqueue_style ( 'font-awesome', $bc_global_vars ['stylesheet_uri'] . '/assets/plugins/font-awesome/css/font-awesome.css' );
wp_enqueue_style ( 'jquery.scrollbar', $bc_global_vars ['stylesheet_uri'] . '/assets/plugins/jquery-scrollbar/jquery.scrollbar.css' );
wp_enqueue_style ( 'select2', $bc_global_vars ['stylesheet_uri'] . '/assets/plugins/bootstrap-select2/select2.css' );
wp_enqueue_style ( 'switchery', $bc_global_vars ['stylesheet_uri'] . '/assets/plugins/switchery/css/switchery.min.css' );
wp_enqueue_style ( 'nv.d3', $bc_global_vars ['stylesheet_uri'] . '/assets/plugins/nvd3/nv.d3.min.css' );
wp_enqueue_style ( 'mapplic', $bc_global_vars ['stylesheet_uri'] . '/assets/plugins/mapplic/css/mapplic.css' );
wp_enqueue_style ( 'rickshaw', $bc_global_vars ['stylesheet_uri'] . '/assets/plugins/rickshaw/rickshaw.min.css' );
wp_enqueue_style ( 'datepicker3', $bc_global_vars ['stylesheet_uri'] . '/assets/plugins/bootstrap-datepicker/css/datepicker3.css' );
wp_enqueue_style ( 'MetroJs', $bc_global_vars ['stylesheet_uri'] . '/assets/plugins/jquery-metrojs/MetroJs.css' );

// ------------ BEGIN Pages CSS
wp_enqueue_style ( 'pages-icons', $bc_global_vars ['stylesheet_uri'] . '/pages/css/pages-icons.css' );
wp_enqueue_style ( 'pages', $bc_global_vars ['stylesheet_uri'] . '/pages/css/pages.css' );


?>