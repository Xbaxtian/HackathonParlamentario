<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
    $titulo = " ";
    $codigo = " ";
    $sumilla = " ";
    $fecha = " ";
    $direccion = " ";

    if(isset($resultado)){
        $valueid = $resultado['id_dictamen'];
        $titulo = $resultado['titulo'];
        $codigo = $resultado['codigo'];
        $sumilla = $resultado['sumilla'];
        $fecha = $resultado['fec_debate'];
        $direccion = "dictamen/actualizar";
    }
    else{
        $titulo =set_value('titulo');
        $codigo = set_value('codigo');
        $sumilla = set_value('sumilla');
        $fecha = set_value('fec_debate');
        $direccion = "dictamen/recibirdatos";
    }
?>

<div class="col-md-12">
    <div class="">
       <h3 class="card-header">Añadir Dictamen</h3>
    </div>

    <div class="card justify-content-center">
        <div class="card-body">
            <?php echo form_open($direccion,array('id'=>'form-validado')); ?>
            <input type="hidden" name="id" value=<?php if(isset($resultado)){ echo $valueid;}else{echo " ";} ?>>
            <div class="row">
                <div class="col-md-12">
                <h2><label for="titulo">Título</label></h2>
                <?php
                $titulo = array('type'=>'text','class'=>'form-control','name'=>'titulo','placeholder'=>'Título','value'=>$titulo);
                echo form_input($titulo);
                ?>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                <h2><label for="codigo">Código</label></h2>
                <?php
                $codigo = array('type'=>'text','class'=>'form-control','name'=>'codigo','placeholder'=>'Código','value'=>$codigo);
                echo form_input($codigo);
                ?>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                <h2><label for="sumilla">Sumilla</label></h2>
                <?php
                $sumilla = array('type'=>'text','class'=>'form-control autoExpand','name'=>'sumilla','rows'=>5,'data-min-rows'=>5,'placeholder'=>'Sumilla','value'=>$sumilla);
                echo form_textarea($sumilla);
                ?>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                <h2><label for="">Comisiones Dictaminadoras</label></h2>
                <h5>la wea de tus switch no se que hiciste</h5>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <h2><label for="">Tipo de dictámen</label></h2>
                    <select class="form-control">
                        <option name="tipo" value="<?php if(isset($resultado)) {
                            echo $tipodictamen[0]['id_tipo_dictamen'];
                            }
                            else{
                                echo " ";
                            }?>"
                        ><?php if(isset($resultado)){
                            echo $tipodictamen[0]['descripcion'];}
                            else{
                                echo "Tipo de dictamen";
                            } ?></option>
                        <?php for ($i=0; $i < count($tdictamen); $i++) {
                                if(isset($resultado)){
                                    if($tdictamen[$i]['descripcion'] != $tipodictamen[0]['descripcion']){?>
                                        <option name="tipo" value="<?php echo $tdictamen[$i]['id_tipo_dictamen']; ?>"><?php echo $tdictamen[$i]['descripcion']; ?></option>
                                <?php }
                                }
                                else{?>
                                    <option name="tipo" value="<?php echo $tdictamen[$i]['id_tipo_dictamen']; ?>"><?php echo $tdictamen[$i]['descripcion']; ?></option>
                                <?php }
                            } ?>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <h2><label for="">Estado</label></h2>
                    <select class="form-control">
                        <option name="tipo" value="<?php if(isset($resultado)){
                            echo $estadodictamen[0]['id_tipo_dictamen'];
                        }
                        else{
                            echo " ";
                        }?>"
                        ><?php if(isset($resultado)){
                            echo $estadodictamen[0]['descripcion'];}
                            else{
                                echo "Estados";
                            } ?></option>
                    <?php
                        for ($i=0; $i < count($estados); $i++) {
                            if(isset($resultado)){
                                if($estados[$i]['descripcion'] != $estadodictamen[0]['descripcion']){?>
                            <option name="estado" value="<?php echo $estados[$i]['id_estado']; ?>"><?php echo $estados[$i]['descripcion']; ?></option>
                        <?php }
                        }
                        else{?>
                            <option name="estado" value="<?php echo $estados[$i]['id_estado']; ?>"><?php echo $estados[$i]['descripcion']; ?></option>
                    <?php }
                    }?>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <h2><label for="">Fecha de debate</label></h2>
                    <?php
                    $fechadebate = array('type'=>'date','class'=>'form-control','name'=>'fdebate','placeholder'=>'fecha de debate','value'=>$fecha);
                    echo form_input($fechadebate);
                    ?>
                </div>
            </div>
            <?php echo form_close(); ?>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <button type="button" class="btn btn-dark send-form">Guardar</button>
                </div>
            </div>
       </div>
     </div>
</div>
