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
                mostrarMateriales()
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                      toast.addEventListener('mouseenter', Swal.stopTimer)
                      toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                  })
                  
                  Toast.fire({
                    icon: 'success',
                    title: 'Se ha agregado un nuevo material'
                  })
                console.log(status)
            }
        })
    }


}


function mostrarMateriales() {
    $(document).ready( function () {
        $('#lista_materiales').DataTable({
            "info": false,
            "language": {
                "url": "../vendor/datatables/JSON/Spanish.json"
            }
        });
    } );
    $.ajax({
        url: '../php/materiales.php',
        type: 'GET',
        success: function (response) {
            var i = 1
            var mats = document.getElementById("mostrarMateriales")
            const materiales = JSON.parse(response)
            let template = `
                <table id="lista_materiales" class="table">
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
                        <th>${i++}</th>
                        <td>${material.materiales}</td>
                        <td>${material.precio} $</td>
                        <td>
                            <button class="btn btn-dark" onclick="obtenerDetalles('${material.material_id}')">Editar</button>
                            <button class="btn btn-danger" onclick="eliminarMaterial('${material.material_id}')">Eliminar</button>
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


function eliminarMaterial(id_material) {
    let estado = false;
    Swal.fire({
        title: '¿Quiere eliminar este material?',
        text: "No se podrá recuperar",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#DA0000',
        cancelButtonColor: '#332DB9',
        confirmButtonText: 'Si, eliminar'
    }).then((result) => {
        if (result.isConfirmed) {
            let estado = true
            eliminar(estado)
            Swal.fire(
                'Eliminado',
                'El material ha sido eliminado',
                'success'
            )
        }
    })
    function eliminar(st) {
        if (st) {
            $.ajax({
                url: "./php/eliminar_material.php",
                type: "POST",
                data: {
                    eliminar: id_material
                },
                success: function (data, status) {
                    mostrarMateriales();
                }
            })
        }
    }
}


function obtenerDetalles(id_material) {

    $("#actualizarMaterial").modal("show")
    precio = $("#precioupdate").val()
    nombre_material = $("#materialupdate").val()


    $.ajax({
        url: "./php/detalles_materiales.php",
        type: "POST",
        data: {
            id: id_material,
            precio: precio,
            material: nombre_material
        },
        success: function (data, status) {
            let datos = JSON.parse(data);
            console.log(datos)
            document.getElementById("precioupdate").value = datos.precio
            document.getElementById("materialupdate").value = datos.material
            document.getElementById("hidden_material").value = datos.id
        }
    })
}

function actualizarMaterial() {

    let estado = true
    precio = document.getElementById("precioupdate").value
    nombre_material = document.getElementById("materialupdate").value
    id = document.getElementById("hidden_material").value

    if ((precio == "" || precio <= 0) && nombre_material == "") {
        estado = false
        alert("No deje los campos vacios")
    }

    Swal.fire({
        title: '¿',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        }
      })

    if (estado) {
        $.ajax({
            url: "./php/actualizar_material.php",
            type: "POST",
            data: {
                id: id,
                precio: precio,
                material: nombre_material
            },
            success: function (data, status) {
                console.log(status)
            }
        })
        $("#actualizarMaterial").modal("hide")
    }
}


mostrarMateriales()