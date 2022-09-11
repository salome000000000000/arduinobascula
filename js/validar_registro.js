const formulario = document.getElementById("datos-usuario");
const inputs = document.querySelectorAll('#datos-usuario input');

const expresiones = {
    nombre: /^[a-zA-ZÁ-ÿ\s][^ ]{1,40}/,
    apellido: /^[a-zA-ZÁ-ÿ\s][^ ]{1,40}$/,
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9.]+$/,
    username: /^[a-zA-Z]+[_.+-]+[a-zA-Z0-9]{3,16}$/,
    codigo: /[A-Za-z0-9]{1,6}$/,
    cedula: /^[0-9]{10}$/,
    password: /^.{4,12}$/
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




const validarPass = () => {

    const passw1 = document.getElementById('password');
    const passw2 = document.getElementById('password_conf');

    if (passw1.value != passw2.value || (passw1.value == '' && passw2.value == '')){
        
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

const validarCampos = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        document.getElementById(`val-${campo}`).classList.add('correcto');
        document.getElementById(`${campo}`).classList.remove('form-control-red');
        document.getElementById(`${campo}`).classList.add('form-control-green');
        document.getElementById('validar-formulario').classList.add('correcto');
        campos[campo] = true;
    } else {
        //document.getElementById(`${campo}`).classList.add('incorrecto');
        document.getElementById(`val-${campo}`).classList.remove('correcto');
        document.getElementById(`${campo}`).classList.add('form-control-red');
        document.getElementById(`${campo}`).classList.remove('form-control-green');
    }
}


inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
    
})

function validacion() {

    if (campos.nombre && campos.apellido && campos.username && campos.correo && campos.password && campos.codigo) {
        document.getElementById('validar-formulario').classList.add('correcto');
        return true

    } else {
        document.getElementById('validar-formulario').classList.remove('correcto');
        return false;
    }
}

