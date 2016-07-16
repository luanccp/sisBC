<?php
?>
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title>
		<?php
		// COLOCA O TITULO DINAMICAMENTE
		global $template_name;
		wp_title ( '|', true, 'right' );
		
		// Add the blog name.
		bloginfo ( 'name' );
		?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
	<link rel="apple-touch-icon" href="pages/ico/60.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $bc_global_vars ['stylesheet_uri'];?>/pages/ico/76.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $bc_global_vars ['stylesheet_uri'];?>/pages/ico/120.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $bc_global_vars ['stylesheet_uri'];?>/pages/ico/152.png">
	<link rel="icon" type="image/x-icon" href="favicon.ico" />
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!--[if lte IE 9]>
		<link href="<?php echo $bc_global_vars ['stylesheet_uri'];?>/assets/plugins/codrops-dialogFx/dialog.ie.css" rel="stylesheet" type="text/css" media="screen" />
	<![endif]-->
</head>