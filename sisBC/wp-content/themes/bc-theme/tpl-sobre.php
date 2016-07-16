<?php
// Template Name: Sobre
// Concilia Cartao

/* Verifica se o usuario esta logado e possui acesso a pagina */
require_once ('libs/check_security.php');

/* DECLARA AS GLOBAIS */
global $template_name;
global $concilia_global_vars;

/* DEFINE O TIPO DO TEMPLATE NO CORPO */
$template_name = 'sobre';

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
			
				<!-- START CONTAINER FLUID -->
				<div class="content ">
					<nav class="navbar navbar-default bg-master-lighter sm-padding-10"
						role="navigation">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed"
									data-toggle="collapse" data-target="#sub-nav">
									<span class="sr-only">Toggle navigation</span> <span
										class="icon-bar"></span> <span class="icon-bar"></span> <span
										class="icon-bar"></span>
								</button>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="sub-nav">
								<!-- navbar com opcoes e menus -->
								<div class="row">
									<div class="col-sm-4">
										<ul class="nav navbar-nav">
											<!-- navbar com opcoes -->
											<li class="dropdown"><a href="#" class="dropdown-toggle"
												data-toggle="dropdown"><i class="fa fa-file-text m-r-10"></i>
													Squarespace <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu">
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
													<li class="divider"></li>
													<li><a href="#">One more separated link</a></li>
												</ul></li>
										</ul>
									</div>
									<div class="col-sm-4">
										<ul class="nav navbar-nav navbar-center">
											<!-- Menu central da navbar -->
											<li><a href="#">Open</a></li>
											<li><a href="#" data-toggle="tooltip" data-placement="bottom"
												title="Print"><i class="fa fa-print"></i></a></li>
											<li><a href="#" data-toggle="tooltip" data-placement="bottom"
												title="Download"><i class="fa fa-download"></i></a></li>
										</ul>
									</div>
									<div class="col-sm-4">
										<ul class="nav navbar-nav navbar-right">
											<!-- Menu do lado direito da navbar -->
											<li><a href="#" class="p-r-10"><img width="25" height="25"
													alt="" class="icon-pdf"
													data-src-retina="<?php echo get_template_directory_uri();?>/assets/img/invoice/pdf2x.png"
													data-src="<?php echo get_template_directory_uri();?>/assets/img/invoice/pdf.png"
													src="<?php echo get_template_directory_uri();?>/assets/img/invoice/pdf2x.png"></a>
											</li>
											<li><a href="#" class="p-r-10"><img width="25" height="25"
													alt="" class="icon-image"
													data-src-retina="<?php echo get_template_directory_uri();?>/assets/img/invoice/image2x.png"
													data-src="<?php echo get_template_directory_uri();?>/assets/img/invoice/image.png"
													src="<?php echo get_template_directory_uri();?>/assets/img/invoice/image2x.png"></a>
											</li>
											<li><a href="#" class="p-r-10"><img width="25" height="25"
													alt="" class="icon-doc"
													data-src-retina="<?php echo get_template_directory_uri();?>/assets/img/invoice/doc2x.png"
													data-src="<?php echo get_template_directory_uri();?>/assets/img/invoice/doc.png"
													src="<?php echo get_template_directory_uri();?>/assets/img/invoice/doc2x.png"></a>
											</li>
											<li><a href="#" class="p-r-10"
												onclick="$.Pages.setFullScreen(document.querySelector('html'));"><i
													class="fa fa-expand"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /.navbar-collapse -->
						</div>
						<!-- /.container-fluid -->
					</nav>
					<!-- START CONTAINER FLUID -->
					<div class="container-fluid container-fixed-lg">
						<!-- START PANEL -->
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="invoice padding-50 sm-padding-10">
									<div>
										<div class="pull-left">
											<!-- LOGO, NOME E NUMERO -->
											<img width="235" height="47" alt="" class="invoice-logo"
												data-src-retina="<?php echo get_template_directory_uri();?>/assets/img/invoice/squarespace2x.png"
												data-src="<?php echo get_template_directory_uri();?>/assets/img/invoice/squarespace.png"
												src="<?php echo get_template_directory_uri();?>/assets/img/invoice/squarespace2x.png">
											<address class="m-t-10">
												Apple Enterprise Sales <br>(877) 412-7753. <br>
											</address>
										</div>
										<div class="pull-right sm-m-t-20">
											<h2 class="font-montserrat all-caps hint-text">Invoice</h2>
											<!-- TITULA DO FATURAMENTO DA EMPRESA -->
										</div>
										<div class="clearfix"></div>
									</div>
									<br> <br>
									<div class="container-sm-height">
										<!-- DADOS DA EMPRESA -->
										<div class="row-sm-height">
											<div class="col-md-9 col-sm-height sm-no-padding">
												<p class="small no-margin">Invoice to</p>
												<h5 class="semi-bold m-t-0">Darren Forthway</h5>
												<address>
													<strong>Pages Incoperated.</strong> <br>page.inc <br>1600
													Amphitheatre Pkwy, Mountain View, <br>CA 94043, United
													States
												</address>
											</div>
											<div
												class="col-md-3 col-sm-height col-bottom sm-no-padding sm-p-b-20">
												<br>
												<div>
													<div class="pull-left font-montserrat bold all-caps">Invoice
														No :</div>
													<div class="pull-right">0047</div>
													<div class="clearfix"></div>
												</div>
												<div>
													<div class="pull-left font-montserrat bold all-caps">Invoice
														date :</div>
													<div class="pull-right">29/09/14</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="table-responsive">
										<table class="table m-t-50">
											<!-- DESCRICAO DAS ATIVIDADES -->
											<thead>
												<tr>
													<th class="">Task Description</th>
													<th class="text-center">Rate</th>
													<th class="text-center">Hours</th>
													<th class="text-right">Total</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="">
														<p class="text-black">Character Illustration</p>
														<p class="small hint-text">Character Design projects from
															the latest top online portfolios on Behance.</p>
													</td>
													<td class="text-center">$65.00</td>
													<td class="text-center">84</td>
													<td class="text-right">$5,376.00</td>
												</tr>
												<tr>
													<td class="">
														<p class="text-black">Cross Heart Charity Branding</p>
														<p class="small hint-text">Attempt to attach higher
															credibility to a new product by associating it with a
															well established company name</p>
													</td>
													<td class="text-center">$89.00</td>
													<td class="text-center">100</td>
													<td class="text-right">$8,900.00</td>
												</tr>
												<tr>
													<td class="">
														<p class="text-black">iOs App</p>
														<p class="small hint-text">A video game franchise Inspired
															primarily by a sketch of stylized wingless - Including
															Branding / Graphics / Motion Picture &amp; Videos</p>
													</td>
													<td class="text-center">$100.00</td>
													<td class="text-center">500</td>
													<td class="text-right">$50,000.00</td>
												</tr>
											</tbody>
										</table>
									</div>
									<br> <br> <br> <br> <br>
									<div>
										<img width="150" height="58" alt="" class="invoice-signature"
											data-src-retina="<?php echo get_template_directory_uri();?>/assets/img/invoice/signature2x.png"
											data-src="<?php echo get_template_directory_uri();?>/assets/img/invoice/signature.png"
											src="<?php echo get_template_directory_uri();?>/assets/img/invoice/signature2x.png">
										<p>Designer’s Identity</p>
									</div>
									<br> <br>
									<div class="container-sm-height">
										<!-- AREA DOS VALORES -->
										<div class="row row-sm-height b-a b-grey">
											<div
												class="col-sm-2 col-sm-height col-middle p-l-25 sm-p-t-15 sm-p-l-15 clearfix sm-p-b-15">
												<h5
													class="font-montserrat all-caps small no-margin hint-text bold">Advance</h5>
												<h3 class="no-margin">$21,000.00</h3>
											</div>
											<div
												class="col-sm-5 col-sm-height col-middle clearfix sm-p-b-15">
												<h5
													class="font-montserrat all-caps small no-margin hint-text bold">Discount
													(10%)</h5>
												<h3 class="no-margin">$645.00</h3>
											</div>
											<div
												class="col-sm-5 text-right bg-menu col-sm-height padding-15">
												<h5
													class="font-montserrat all-caps small no-margin hint-text text-white bold">Total</h5>
												<h1 class="no-margin text-white">$64,276.00</h1>
											</div>
										</div>
									</div>
									<!-- FIM DA AREA DE VALORES -->
									<hr>
									<p class="small hint-text">Services will be invoiced in
										accordance with the Service Description. You must pay all
										undisputed invoices in full within 30 days of the invoice
										date, unless otherwise specified under the Special Terms and
										Conditions. All payments must reference the invoice number.
										Unless otherwise specified, all invoices shall be paid in the
										currency of the invoice</p>
									<p class="small hint-text">Insight retains the right to decline
										to extend credit and to require that the applicable purchase
										price be paid prior to performance of Services based on
										changes in insight's credit policies or your financial
										condition and/or payment record. Insight reserves the right to
										charge interest of 1.5% per month or the maximum allowable by
										applicable law, whichever is less, for any undisputed past due
										invoices. You are responsible for all costs of collection,
										including reasonable attorneys' fees, for any payment default
										on undisputed invoices. In addition, Insight may terminate all
										further work if payment is not received in a timely manner.</p>
									<br>
									<hr>
									<div>
										<img
											src="<?php echo get_template_directory_uri();?>/assets/img/logo.png"
											alt="logo"
											data-src="<?php echo get_template_directory_uri();?>/assets/img/logo.png"
											data-src-retina="<?php echo get_template_directory_uri();?>/assets/img/logo_2x.png"
											width="78" height="22"> <span
											class="m-l-70 text-black sm-pull-right">+34 346 4546 445</span>
										<span class="m-l-40 text-black sm-pull-right">support@revox.io</span>
									</div>
								</div>
							</div>
						</div>
						<!-- END PANEL -->
					</div>
					<!-- END CONTAINER FLUID -->
				</div>


				<!-- END PAGE CONTENT WRAPPER -->
				<!-- END CONTAINER FLUID -->
			
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