<div class="modal-content">
	<div class="modal-header" style="">
		<h5 class="modal-title">Suscribción</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="modal-body">
		<p>Seleccione sus preferencias y las leyes le llegaran a su correo completamente GRATIS</p>
		<form class="" action="suscripcion" method="post">
			<div class="form-group">
				<label for="email"><b>Correo electrónico</b></label>
				<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingrese su correo electrónico">
			</div>
			<div class="form-group">
				<label for="preferencias"><b>Preferencias</b></label>
				<div class="card" id="card-comisiones">
					<div class="card-body">
						<div class="row">
							<div class="col-8">Comision</div>
							<label class="switch">
								<input class="form-check-input" type="checkbox" value="" checked>
								<span class="slider round"></span>
							</label>
						</div>
						<div class="row">
							<div class="col-8">Comision</div>
							<label class="switch">
								<input class="form-check-input" type="checkbox" value="">
								<span class="slider round"></span>
							</label>
						</div>
						<div class="row">
							<div class="col-8">Comision</div>
							<label class="switch">
								<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
								<span class="slider round"></span>
							</label>
						</div>
						<div class="row">
							<div class="col-8">Comision</div>
							<label class="switch">
								<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
								<span class="slider round"></span>
							</label>
						</div>
						<div class="row">
							<div class="col-8">Comision</div>
							<label class="switch">
								<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
								<span class="slider round"></span>
							</label>
						</div>
						<div class="row">
							<div class="col-8">Comision</div>
							<label class="switch">
								<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
								<span class="slider round"></span>
							</label>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		<button type="button" class="btn btn-red" id="btn-suscribir" onclick="suscribir()">Guardar</button>
	</div>
</div>

<script>
	$(document).ready(function() {

	});
	function suscribir(){
		$(".modal-body").html("<p>Se ha suscrito correctamente su correo, en unos momentos le llegara un correo de confirmacion, revise su bandeja de spam por favor</p>");
		$("#btn-suscribir").hide(0,function(){
			$("button",$(this).parent()).removeClass('btn-secondary');
			$("button",$(this).parent()).addClass('btn-red');
			$("button",$(this).parent()).html('Aceptar');
		});
	}
</script>
