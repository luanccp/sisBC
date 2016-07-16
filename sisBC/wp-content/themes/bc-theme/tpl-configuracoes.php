 <?php
	// Template Name: Configurações
	// Concilia Cartao
	
	/* Verifica se o usuario esta logado e possui acesso a pagina */
	require_once ('libs/check_security.php');
	
	/* DECLARA AS GLOBAIS */
	global $template_name;
	global $concilia_global_vars;
	
	/* DEFINE O TIPO DO TEMPLATE NO CORPO */
	$template_name = 'configuracoes';
	
	/* INICIA O HEADER */
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
				<div class="container-fluid padding-25 sm-padding-10">

					<div class="row">
						<div class="col-md-12">
							<div class="panel-group" id="accordion" role="tablist"
								aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion"
												href="#collapseOne" aria-expanded="true"
												aria-controls="collapseOne"> Area de
												configura&ccedil;&atilde;o 1 </a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in"
										role="tabpanel" aria-labelledby="headingOne">
										<!-- PRIMEIRO PAINEL -->
										<div class="panel-body">
											<div class="b-b b-t b-grey p-l-20 p-r-20 p-b-10 p-t-10">
												<!-- FILTROS -->
												<p class="pull-left">Modo ativiado 1</p>
												<div class="pull-right">
													<input type="checkbox" data-init-plugin="switchery" />
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="b-b b-grey p-l-20 p-r-20 p-b-10 p-t-10">
												<p class="pull-left">Modo ativado 2</p>
												<div class="pull-right">
													<input type="checkbox" data-init-plugin="switchery"
														checked="checked" />
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwo">
										<h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse"
												data-parent="#accordion" href="#collapseTwo"
												aria-expanded="false" aria-controls="collapseTwo"> Area de
												configura&ccedil;&atilde;o 2 </a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse"
										role="tabpanel" aria-labelledby="headingTwo">
										<!-- SEGUNDO PAINEL -->
										<div class="panel-body">CONTEUDO</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingThree">
										<h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse"
												data-parent="#accordion" href="#collapseThree"
												aria-expanded="false" aria-controls="collapseThree"> Area de
												configura&ccedil;&atilde;o 3</a>
										</h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse"
										role="tabpanel" aria-labelledby="headingThree">
										<!-- TERCEIRO PAINEL -->
										<div class="panel-body">CONTEUDO</div>
									</div>
								</div>
							</div>
						</div>
					</div>
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