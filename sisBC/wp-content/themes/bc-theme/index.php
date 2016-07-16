<?php get_header();?>
<!-- START PAGE CONTENT -->
<br>
<div class="content">
	<!-- PAINEL DE ESTATITISTICAS -->
	<div class="row">
		<div class="panel m-t-20">
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-1 text-center">Total:</div>
					<div class="col-sm-2 text-left">
						<p class="all-caps font-montserrat no-margin" style="font-size: 20px;">
							<strong>108</strong>
						</p>
					</div>
					<div class="col-sm-1 text-center">Aprovados:</div>
					<div class="col-sm-2 text-left">
						<p class="all-caps font-montserrat no-margin text-success " style="font-size: 20px;">
							<strong>36</strong>
						</p>
					</div>
					<div class="col-sm-1 text-center">Recusados:</div>
					<div class="col-sm-2 text-left">
						<p class="all-caps font-montserrat no-margin text-danger " style="font-size: 20px;">
							<strong>36</strong>
						</p>
					</div>
					<div class="col-sm-1 text-center">Estornos:</div>
					<div class="col-sm-2 text-left">
						<p class="all-caps font-montserrat no-margin text-warning " style="font-size: 20px;">
							<strong>36</strong>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div><!-- FIM DO PAINEL DE ESTATISTICAS  -->
	<!-- START CONTAINER FLUID -->
	<div class="container-fluid container-fixed-lg">
		<!-- BEGIN PlACE PAGE CONTENT HERE -->
		<!-- START PAGE CONTENT -->
		<div class="content sm-gutter">
			<!-- START CONTAINER FLUID -->
			<!-- START ROW -->
			<div class="row">
				<div class="col-md-6">
					<div class="widget-16 panel no-border no-margin widget-loader-circle"><!-- WIDGET OS GRAFICOS -->
						<div class="panel-heading">
							<div class="panel-title">Grafico de proje&ccedil;&otilde;es</div>
							<div class="panel-controls">
								<ul>
									<li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="p-l-25 p-r-45 p-t-25 p-b-25">
							<div class="row"><!-- LINHA DAS LEGENDAS -->
								<div class="col-md-4 ">
									<p class="hint-text all-caps font-montserrat small no-margin ">Semana anterior</p>
									<p class="all-caps font-montserrat  no-margin text-success ">14</p>
								</div>
								<div class="col-md-4 text-center">
									<p class="hint-text all-caps font-montserrat small no-margin ">Hoje</p>
									<p class="all-caps font-montserrat  no-margin text-warning ">24</p>
								</div>
								<div class="col-md-4 text-right">
									<p class="hint-text all-caps font-montserrat small no-margin ">Pr&oacute;xima semana</p>
									<p class="all-caps font-montserrat  no-margin text-success ">36</p>
								</div>
							</div>
						</div>
						<div class="relative no-overflow"><!-- LINHA DO GRAFICO EM SI -->
							<div class="widget-16-chart line-chart" data-line-color="success" data-points="true" data-point-color="white" data-stroke-width="2">
								<svg></svg>
							</div>
						</div>
						<div class="b-b b-t b-grey p-l-20 p-r-20 p-b-10 p-t-10"><!-- FILTROS -->
							<p class="pull-left">Filtro 2</p>
							<div class="pull-right">
								<input type="checkbox" data-init-plugin="switchery" />
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="b-b b-grey p-l-20 p-r-20 p-b-10 p-t-10">
							<p class="pull-left">Filtro 1</p>
							<div class="pull-right">
								<input type="checkbox" data-init-plugin="switchery"
									checked="checked" />
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<!-- END PLACE PAGE CONTENT HERE -->
				<!--START ALL TABS -->
				<div class="panel m-l-25">
					<div class="col-sm-6">
						<div class="row">
							<!--START TABS1 -->
							<div class="panel panel-transparent">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs nav-tabs-fillup"
									data-init-reponsive-tabs="dropdownfx">
									<li class="active"><a data-toggle="tab" href="#tab-fillup1"><span>Confirmados</span></a>
									</li>
									<li><a data-toggle="tab" href="#tab-fillup2"><span>Em andamento</span></a>
									</li>
									<li><a data-toggle="tab" href="#tab-fillup3"><span>Recusados</span></a>
									</li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div class="tab-pane active" id="tab-fillup1">
										<div class="row column-seperation">
											<div class="col-md-12">
												<h3>Confirmados</h3>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab-fillup2">
										<div class="row">
											<div class="col-md-12">
												<h3>Transa&ccedil;&otilde;es em andamentos</h3>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab-fillup3">
										<div class="row">
											<div class="col-md-12">
												<h3>Transa&ccedil;&otilde;es que foram recusadas!</h3>
											</div>
										</div>
									</div>
								</div>
								<!-- END TABS1-->
							</div>
						</div>
						<!-- END ROW -->
						<div class="row">
							<!--START TABS2 -->
							<div class="panel panel-transparent">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs nav-tabs-fillup"
									data-init-reponsive-tabs="dropdownfx">
									<li class="active"><a data-toggle="tab" href="#tab-fillup4"><span>Bandeira 1</span></a></li>
									<li><a data-toggle="tab" href="#tab-fillup5"><span>Bandeira 2</span></a></li>
									<li><a data-toggle="tab" href="#tab-fillup6"><span>Bandeira 3</span></a></li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div class="tab-pane active" id="tab-fillup4">
										<div class="row">
											<div class="col-md-12"><!-- GRAFICO -->
												<div id="chart"><svg></svg></div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab-fillup5">
										<div class="row">
											<div class="col-md-12">
												<h3>Grafico pizza</h3>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab-fillup6">
										<div class="row">
											<div class="col-md-12">
												<h3>grafico pizza</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END TABS2-->
						</div>
						<div class="row"><!-- LINHA DE RESUMO -->
							<div class="col-sm-4">
								<div class="panel">	
									<div class="panel-title text-center"><h5>Resumo da conta</h5></div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="panel">
									<div class="row">
										<div class="col-sm-4">
											<div class="panel-title text-center"><h5>Volume:</h5></div>
										</div>
										<div class="col-sm-8 text-center">
											<h5><strong>R$328,00</strong></h5>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="panel">
									<div class="row">
										<div class="col-sm-4">
											<div class="panel-title text-center"><h5>Clientes:</h5></div>
										</div>
										<div class="col-sm-8 text-center">
											<h5><strong>28</strong></h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END ALL TABS -->
				</div>
			</div>
			<!-- END ROW -->
			<!--END CONTAINER FLUID -->
		</div>
	</div>
	<div id="chart"><svg></svg></div>
