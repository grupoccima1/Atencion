function init(){
    var tick_id = getUrlParameter('ID');
}

$(document).ready(function(){
    var tick_id = getUrlParameter('ID');

    $.post("../../controller/ticket.php?op=listardetalle", {tick_id : tick_id}, function(data){
        $('#lbldetalle').html(data);

    });

    $.post("../../controller/ticket.php?op=mostrar", {tick_id : tick_id}, function(data){
        data = JSON.parse(data);
        $('#lblestado').html(data.tick_estado);
        $('#lblnomusuario').html(data.usu_nom +' '+data.usu_ape);
        $('#lblfechcrea').html(data.fech_crea);

        $('#lblnomidticket').html("Detalle ticket -"+tick_id);

        $('#cat_nom').val(data.cat_nom);
        $('#tick_titulo').val(data.tick_titulo);
        $('#tick_descrip').val(data.tick_descrip);
    });

    $('#tickd_descrip').summernote({
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

init(); 