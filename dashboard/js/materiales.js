function agregarMaterial() {
    var mat = $('#material').val()
    var pre = $('#precio').val()
    var ver = true

    if (mat == '' && pre == '') {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'No deje los campos vacíos',
        })
        ver = false;
    }

    if (ver) {
        mat = mat.trim()

        function capitalize(mat) {
            return mat[0].toUpperCase() + mat.toLowerCase().slice(1);
        }

        mat = capitalize(mat)
        console.log(mat)


        pre = parseFloat(pre)



        if (mat == '') {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Coloque un material',
            })
            ver = false
        }

        if (pre == '') {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Coloque el precio del material',
            })
            ver = false
        }

        if (isNaN(pre)) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Coloque un precio correcto',
            })
            ver = false
        }
    }
    if (ver) {
        $.ajax({
            url: './php/insertar_material.php',
            type: 'POST',
            data: {
                material: mat,
                precio: pre
            },
            success: function (data, status) {
                console.log(status)
            }
        })
    }


}


function mostrarMateriales() { 
    $.ajax({
        url: '../php/materiales.php',
        type: 'GET',
        success: function (response) {
            var mats = document.getElementById("mostrarMateriales");
            const materiales = JSON.parse(response);
            let template = `
                <table class="table">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Material</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">`;

            materiales.forEach(material => {
                template += `
                    <tr> 
                        <th scope="row">${material.material_id}</th>
                        <td>${material.materiales}</td>
                        <td>${material.precio} $</td>
                        <td>
                            <button class="btn btn-dark">Editar</button>
                            <button class="btn btn-danger">Eliminar</button>
                        </td>
                    </tr>`;
            })
            template += `
                    </tbody>
                </table>`;

            mats.innerHTML = template;
        }
    })
}


mostrarMateriales()