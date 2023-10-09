function eliminar(e){
    if (confirm("¿Deseas eliminar este Ticket?")){
        return true;
    } else {
        e.preventDefault();
    }
}

let linkDelete = document.querySelectorAll(".table_item_link");

for (var i = 0; i < linkDelete.length; i++) {
    linkDelete[i].addEventListener('click', eliminar);
    
} 



function eliminar(cat_id){
    swal({
        title: "HelpDesk",
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
            $.post("../../controller/categoria.php?op=eliminar", {cat_id : cat_id}, function (data) {

            }); 

            /* TODO: Recargar Datatable JS */
            $('#usuario_data').DataTable().ajax.reload();	

            /* TODO: Mensaje de Confirmacion */
            swal({
                title: "HelpDesk!",
                text: "Registro Eliminado.",
                type: "success",
                confirmButtonClass: "btn-success"
            });
        }
    });
}