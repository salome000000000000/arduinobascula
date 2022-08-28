function calcular() {

    var peso = $.ajax({
        url: './php/actualizar_valor.php',
        dataType: 'text',
        async: false
    }).responseText;


    
    var test = document.getElementById('material');


    console.log(test.innerText);
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
        succes: function(peso){
            console.log(peso)
            const valor = peso;
            valor.forEach(valor_bascula => {
                let capturar = `<input type="text" class="form-control text-center" value="${valor_bascula.valor} 
                "type="text" id="peso" readonly="readonly">`;
            })

            $valo.innerHTML = capturar;            
        }
    })
}