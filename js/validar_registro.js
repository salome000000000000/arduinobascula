const formulario = document.getElementById('datos-usuario');
const inputs = document.querySelectorAll('#datos-usuario input');


var validacion = false;

const expresiones = {
    nombre: /^[a-zA-ZÁ-ÿ\s][^ ]{1,40}/,
    apellido: /^[a-zA-ZÁ-ÿ\s][^ ]{1,40}$/,
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9.]+$/,
    username: /^{3,16}$/,
    codigo: /[A-Za-z0-9]{1,6}$/,
    cedula: /^[0-9]{10}$/,
    password: /^{8,16}/
}

const campos = {
    name: false,
    lastname: false,
    username: false,
    email: false,
    code: false,
    password: false,
}

const validarFormulario = (reg) => {
    switch (reg.target.name) {
        case "name":
            validarCampos(expresiones.nombre, reg.target, 'name');
            break;

        case "lastname":
            validarCampos(expresiones.apellido, reg.target, 'lastname');
            break;

        case "username":
            validarCampos(expresiones.username, reg.target, 'username');
            break;

        case "email":
            validarCampos(expresiones.correo, reg.target, 'email');
            break;

        case "code":
            validarCampos(expresiones.codigo, reg.target, 'code');
            break;

        case "password":
            validarCampos(expresiones.password, reg.target, 'password');
            validarPass();
            break;

        case "password_conf":
            validarPass();
            break;

        default:
            break;

    }

}


const validarCampos = (expresion, input, campo) => {

    if (expresion.test(input.value)) {
        document.getElementById(`val-${campo}`).classList.add('correcto');
        document.getElementById(`${campo}`).classList.remove('form-control-red');
        document.getElementById(`${campo}`).classList.add('form-control-green');
        if(document.getElementById('bd-validar')){
            document.getElementById('bd-validar').classList.add('correcto');
        }
        campos[campo] = true;

    } else {
        //document.getElementById(`${campo}`).classList.add('incorrecto');
        document.getElementById(`val-${campo}`).classList.remove('correcto');
        document.getElementById(`${campo}`).classList.add('form-control-red');
        document.getElementById(`${campo}`).classList.remove('form-control-green');
        campos[campo] = false;
    }
}

const validarPass = () => {

    const passw1 = document.getElementById('password');
    const passw2 = document.getElementById('password_conf');

    if (passw1.value != passw2.value || (passw1.value == '' && passw2.value == '') || (passw1.value.length < 8 && passw2.value.length < 8)) {

        document.getElementById('val-verif').classList.remove('correcto');

        document.getElementById('password').classList.add('form-control-red');
        document.getElementById('password').classList.remove('form-control-green');

        document.getElementById('password_conf').classList.add('form-control-red');
        document.getElementById('password_conf').classList.remove('form-control-green');
        campos['password'] = false;


    } else {
        document.getElementById('val-verif').classList.add('correcto');

        document.getElementById('password').classList.remove('form-control-red');
        document.getElementById('password').classList.add('form-control-green');

        document.getElementById('password_conf').classList.remove('form-control-red');
        document.getElementById('password_conf').classList.add('form-control-green');
        campos['password'] = true;
    }

}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
})


$("#registrar").click(function () {
    if (campos.name && campos.lastname && campos.username && campos.email && campos.password && campos.code) {
        var nom = document.getElementById('name').value;
        var ape = document.getElementById('lastname').value;
        var usr = document.getElementById('username').value;
        var mail = document.getElementById('email').value;
        var cod = document.getElementById('code').value;
        var pas = document.getElementById('password').value;
        var ruta = "name=" + nom + "&lastname=" + ape + "&username=" + usr + "&email=" + mail + "&code=" + cod + "&password=" + pas;
        console.log(ruta);
        $.ajax({
            url: '../controller/registro_admin.php',
            type: 'POST',
            data: ruta,
        }).done(function (res) {
            $('#mensaje-serv').html(res);
             
            $("#datos-usuario")[0].reset();
            document.getElementById('name').classList.remove('form-control-green');
            document.getElementById('lastname').classList.remove('form-control-green');
            document.getElementById('username').classList.remove('form-control-green');
            document.getElementById('email').classList.remove('form-control-green');
            document.getElementById('code').classList.remove('form-control-green');
            document.getElementById('password').classList.remove('form-control-green');
            document.getElementById('password_conf').classList.remove('form-control-green');
        })
    }
})
