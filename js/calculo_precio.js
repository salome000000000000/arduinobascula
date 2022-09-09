function calcular() {   
    
    let $cajaPrecio = document.getElementById("precio_total");
    
    $.ajax({
        url: './php/actualizar_valor.php',
        type: 'GET',
        dataType: 'text',
        success: function(peso){
            $("#peso").val(peso + " g");
            var option = parseFloat($("#material").val());
            var valor = Math.floor(peso) * option;
            var final = (valor / 1000).toFixed(2);
            $("#precio_total").val(final+" $");
        } 
    })
    // document.getElementById("calculo_peso").innerHTML = valor;
}
function resetearValor(){

    document.getElementById("precio_total").value = "0.00 $";
    document.getElementById("peso").value = "";

}

function resetBascula(){
    var reset = 0;
    $.ajax({
        url: './php/resetear.php',
        data: "resetear="+ reset,
        type: 'POST',
        dataType: 'text',
        success: function(peso){
            //console.log("valor enviado: "+ reset);  
        }
    })
}

