function tiempoReal() {
    var tabla = $.ajax({
        url: './php/actualizar_valor.php',
        async: false
    }).responseText;

    var material = $.ajax({
        url: './php/materiales.php',
        async: false
    }).responseText;

    document.getElementById("materiales-select").innerHTML = material;
    document.getElementById("valorA").innerHTML = tabla;
    
}
setInterval(tiempoReal, 1000);


