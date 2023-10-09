var tabla;
var usu_id = $('#user_idx').val();
var rol_id = $('#rol_idx').val();

function init(){

}


setTimeout(() =>{
    $('#btnEliminar').on("click", function(){
        $("#miModal3").modal();
    });
},2000 )
   /*  var tick_id = getUrlParameter('ID'); */
    if (rol_id==1) {
        tabla=$('#ticket_data').dataTable({
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
                url : '../../controller/ticket.php?op=listar_x_usu',
                type : "post",
                dataType : "json",
                data:{ usu_id : usu_id},
                error: function(e){
                    console.log(e.responseText);
                }
            },
            "bDestroy": true,
            "responsive": true,
            "bImfo": true,
            "iDisplayLength": 10,
            "autoWidth": false,
            "language":{
                "sProcessing": "Procesando",
                "sLengthMenu": "Mostrar _MENU_ Registros",
                "sPZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando total de 0 registros",
                "sInfoFiltered": "(filtrando de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": "",
                "sLoadingRecords": "Cargando...",
                "sPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Ultimo",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria":{
                    "sSortAscending": ": Activar para ordenar de manera ascendente",
                    "sSortDescending": ": Activar para ordenar de manera descendente"
                }
            }
    
        }).DataTable();

        /* $.post("../../controller/ticket.php?op=mostrar", {tick_id : tick_id}, function(data){
            data = JSON.parse(data);

            $('#cat_nom').val(data.cat_nom);
            $('#tick_titulo').val(data.tick_titulo);
        }); */

    } else {
        tabla=$('#ticket_data').dataTable({
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
                url : '../../controller/ticket.php?op=listar',
                type : "post",
                dataType : "json",
                error: function(e){
                    console.log(e.responseText);
                }
            },
            "bDestroy": true,
            "responsive": true,
            "bImfo": true,
            "iDisplayLength": 10,
            "autoWidth": false,
            "language":{
                "sProcessing": "Procesando",
                "sLengthMenu": "Mostrar _MENU_ Registros",
                "sPZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando total de 0 registros",
                "sInfoFiltered": "(filtrando de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": "",
                "sLoadingRecords": "Cargando...",
                "sPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Ultimo",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria":{
                    "sSortAscending": ": Activar para ordenar de manera ascendente",
                    "sSortDescending": ": Activar para ordenar de manera descendente"
                }
            }
    
        }).DataTable();
    }
function ver(tick_id){
    window.open('http://localhost/TicketBQ/view/DetalleTicket/?ID='+tick_id+'');
   // window.open('https://atencion.grupoccima.com/view/DetalleTicket/?ID='+tick_id+'');
}

function edit(tick_id){
    window.open('http://localhost/TicketBQ/view/EditarTicket/?ID='+tick_id+'', "_self");
}


init();