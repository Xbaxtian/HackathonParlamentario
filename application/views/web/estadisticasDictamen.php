<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
<section>
	<br>
	<div class="" align="CENTER">
	   <label style="font-size:15px" class="titulo"></label>
	</div>
	<br>
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
  								<li class="aprueba" align="center">
									<p>Del total lo aprueba el <p style="font-size: 30px" id="porc"></p></p>
								</li>
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
						<div id="comentan" class="col-12 mx-auto">

						</div>
						<!-- AQUI ACABAN LOS EJEMPLOS DE LOS COMENTARIOS-->
					</div>
					<div class="row mx-auto">
						<div class="col-12 mx-auto" align="center">
							<button id="btncargar" class="btn btn-dark" type="button" name="button">Cargar mas comentarios</button>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<script>
	var codigo = "<?= $codigo?>";
	var porcentaje;
	var total;
	var inc = 10;

	$(document).ready(function(){
		$.post("<?= base_url()?>web/enviarpuntuaciones",{"idObj":codigo},function(data){
			var ctx = document.getElementById("myChart").getContext('2d');
			var djson = {
				type: 'pie',
				data: {
					labels: ["Muy malo", "Malo", "Regular", "Bueno", "Muy bueno"],
					datasets: [{
						data: 	[	0,
									0,
									0,
									0,
									0],
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
			}
			for(var i in data.puntuaciones){
				var aux = data.puntuaciones[i].calificacion;
				djson.data.datasets[0].data[aux] =  data.puntuaciones[i].cantidad;
			}
			var myChart = new Chart(ctx, djson);
			total = parseInt(djson.data.datasets[0].data[0]) +
					parseInt(djson.data.datasets[0].data[1]) +
					parseInt(djson.data.datasets[0].data[2]) +
					parseInt(djson.data.datasets[0].data[3]) +
					parseInt(djson.data.datasets[0].data[4]);
			//console.log(total);
			porcentaje = Math.round(100*(parseInt(djson.data.datasets[0].data[3]) + parseInt(djson.data.datasets[0].data[4]))/ total);
			//console.log(porcentaje);
			$("#porc").html('<b>'+porcentaje+'%</b>');
		});
	});
</script>

<script>
	$(document).ready(function(){
		$.post("<?= base_url()?>dictamen/obtenerdictamen",{"idObj":codigo},function(data){
			id = data.resultado[0].id_dictamen;
			$(".titulo").html('<b>'+data.resultado[0].titulo+'</b>');
		});
	});

	$(document).ready(function(){
		$.post("<?= base_url()?>web/enviarcomentarios",{"idObj":codigo},function(data){
			console.log(data);
			var aux;
			for(var i = 0; i<inc ; i++){
				if(data.comentarios[i].comentario!==""){
					aux = 	'<div class="row-auto mx-auto mb-2" >\
							<div class="card comentario">\
							<div class="card-body" align="justify">'+
							data.comentarios[i].comentario
							+'</div>\
							</div>\
							</div>';
					$("#comentan").append(aux);
				}
			}
		});
	});

	$("#btncargar").click(function(){
		$.post("<?= base_url()?>web/enviarcomentarios",{"idObj":codigo},function(data){
			console.log(data);
			var aux;
			for(var i = inc; i < inc+10 ; i++){
				if(data.comentarios[i].comentario!==""){
					aux = 	'<div class="row-auto mx-auto mb-2" >\
							<div class="card comentario">\
							<div class="card-body" align="justify">'+
							data.comentarios[i].comentario
							+'</div>\
							</div>\
							</div>';
					$("#comentan").append(aux);
				}
			}
		});
		inc=inc+10;
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
