<?php
// Template Name: homepage
// BC theme

/* DEFININDO AS GLOBAIS */
global $template_name;
global $bc_global_vars;

/* NOMEANDO OS TEMPLATES */
$template_name = 'home';

/* ATIVA HEADER */
get_header ( $template_name );

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
			<!-- START PAGE CONTENT -->
			<div class="content sm-gutter">
				<!-- START CONTAINER FLUID -->
				<div class="container-fluid container-fixed-lg">


					

				</div>
				<!-- END CONTAINER FLUID -->
			</div>
			<!-- END PAGE CONTENT -->
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