</div>
<script>

//Regular pie chart example
nv.addGraph(function() {
  var chart = nv.models.discreteBarChart()
      .x(function(d) { return d.label })    //Specify the data accessors.
      .y(function(d) { return d.value })
      .staggerLabels(true)    //Too many bars and not enough room? Try staggering labels.
      .tooltips(false)        //Don't show tooltips
      .showValues(true)       //...instead, show the bar value right on top of each bar.
      .transitionDuration(350)
      ;

  d3.select('#chart svg')
      .datum(exampleData())
      .call(chart);

  nv.utils.windowResize(chart.update);

  return chart;
});

//Each bar represents a single discrete quantity.
function exampleData() {
 return  [ 
    {
      key: "Cumulative Return",
      values: [
        { 
          "label" : "A Label" ,
          "value" : -29.765957771107
        } , 
        { 
          "label" : "B Label" , 
          "value" : 0
        } , 
        { 
          "label" : "C Label" , 
          "value" : 32.807804682612
        } , 
        { 
          "label" : "D Label" , 
          "value" : 196.45946739256
        } , 
        { 
          "label" : "E Label" ,
          "value" : 0.19434030906893
        } , 
        { 
          "label" : "F Label" , 
          "value" : -98.079782601442
        } , 
        { 
          "label" : "G Label" , 
          "value" : -13.925743130903
        } , 
        { 
          "label" : "H Label" , 
          "value" : -5.1387322875705
        }
      ]
    }
  ]
}
</script>
<?php get_footer(); ?>
