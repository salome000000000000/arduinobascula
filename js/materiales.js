$(document).ready(function () {
    /* --variables para llamar a los select por el id */
    let $materiales_select = document.getElementById('material')


    function opciones() {
        $.ajax({
            url: './php/select_materiales.php',
            type: 'GET',
            success: function(response) {
                console.log(response)
                const materiales = JSON.parse(response);
                let template = '<option selected disabled id="no-option">Eliga...</option>';
    
                materiales.forEach(material => {
                    template += `<option class="form-control" name="option" id="${material.material_id}" value="${material.precio}">
                    ${material.materiales}</option>`;
                })

                $materiales_select.innerHTML = template;
            }
        })
    }
    opciones()

})    
