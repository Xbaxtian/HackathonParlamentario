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
                    if(isset($dictamenes)){
                    for ($i=0; $i < count($dictamenes) ; $i++) { ?>
                    <tr>
                        <td>Codigo:<?php echo $dictamenes[$i]['codigo']; ?></td>
                        <td>Titulo:<?php echo $dictamenes[$i]['titulo']?></td>
                        <td><button class="btn puente" href="<?php echo base_url()?>dictamen/actualizardictamen" data-id="<?php echo $dictamenes[$i]['id_dictamen']?>">Editar</button></td>
                        <td><button class="btn">Plantilla</button></td>
                    </tr>
                    <?php }
                    }
                    else{ ?>
                        <h3>No se registran dictámenes</h3>
                    <?php } ?>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-dark redirect float-right" href="<?php echo base_url()?>dictamen/anadirdictamen">Añadir</button>
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
                    $("#principal-container").html("");
                    $("#principal-container").html(data);
                }).fail(function(){
                    alert( "Error de red" );
                })
            });
        })
</script>
