$(document).ready(function () {
    /* --variables para llamar a los select por el id */
    let $materiales_select = document.getElementById('material')
    let $valo = document.getElementById('peso')


    function opciones() {
        $.ajax({
            url: './php/select_materiales.php',
            type: 'GET',
            success: function (response) {
                const materiales = JSON.parse(response);
                let template;

                materiales.forEach(material => {
                    template += `<option class="materiales form-control" name="materiales" id="${material.material_id}" value="${material.precio}">
                    ${material.materiales} </option>`;
                })

                $materiales_select.innerHTML = template;
            }
        })
    }

    let $lista_precios = document.getElementById('materiales-select');

    function materiales() {
        $.ajax({
            url: './php/materiales.php',
            type: 'GET',
            success: function (datos) {
                const material_p = JSON.parse(datos);
                let precios = '<ul class="list-group" id="lista-precios">';

                material_p.forEach(material => {
                    precios +=`<li class="list-group-item d-flex justify-content-between align-items-center">
                                ${material.material} <span class="badge bg-primary rounded-pill">${material.precio}</span>
                    </li>`;
                })

                precios += '</ul>';
                $lista_precios.innerHTML = precios;
            }
        })

    }
    setInterval(materiales, 1500);
    opciones();
}) 
