/* GRAFICO 2 */

var data = [ { x: 0, y: 40 }, { x: 1, y: 49 }, { x: 2, y: 17 }, { x: 3, y: 42 } ];

var graph = new Rickshaw.Graph( {
        element: document.querySelector("#chart2"),
        width: 580,
        height: 250,
        series: [ {
                color: 'steelblue',
                data: data
        } ]
} );

graph.render();

/* GRAFICO 1 */
var seriesData = [ [], [], [] ];
var random = new Rickshaw.Fixtures.RandomData(150);

for (var i = 0; i < 150; i++) {
	random.addData(seriesData);
}



var graph = new Rickshaw.Graph( {
	element: document.getElementById("chart1"),
	width: 500,
	height: 300,
	renderer: 'line',
	series: [
		{
			color: "#c05020",
			data: seriesData[0],
			name: 'Cartao marron'
		}, {
			color: "#30c020",
			data: seriesData[1],
			name: 'Cartao verde'
		}, {
			color: "#6060c0",
			data: seriesData[2],
			name: 'Cartao azul'
		}
	]
} );

graph.render();

var legend = document.querySelector('#legend');

var Hover = Rickshaw.Class.create(Rickshaw.Graph.HoverDetail, {

	render: function(args) {

		legend.innerHTML = args.formattedXValue;

		args.detail.sort(function(a, b) { return a.order - b.order }).forEach( function(d) {

			var line = document.createElement('div');
			line.className = 'line';

			var swatch = document.createElement('div');
			swatch.className = 'swatch';
			swatch.style.backgroundColor = d.series.color;

			var label = document.createElement('div');
			label.className = 'label';
			label.innerHTML = d.name + ": " + d.formattedYValue;

			line.appendChild(swatch);
			line.appendChild(label);

			legend.appendChild(line);

//			var dot = document.createElement('div');
//			dot.className = 'dot';
//			dot.style.top = graph.y(d.value.y0 + d.value.y) + 'px';
//			dot.style.borderColor = d.series.color;

			//this.element.appendChild(dot);

			//dot.className = 'dot active';

			this.show();

		}, this );
        }
});

var hover = new Hover( { graph: graph } ); 



/* GRAFICO 3 */

var seriesData = [ [], [] ];
var random = new Rickshaw.Fixtures.RandomData(1500000);

for (var i = 0; i < 900; i++) {
	random.addData(seriesData);
}

var graph = new Rickshaw.Graph({
	element: document.getElementById("chart3"),
	width: 960,
	height: 500,
	stroke: true,
	strokeWidth: 0.5,
	renderer: 'area',
	xScale: d3.time.scale(),
	yScale: d3.scale.sqrt(),
	series:[
		{ color: 'steelblue', data: seriesData[0] },
		{ color: '#99d4ee', data: seriesData[1] }
	] 
});

graph.render();

var xAxis = new Rickshaw.Graph.Axis.X({
	graph: graph,
	tickFormat: graph.x.tickFormat()
});

xAxis.render();

var yAxis = new Rickshaw.Graph.Axis.Y({
	graph: graph
});

yAxis.render();

var slider = new Rickshaw.Graph.RangeSlider.Preview({
	graph: graph,
	element: document.getElementById('slider')
});