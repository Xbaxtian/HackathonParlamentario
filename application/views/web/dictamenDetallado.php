
<br>
<div class="" align="CENTER">
   <label style="font-size:30px"><b>DICTAMEN ACTUAL DE PATRIARCADO MACHISTA OPRESOR</b></label>
</div>
<div class="card mb-3 tarjeta">
    <div class="card-body">
        <div class="row">
            <label class="col-12"><b>SUMILLA:</b></label>
        </div>
        <div class="card">
            <label class="col-12 mx-auto py-2" align="justified">Propone autorizar al señor Presidente Constitucional de la República, para salir del territorio nacional del 30 de junio al 02 de julio de 2016, con el objeto de viajar a la ciudad de Puerto Varas, República de Chile, a fin de participar en la XI Cumbre de Jefes de Estado de la Alianza del Pacífico, ocasión en la cual el Perú entregará la Presidencia Pro Témpore de la Alianza del Pacífico ejercida desde julio de 2015</label>
        </div>
        <br>
        <div class="row">
            <label class="col-12"><b>PROPUESTA POR:</b></label>
        </div>
        <div class="card">
            <label class="col-12 mx-auto py-2" align="justified">PODER EJECUTIVO</label>
        </div>
		<br>
        <div class="row">
            <label class="col-12"><b>BANCADA:</b></label>
        </div>
        <div class="card">
            <label class="col-12 mx-auto py-2" align="justified"> </label>
        </div>
        <br>
        <div class="row">
            <label class="col-12"><b>FECHA DE DEBATE:</b></label>
        </div>
        <div class="card">
            <label class="col-12 py-2" style="font-size:20px" align="center"><b>12/12/1999</b></label>
        </div>
        <br>
        <div class="row" align="center">
            <div class="col-12">
                <a class="btn btn-red btn-shadow" data-toggle="collapse" href="#valoracion" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Valorar
                </a>
            </div>
        </div>
        <br>
        <div class="collapse" id="valoracion">
            <div class="row" align="center">
                <div class="col-12">
                    <p id="ranking_valor">Regular</p>
                    <p class="clasificacion" id="ranking">
                        <input id="radio1" type="radio" name="estrellas" value="5" calificacion="Muy bueno" checked> <label for="radio1">★</label>
                        <input id="radio2" type="radio" name="estrellas" value="4" calificacion="Bueno" checked>    <label for="radio2">★</label>
                        <input id="radio3" type="radio" name="estrellas" value="3" calificacion="Regular" checked>  <label for="radio3">★</label>
                        <input id="radio4" type="radio" name="estrellas" value="2" calificacion="Malo">             <label for="radio4">★</label>
                        <input id="radio5" type="radio" name="estrellas" value="1" calificacion="Muy malo">         <label for="radio5">★</label>
                    </p>
                </div>
            </div>
            <div class="row">
                <label class="col-12"><b>DEJENOS SU OPINIÓN:</b></label>
            </div>
            <div class="row">
                <div class="col-12">
                    <textarea class="form-control" aria-label="With textarea" placeholder="Comente aquí . . ."></textarea>
                </div>
            </div>
            <br>
            <div class="row" align="center">
                <div class="col-12">
                    <button class="btn btn-secondary" href="">Enviar</button>
                </div>
            </div>
        </div>
   </div>
</div>

<script>
    $("#ranking input").click(function(){
        var val = $(this).attr("calificacion");
        console.log(val);
        $("#ranking_valor").html(val);
    });
</script>
