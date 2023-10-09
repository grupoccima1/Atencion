
let contrato=[
    {'value' : '1','subcat' : 'Entregado al cliente'},
    {'value' : '2','subcat' : 'Firmado por RL'},
];

let dudas=[
    {'value' : '4','subcat' : 'Estado de cuenta'},
    {'value' : '5','subcat' : 'Recibos de pago'},
    {'value' : '6','subcat' : 'Facturas'},
    {'value' : '7','subcat' : 'Avances de Obra'},
    {'value' : '8','subcat' : 'Entregas'},
    {'value' : '9','subcat' : 'Otras'},
];
let cancelacion=[
    {'value' : '10','subcat' : 'Sin contrato'},
    {'value' : '2','subcat' : 'Con contrato'},
];

let $categoria = document.getElementById("categoria");
let $subcategoria = document.getElementById("subcategoria");


function opcsubcat(subcat){
    let element ='<option selected disabled>--Subcategoria--</option>'
    for(let i = 0; i < subcat.length;  i++){
        element += '<option value="'+ subcat[i].value +'">'+ subcat[i].subcat+'</option>';
    }
    $subcategoria.innerHTML = element
}

$categoria.addEventListener('change', function(){
    let valor = $categoria.value
    switch (valor) {
        case "1":
            opcsubcat(contrato);
            break;
        case "2":
            opcsubcat(dudas);
            break;
        case "3":
                opcsubcat(cancelacion);
            break;   
    }
})





