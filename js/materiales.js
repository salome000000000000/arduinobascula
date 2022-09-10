$(document).ready(function () {
    /* --variables para llamar a los select por el id */
    let $materiales_select = document.getElementById('material')
    let $lista_precios = document.getElementById('materiales-select')
    let $valo = document.getElementById('peso')


    function opciones() {
        $.ajax({
            url: './php/materiales.php',
            type: 'GET',
            success: function (response) {
                const materiales = JSON.parse(response);
                let template = '';
                let precios = '<ul class="list-group" id="lista-precios">';

                materiales.forEach(material => {
                    template += `<option class="materiales form-control" name="materiales" id="${material.material_id}" value="${material.precio}">
                    ${material.materiales} </option>`;
                    precios +=`<li class="list-group-item d-flex justify-content-between align-items-center">
                    ${material.materiales} <span class="badge bg-primary rounded-pill">${material.precio} $</span>
                    </li>`;
                })

                precios += '</ul>';
                $materiales_select.innerHTML = template;
                $lista_precios.innerHTML = precios;
            }
        })
    }
    
    setInterval(opciones(), 1500);
}) 
