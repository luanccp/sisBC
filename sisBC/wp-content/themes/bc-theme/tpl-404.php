<?php
// Template Name: Erro tpl-404
// Concilia Cartao

/* Verifica se o usuario esta logado e possui acesso a pagina */
require_once ('libs/check_security.php');

/* INICIA O HEADER */
get_header ();

?>
<!DOCTYPE html>
<html>
  <?php include_once 'includes/html/html-head.php';?>
  <body class="fixed-header dashboard">
	<!-- BEGIN SIDEBPANEL-->
    <?php get_sidebar();?>
    <!-- END SIDEBPANEL-->
	<!-- START PAGE-CONTAINER -->
	<div class="page-container ">
		<!-- START HEADER -->
      <?php include_once 'includes/html/html-topbar.php';?>
      <!-- END HEADER -->
		<!-- START PAGE CONTENT WRAPPER -->
		<div class="page-content-wrapper ">
			<!-- START PAGE CONTAINER -->
			<div class="container-xs-height full-height">
				<div class="row-xs-height">
					<div class="col-xs-height col-middle">
						<div class="error-container text-center">
							<h1 class="error-number">404</h1>
							<h2 class="semi-bold">Sorry but we couldnt find this page</h2>
							<p> This page you are looking for does not exsist <a href="#">Report this?</a></p>
						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTAINER -->
			<!-- START COPYRIGHT -->
        	<?php include_once 'includes/html/html-copyright.php';?>
        	<!-- END COPYRIGHT -->
		</div>
		<!-- END PAGE CONTENT WRAPPER -->
	</div>
	<!-- END PAGE CONTAINER -->
	<!--START QUICKVIEW -->
    <?php include_once 'includes/html/html-quickview.php';?>
    <!-- END QUICKVIEW-->
	<!-- START OVERLAY -->
    <?php include_once 'includes/html/html-searchoverlay.php';?>
    <!-- END OVERLAY -->
    <?php
				/* CARREGA O FOOTER */
				get_footer ( $template_name );
				wp_footer ();
				?>
  </body>
</html>

