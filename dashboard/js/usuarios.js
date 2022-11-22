$(document).ready(function () {
    $("#usuarios-tabla").DataTable({
        ajax: {
            url: "./php/usuarios.php",
            type: "POST",
        }, columns: [
            { data: 'nombre' },
            { data: 'apellido' },
            { data: 'cedula' },
            { data: 'correo' },
            { data: 'material' },
            { data: 'peso' },
            { data: 'precio' },
            { data: null },
        ], columnDefs: [
            {
                targets: -1,
                defaultContent: `<button>Click!</button>`,
            },
        ],
    });
});