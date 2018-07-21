$(document).ready(function(){
    $('.send-formlogin').click(function(){
            var form = $("#form-validado");
            $.post(form.attr('action'), form.serialize(), function(data){
                if(data.result == "success"){
                    location.replace(data.dir);
                }
                else if(data.result == 'fail'){
                    $("#error").text(data.msj);
                }
                else{
                    $("#principal-container").html("");
                    $("#principal-container").html(data);
                }
            }).fail(function(){
                alert( "Error en la red" );
            });
        }
    );

    $('.redirect').click(function(){
            var btn = $(this);
            location.replace(btn.attr("href"));
        }
    );

    $('.send-form').click(function(){
            var form = $("#form-validado");
            console.log("cdvsdbsdbsd")
            $.post(form.attr('action'), form.serialize(), function(data){
                if(data.result == "success"){
                    location.reload();
                }
                else {
                    $("#principal-container").html("");
                    $("#principal-container").html(data);
                }
            }).fail(function(){
                alert( "Error en la red" );
            });
        }
    );
});
