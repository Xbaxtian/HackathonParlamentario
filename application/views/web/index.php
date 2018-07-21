
<section>
	<div class="row">
		<div class="col-auto mx-auto my-3">
			<input type="text" class="form-control busca" placeholder="Buscar..">
		</div>
	</div>
	<div class="row">
		<div class="card tarjeta col-md-12 col-sm-10 mx-3 mb-3 py-1" id="tablero">
			<div class="row align-items-center py-2">
				<div class="col-2"><strong>Cod</strong></div>
				<div class="col-5"><strong>Titulo</strong></div>
				<div class="col-3"><strong>Fecha de debate</strong></div>
				<strong>Estadistic</strong>
			</div>
			<div class="row item align-items-center py-2 ">
				<div class="col-2"><span class="align-middle">00000</span></div>
				<div class="col-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</div>
				<div class="col-3">06/06/06</div>
				<button class="btn btn-dark ml-2"><i class="fas fa-chart-pie"></i></button>
			</div>
			<div class="row item align-items-center py-2">
				<div class="col-2"><span class="align-middle">00000</span></div>
				<div class="col-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</div>
				<div class="col-3">06/06/06</div>
				<button class="btn btn-dark ml-2"><i class="fas fa-chart-pie"></i></button>
			</div>
			<div class="row item align-items-center py-2">
				<div class="col-2"><span class="align-middle">00000</span></div>
				<div class="col-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</div>
				<div class="col-3">06/06/06</div>
				<button class="btn btn-dark ml-2"><i class="fas fa-chart-pie"></i></button>
			</div>
			<div class="row item align-items-center py-2">
				<div class="col-2"><span class="align-middle">00000</span></div>
				<div class="col-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</div>
				<div class="col-3">06/06/06</div>
				<button class="btn btn-dark ml-2"><i class="fas fa-chart-pie"></i></button>
			</div>
			<div class="row item align-items-center py-2">
				<div class="col-2"><span class="align-middle">00000</span></div>
				<div class="col-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</div>
				<div class="col-3">06/06/06</div>
				<button class="btn btn-dark ml-2"><i class="fas fa-chart-pie"></i></button>
			</div>
			<div class="row item align-items-center py-2">
				<div class="col-2"><span class="align-middle">00000</span></div>
				<div class="col-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</div>
				<div class="col-3">06/06/06</div>
				<button class="btn btn-dark ml-2"><i class="fas fa-chart-pie"></i></button>
			</div>
			<div class="row item align-items-center py-2">
				<div class="col-2"><span class="align-middle">00000</span></div>
				<div class="col-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</div>
				<div class="col-3">06/06/06</div>
				<button class="btn btn-dark ml-2"><i class="fas fa-chart-pie"></i></button>
			</div>
			<div class="row item align-items-center py-2">
				<div class="col-2"><span class="align-middle">00000</span></div>
				<div class="col-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</div>
				<div class="col-3">06/06/06</div>
				<button class="btn btn-dark ml-2"><i class="fas fa-chart-pie"></i></button>
			</div>
			<div class="row item align-items-center py-2">
				<div class="col-2"><span class="align-middle">00000</span></div>
				<div class="col-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</div>
				<div class="col-3">06/06/06</div>
				<button class="btn btn-dark ml-2"><i class="fas fa-chart-pie"></i></button>
			</div>
			<div class="row item align-items-center py-2">
				<div class="col-2"><span class="align-middle">00000</span></div>
				<div class="col-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</div>
				<div class="col-3">06/06/06</div>
				<button class="btn btn-dark ml-2"><i class="fas fa-chart-pie"></i></button>
			</div>
			<div class="row item align-items-center py-2">
				<div class="col-2"><span class="align-middle">00000</span></div>
				<div class="col-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</div>
				<div class="col-3">06/06/06</div>
				<button class="btn btn-dark ml-2"><i class="fas fa-chart-pie"></i></button>
			</div>

		</div>
	</div>
	<div class="row">
		<div class="col-auto mx-auto my-2">
			<button class="btn btn-red btn-shadow">Suscribirse</button>
		</div>
	</div>
</section>

<script>
	$(document).ready(function(){
		$("#tablero .item div").on("click",function(){
			window.location.href = "<?=base_url()?>detalleDictamen";
		});
		$("#tablero .item button").on("click",function(){
			window.location.href = "<?=base_url()?>estadisticas";
		});
	});
</script>
