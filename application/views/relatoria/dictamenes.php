<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="col-md-12   ">
    <div class="">
       <h3 class="card-header">Dictámenes Actívos</h3>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                <input class="form-control" type="text" placeholder="Filtrar">
                </div>
            </div>
            <br>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($resultado)){
                    for ($i=0; $i < count($resultado) ; $i++) { ?>
                    <tr>
                        <td>Codigo:<?php echo $resultado[$i]['codigo']; ?></td>
                        <td>Titulo:<?php echo $resultado[$i]['titulo']?></td>
                        <td><button class="btn puente" href="dictamen/actualizardictamen" data-id="<?php echo $resultado[$i]['id_dictamen']?>">Editar</button></td>
                        <td><button class="btn">Plantilla</button></td>
                    </tr>
                    <?php } }
                    else{ ?>
                        <h3>No se registran dictámenes</h3>
                    <?php } ?>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-dark redirect float-right" href="dictamen/anadirdictamen">Añadir</button>
                </div>
            </div>
       </div>
     </div>
</div>
<script type="text/javascript">
        $(document).ready(function(){
            $(".puente").click(function(){
                var btn = $(this);
                $.post(btn.attr("href"), {"idObj":$(this).attr("data-id")},function(data){
                    $("#").html("");
                    $("#").html(data);
                }).fail(function(){
                    alert( "Error de red" );
                })
            });
        })
</script>
