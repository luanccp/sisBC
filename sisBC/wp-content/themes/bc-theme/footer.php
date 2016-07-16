<?php

/* VARIAVEIS GLOBAIS */
global $bc_global_vars;

// Configuracoes base do template
global $template_name;
global $directory_uri;
global $assets_uri;
global $pages_uri;


/* INCLUSAO DOS ARQUIVOS JS */
wp_enqueue_script('jquery',  'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js',array(),'2.2.3', true);
wp_enqueue_script('pace', 'https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',array('jquery'),'1.0.2', true);
/* START - PARA USO DE GRAFICOS */
wp_enqueue_script ( 'd3', 'https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.17/d3.min.js',array('jquery'),'3.5.17', true);
wp_enqueue_script('rickshaw', 'https://cdnjs.cloudflare.com/ajax/libs/rickshaw/1.5.1/rickshaw.min.js',array('jquery'),'1.5.1', true);
wp_enqueue_script ( 'concilia-charts', $bc_global_vars ['stylesheet_uri'] . '/assets/js/concilia-charts.js',array('jquery'),false, true);
/* END - PARA USO DE GRAFICOS */
wp_enqueue_script ( 'modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array ('jquery' ), '2.8.3', true );
wp_enqueue_script ( 'jquery-ui', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js', array ('jquery' ), '1.11.4', true );
wp_enqueue_script ( 'bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js', array ('jquery' ), '3.3.6', true );
wp_enqueue_script('jquery-easy',  $bc_global_vars ['stylesheet_uri'].'/assets/plugins/jquery/jquery-easy.js',array('jquery'),false, true);
wp_enqueue_script ( 'jquery.unveil', 'https://cdnjs.cloudflare.com/ajax/libs/unveil/1.3.0/jquery.unveil.min.js', array ('jquery' ), '1.3.0', true );
wp_enqueue_script('jquery.bez',  $bc_global_vars ['stylesheet_uri'].'/assets/plugins/jquery-bez/jquery.bez.min.js',array('jquery'),false, true);
wp_enqueue_script('jquery.ioslist',  $bc_global_vars ['stylesheet_uri'].'/assets/plugins/jquery-ios-list/jquery.ioslist.min.js',array('jquery'),false, true);
wp_enqueue_script ( 'imagesloaded', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.0/imagesloaded.pkgd.min.js', array ('jquery' ), '4.1.0', true );
wp_enqueue_script ( 'jquery.actual', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.actual/1.0.18/jquery.actual.min.js', array ('jquery' ), '1.0.18', true );
wp_enqueue_script ( 'jquery.scrollbar', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.scrollbar/0.2.10/jquery.scrollbar.min.js', array ('jquery' ), '0.2.10', true );
wp_enqueue_script ( 'classie', 'https://cdnjs.cloudflare.com/ajax/libs/classie/1.0.1/classie.min.js', null, '1.0.1', true );
wp_enqueue_script ( 'select2', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js', array ('jquery' ), '4.0.2', true );
wp_enqueue_script ( 'switchery', 'https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.1/switchery.min.js', null, '0.8.1', true );
wp_enqueue_script('d3.v3',  $bc_global_vars ['stylesheet_uri'].'/assets/plugins/nvd3/lib/d3.v3.js',array('jquery'),false, true);
wp_enqueue_script('nv.d3',  $bc_global_vars ['stylesheet_uri'].'/assets/plugins/nvd3/nv.d3.min.js',array('jquery'),false, true);
wp_enqueue_script('utils',  $bc_global_vars ['stylesheet_uri'].'/assets/plugins/nvd3/src/utils.js',array('jquery'),false, true);
wp_enqueue_script('tooltip',  $bc_global_vars ['stylesheet_uri'].'/assets/plugins/nvd3/src/tooltip.js',array('jquery'),false, true);
wp_enqueue_script('interactiveLayer',  $bc_global_vars ['stylesheet_uri'].'/assets/plugins/nvd3/src/interactiveLayer.js',array('jquery'),false, true);
wp_enqueue_script('axis',  $bc_global_vars ['stylesheet_uri'].'/assets/plugins/nvd3/src/models/axis.js',array('jquery'),false, true);
wp_enqueue_script('line',  $bc_global_vars ['stylesheet_uri'].'/assets/plugins/nvd3/src/models/line.js',array('jquery'),false, true);
wp_enqueue_script('lineWithFocusChart',  $bc_global_vars ['stylesheet_uri'].'/assets/plugins/nvd3/src/models/lineWithFocusChart.js',array('jquery'),false, true);
wp_enqueue_script ( 'hammer', 'https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js', null, '2.0.8', true );
wp_enqueue_script ( 'jquery.mousewheel', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js', array ('jquery' ), '3.1.13', true );
wp_enqueue_script('mapplic',  $bc_global_vars ['stylesheet_uri'].'/assets/plugins/mapplic/js/mapplic.js',array('jquery'),false, true);
wp_enqueue_script('MetroJs',  $bc_global_vars ['stylesheet_uri'].'/assets/plugins/jquery-metrojs/MetroJs.min.js',array('jquery'),false, true);
wp_enqueue_script('jquery.sparkline',  $bc_global_vars ['stylesheet_uri'].'/assets/plugins/jquery-sparkline/jquery.sparkline.min.js',array('jquery'),false, true);
wp_enqueue_script ( 'skycons', 'https://cdnjs.cloudflare.com/ajax/libs/skycons/1396634940/skycons.min.js', null, '1', true );
wp_enqueue_script ( 'bootstrap-datepicker', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js', array ('jquery' ), '1.6.0', true );
wp_enqueue_script('jquery.dynatree',  $bc_global_vars ['stylesheet_uri'].'/assets/plugins/jquery-dynatree/jquery.dynatree.min.js',array('jquery'),false, true);
wp_enqueue_script('tree_view',  $bc_global_vars ['stylesheet_uri'].'/assets/js/tree_view.js',array('jquery'),false, true);
// CORE APP CALENDAR
wp_enqueue_script ( 'moment', $bc_global_vars ['stylesheet_uri'] . '/assets/plugins/moment/moment.min.js', array ('jquery'), false, true );
wp_enqueue_script ( 'interact', 'https://cdnjs.cloudflare.com/ajax/libs/interact.js/1.2.6/interact.min.js', array ('jquery' ), '1.2.6', true );
wp_enqueue_script ( 'pages.calendar', $bc_global_vars ['stylesheet_uri'] . '/pages/js/pages.calendar.js', array ('jquery'), false, true );
wp_enqueue_script ( 'calendar', $bc_global_vars ['stylesheet_uri'] . '/assets/js/calendar.js', array ('jquery'), false, true );
/* ARQUIVO NECESSARIO PARA TIMELINE */

wp_enqueue_script ( 'timeline', $bc_global_vars ['stylesheet_uri'] . '/assets/js/timeline.js', array ('jquery' ), '1', true );



// CORE TEMPLATE JS
wp_enqueue_script ( 'pages', $bc_global_vars ['stylesheet_uri'] . '/pages/js/pages.js',array('jquery'),false, true);

wp_enqueue_script ( 'widget-graph-options', $bc_global_vars ['stylesheet_uri'] . '/assets/js/widget-graph-options.js',array('jquery'),false, true);

// PAGE LEVEL JS
wp_enqueue_script ( 'scripts', $bc_global_vars ['stylesheet_uri'] . '/assets/js/scripts.js',array('jquery'),false, true);
wp_enqueue_script ( 'dashboard', $bc_global_vars ['stylesheet_uri'] . '/assets/js/dashboard.js',array('jquery'),false, true);


/* INCLUSAO DO JS */
wp_footer ();


?>