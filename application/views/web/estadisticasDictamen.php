<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
<section>
	<div class="" align="CENTER">
	   <label style="font-size:30px"><b>DICTAMEN ACTUAL DE PATRIARCADO MACHISTA OPRESOR</b></label>
	</div>
	<div class="row" id="grafico">
		<div class="col-12">
			<h2>Estadisticas</h2>
			<div class="row">
				<div class="col-auto mx-auto">
					<canvas id="myChart" height="300"></canvas>
				</div>
			</div>
		</div>
	</div>
	<div class="row" id="opiniones">
		<div class="col-12">
			<h2>Estadisticas</h2>
			<div class="row">
				<div class="col-auto mx-auto">
					<canvas id="myChart" height="300"></canvas>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
type: 'pie',
data: {
	labels: ["Muy malo", "Malo", "Regular", "Bueno", "Muy bueno"],
	datasets: [{
		data: [12, 19, 3, 5, 2],
		backgroundColor: [
			'rgb(209, 62, 62)',
			'rgb(201, 93, 14)',
			'rgb(167, 154, 156)',
			'rgb(109, 191, 102)',
			'rgb(23, 194, 8)'
		]
	}]
},
options: {

}
});
</script>
</script>
