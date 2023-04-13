function tiempoReal() {
    var tabla = $.ajax({
        url: './php/actualizar_valor.php',
        async: false
    }).responseText;   
    document.getElementById("valorA").innerHTML = tabla;  
}
setInterval(tiempoReal, 500);


