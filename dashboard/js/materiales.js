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