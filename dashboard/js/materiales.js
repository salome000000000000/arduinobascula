/*CREAD MATERIALES*/
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
                $("#agregarMaterial").modal("hide")
                $("#precio").val("")
                $("#material").val("")
                notificacionAgregarMaterial()
                mostrarMateriales();
            }
        })
    }

}

/*READ MATERIALES*/
function mostrarMateriales() {
    $.ajax({
        url: '../php/materiales.php',
        type: 'GET',
        success: function (response) {
            var i = 1
            var mats = document.getElementById("mostrarMateriales")
            const materiales = JSON.parse(response)
            let template = `
                <table id="lista_materiales" class="table table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Material</th>
                            <th class="text-center" scope="col">Precio</th>
                            <th class="text-center" scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody class="container-fluid">`;

            materiales.forEach(material => {
                template += `
                    <tr> 
                        <th scope="row">${i++}</th>
                        <td>${material.materiales}</td>
                        <td class="text-center">${material.precio} $</td>
                        <td class="text-center">
                            <button class="btn btn-dark btn-sm" onclick="obtenerDetalles('${material.material_id}')">Editar</button>
                            <button class="btn btn-danger btn-sm" onclick="eliminarMaterial('${material.material_id}')">Eliminar</button>
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

/*UPDATE MATERIALES*/
function actualizarMaterial() {
    let val = true
    let estado = false
    precio = document.getElementById("precioupdate").value
    nombre_material = document.getElementById("materialupdate").value
    id = document.getElementById("hidden_material").value

    precio = parseFloat(precio)

    if ((precio == "" || precio <= 0) || nombre_material == "") {
        val = false
        Swal.fire({
            icon: 'error',
            title: 'Campos vacíos',
            text: 'Complete todos los detalles',
        })
    }

    if (isNaN(precio)) {
        val = false
        Swal.fire({
            icon: 'error',
            title: 'Formato incorrecto',
            text: 'Coloque un precio adecuado',
        })
    }

    if (val) {
        Swal.fire({
            title: '¿Quieres guardar los cambios?',
            text: "Los cambios se guardarán",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Guardar'
        }).then((result) => {
            if (result.isConfirmed) {
                estado = true
                updateConfirmacion(estado)
                notificacionActualizarMaterial()
            }
        })
    }
    function updateConfirmacion(estado) {
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
                    mostrarMateriales()
                }
            })
            $("#actualizarMaterial").modal("hide")
            
        }
    }
}

/*DELETE MATERIALES*/
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
                    notificaionEliminarMaterial()
                }
            })
        }
    }
}



/*RELLENAR CAMPOS PARA ACTUALIZAR MATERIALES*/
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
            document.getElementById("precioupdate").value = datos.precio
            document.getElementById("materialupdate").value = datos.material
            document.getElementById("hidden_material").value = datos.id
        }
    })
}


/*NOTIFICACIONES SWEETALERT*/
function notificacionAgregarMaterial() {
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
}

function notificacionActualizarMaterial() {
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
        title: 'Se ha actualizado el material'
    })
}

function notificaionEliminarMaterial() {
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
        icon: 'error',
        title: 'Se ha eliminado el material'
    })
}


mostrarMateriales()