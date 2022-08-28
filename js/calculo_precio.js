function calcular() {

    var peso = $.ajax({
        url: './php/actualizar_valor.php',
        dataType: 'text',
        async: false
    }).responseText;


    var test = document.getElementById('material');
    var option = parseFloat(test.value);
    var valor = Math.floor(peso) * option;
    var final = (valor / 1000).toFixed(2);


    document.getElementById('precio_total').value = final + " $";
    
    // document.getElementById("calculo_peso").innerHTML = valor;
}

function capturarPeso(){
    $.ajax({
        url: './php/actualizar_valor.php',
        type: 'GET',
        dataType: 'text',
        success: function(peso){
            $("#peso").val(peso);     
        }
    })
}

function resetearValor(){

    document.getElementById("precio_total").value = "0.00$";
    document.getElementById("peso").value = "Click en calcular precio...";

}

function resetBascula(){

    var reset = 0;

    $.ajax({
        url: './php/resetear.php',
        data: "resetear="+ reset,
        type: 'POST',
        dataType: 'text',
        success: function(peso){
            console.log("valor enviado: "+ reset);  
        }
    })
}

