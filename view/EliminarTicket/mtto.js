var tabla;

function init(){
    $("#usuario_form").on("submit",function(e){
        guardaryeditar(e);	
    });
}

/* TODO: Guardar datos de los input */
function guardaryeditar(e){
    e.preventDefault();
	var formData = new FormData($("#ticket_form")[0]);
    console.log('formData', formData);
    $.ajax({
        url: "../../controller/ticket.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos){    
            var response = JSON.parse(datos);
            if(response.success){
                $('#usuario_form')[0].reset();
                /* TODO:Ocultar Modal */
                $("#modalmantenimiento").modal('hide');
                $('#usuario_data').DataTable().ajax.reload();
    
                /* TODO:Mensaje de Confirmacion */
                swal({
                    title: "Tickets",
                    text: "Completado.",
                    type: "success",
                    confirmButtonClass: "btn-success"
                });
                location.reload();
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

$(document).ready(function(){
    /* TODO: Mostrar listado de registros */
    tabla=$('#usuario_data').dataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        "searching": true,
        lengthChange: false,
        colReorder: true,
        buttons: [		          
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
                ],
        "ajax":{
            url: '../../controller/ticket.php?op=listar',
            type : "post",
            dataType : "json",						
            error: function(e){
                console.log(e.responseText);	
            }
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo":true,
        "iDisplayLength": 10,
        "autoWidth": false,
        "language": {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }     
    }).DataTable(); 
});

/* TODO: Mostrar informacion segun ID en los inputs */
function editar(tick_id){
    $('#mdltitulo').html('Editar Registro');

    /* TODO: Mostrar Informacion en los inputs */
    $.post("../../controller/ticket.php?op=mostrar", {tick_id : tick_id}, function (data) {
        data = JSON.parse(data);
        $('#tick_id').val(data.tick_id);
        $('#cat_nom').val(data.cat_nom);
    }); 

    /* TODO: Mostrar Modal */
    $('#modalmantenimiento').modal('show');
}

/* TODO: Cambiar estado a eliminado en caso de confirmar mensaje */
function eliminar(tick_id){
    swal({
        title: "Tickets",
        text: "Esta seguro de Eliminar el registro?",
        type: "error",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Si",
        cancelButtonText: "No",
        closeOnConfirm: false
    },
    function(isConfirm) {
        if (isConfirm) {
            $.post("../../controller/ticket.php?op=eliminar", {tick_id : tick_id}, function (data) {

            }); 
            location.reload();
            /* TODO: Recargar Datatable JS */
            $('#usuario_data').DataTable().ajax.reload();	

            /* TODO: Mensaje de Confirmacion */
            swal({
                title: "Tickets",
                text: "Registro Eliminado.",
                type: "success",
                confirmButtonClass: "btn-success"
            });
        }
    });
}

/* TODO: Limpiar Inputs */
$(document).on("click","#btnnuevo", function(){
    $('#tick_id').val('');
    $('#mdltitulo').html('Nuevo Registro');
    $('#usuario_form')[0].reset();
    /* TODO:Mostrar Modal */
    $('#modalmantenimiento').modal('show');
});

init();