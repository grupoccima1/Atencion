function init(tick_id){
    $("#edit_form").on("submit",function(e){
        guardaryeditar(e);
    });
}

$(document).ready(function(){
    var tick_id = getUrlParameter('ID');

    //Listar detalles
   /*  $.post("../../controller/ticket.php?op=listardetalle", {tick_id : tick_id}, function(data){
        $('#lbldetalle').html(data);

    }); */


    $.post("../../controller/categoria.php?op=combo",function(data, status){
        $('#cat_id').html(data);
    })

    
    $.post("../../controller/categoria.php?op=completa",function(data, status){
        $('#catcompleta_id').html(data);
    })

    $.post("../../controller/subcategoria.php?op=combo",function(data, status){
        $('#subcat_id').html(data);
    })

    $.post("../../controller/ticket.php?op=mostrar", {tick_id : tick_id}, function(data){
        data = JSON.parse(data);
        $('#lblestado').html(data.tick_estado);
        $('#lblcat_nom').html(data.cat_nom);
        $('#lblsubcat_nom').html(data.subcat_nom);
        $('#lblnomusuario').html(data.usu_nom +' '+data.usu_ape);
        $('#lblfechcrea').html(data.fech_crea);

        $('#lblnomidticket').html("Ticket - "+tick_id);

        
        $('#tick_id').val(data.tick_id);
        $('#cat_id').val(data.cat_id);
        $('#tick_titulo').val(data.tick_titulo);
        $('#tick_descrip').summernote('code', data.tick_descrip);        
    });


    $('#tick_descrip').summernote({
        height: 200,
        lang: "es-ES",
        callback: {
            onImageUpload: function(image){
                console.log("Image detect...");
                myimagetreat(image[0]);
            },
            onPaste: function (e){
                console.log("Text detect...");
            }
        }
    });

    $('#tickd_descripusu').summernote({
        height: 200,
        lang: "es-ES",
    });

});

var getUrlParameter = function getUrlParameter(sParam){
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;
    for(i = 0; i < sURLVariables.length; i++){
        sParameterName = sURLVariables[i].split('=');

        if(sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#edit_form")[0]);
    $.ajax({
        url:"../../controller/ticket.php?op=modificar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos){
            var response = JSON.parse(datos);
            if(response.success){
                swal({
                    title: "Correcto!",
                    text: "Editado Correctamente",
                    type: "success",
                    confirmButtonClass: "btn-success"
                  
                }, 
                function(isConfirm) {
                    if (isConfirm) {
                        window.history.back()
                    }}
                );
            }else{
                swal({
                    title: "Tickets",
                    text: "Error.",
                    type: "error",
                    confirmButtonClass: "btn-danger"
                });
            }
        }
    });
}

init(); 