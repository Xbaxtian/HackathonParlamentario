<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
<section>
	<div class="" align="CENTER">
	   <label class="form-group m-4" style="font-size:30px"><b>DICTAMEN ACTUAL DE PATRIARCADO MACHISTA OPRESOR</b></label>
	</div>
	<ul class="nav nav-tabs nav-fill">
		<li class="nav-item">
			<a id="tab1" class="nav-link active" style="font-size:20px;"><b>Estadísticas</b></a>
		</li>
		<li class="nav-item">
			<a id="tab2" class="nav-link" style="font-size:20px;"><b>Opiniones</b></a>
		</li>
	</ul>
	<div class="row" id="grafico">
		<div class="col-12">
			<div class="car mb-3 tarjeta">
				<div class="card-body">
					<div class="row">
						<div class="col-auto mx-auto">
							<canvas id="myChart" height="400"></canvas>
						</div>
					</div>
					<div class="row mx-auto">
						<div class="col-auto mx-auto">
							<ul class="list-group m-2">
  								<li class="aprueba" align="center"style="background-color: #1d1d1d;">Del total lo aprueba el <b>48%</b></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div style="display:none;" class="row" id="opiniones">
		<div class="col-12">
			<div class="card mb-3 tarjeta">
				<div class="card-body">
					<div class="row mb-3">
						<!-- AQUI METEREMOS LOS EJEMPLOS DE LOS COMENTARIOS-->
						<div class="col-12 mx-auto">
							<div class="row-auto mx-auto mb-2">
								<div class="card comentario">
									<div class="card-body" align="justify">
								    	Me parece una buena ley en cuestion de seguridad del pais. Me alegra ver nuevas iniciativas como esta.
									</div>
								</div>
							</div>
							<div class="row-auto mx-auto mb-2">
								<div class="card comentario">
									<div class="card-body" align="justify">
								    	Me llamo Felix, no soy trapo y apoyo esta ley #NoHomo...
									</div>
								</div>
							</div>
							<div class="row-auto mx-auto mb-2">
								<div class="card comentario">
									<div class="card-body" align="justify">
								    	Bla Bla. que onda que pex. I'm Xbaxtian!
									</div>
								</div>
							</div>
							<div class="row-auto mx-auto mb-2">
								<div class="card comentario">
									<div class="card-body" align="justify">
								    	Soy un texto sin sentido de vivir.
									</div>
								</div>
							</div>
							<div class="row-auto mx-auto mb-2" >
								<div class="card comentario">
									<div class="card-body" align="justify">
								    	This is some text within a card body; sí, me aburrí de escribir pero no podia dejar de aumetarle algo a esto...
									</div>
								</div>
							</div>
						</div>
						<!-- AQUI ACABAN LOS EJEMPLOS DE LOS COMENTARIOS-->
					</div>
					<div class="row mx-auto">
						<div class="col-12 mx-auto" align="center">
							<button class="btn btn-dark" type="button" name="button">Cargar mas comentarios</button>
						</div>
					</div>
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
			data: [65, 10, 35, 53, 44],
			backgroundColor: [
				'rgb(240, 72, 68)',//muy malo
				'rgb(255, 168, 71)',//malo
				'rgb(224, 222, 219)',//regular
				'rgb(16, 120, 176)',//bueno
				'rgb(33, 186, 92)'//muy bueno
			]
		}]
	},
	options: {
		legend: {
            labels: {
                fontColor: 'black',
				fontSize: 16
            }
        }
	}
	});
</script>
<script>
	$("#tab1").click(function(){
		$('#grafico').show();
		$('#opiniones').hide();
		$('#tab2').removeClass(['active']);
		$('#tab1').addClass(['active']);
	});
	$("#tab2").click(function(){
		$('#grafico').hide();
		$('#opiniones').show();
		$('#tab1').removeClass(['active']);
		$('#tab2').addClass(['active']);
	});
</script>
