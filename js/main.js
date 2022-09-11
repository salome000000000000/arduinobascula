const formulario = document.getElementById("datos-usuario");
const inputs = document.querySelectorAll('#datos-usuario input');

const expresiones = {
	nombre: /^[a-zA-ZÁ-ÿ\s]{1,40}$/,
	apellido: /^[a-zA-ZÁ-ÿ\s]{1,40}$/,
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9.]+$/,
	password: /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/,
	cedula: /^[0-9]{10}/,
	telefono: /^\d{10}$/
}

const campos = {
	nombre: false,
	apellido: false,
	correo: false,
	cedula: false,
	telefono: false,
}

const validarFormulario = (reg) => {
	console.log(reg.target.name)
	switch (reg.target.name) {
		case "nombre":
			validarCampos(expresiones.nombre, reg.target, 'nombre');
			break;

		case "apellido":
			validarCampos(expresiones.apellido, reg.target, 'apellido');
			break;

		case "cedula":
			validarCampos(expresiones.cedula, reg.target, 'cedula');
			break;

		case "correo":
			validarCampos(expresiones.correo, reg.target, 'correo');
			break;

		case "telefono":
			validarCampos(expresiones.telefono, reg.target, 'telefono');
			break;

		default:
			break;

	}
}

const validarCampos = (expresion, input, campo) => {
	if (expresion.test(input.value)) {
		//document.getElementById(`${campo}`).classList.remove('incorrecto');
		//document.getElementById(`${campo}`).classList.add('correcto');
		document.getElementById(`val-${campo}`).classList.add('correcto');
		document.getElementById(`${campo}`).classList.remove('form-control-red');
		document.getElementById(`${campo}`).classList.add('form-control-green');
		campos[campo] = true;
	} else {
		//document.getElementById(`${campo}`).classList.add('incorrecto');
		document.getElementById(`val-${campo}`).classList.remove('correcto');
		document.getElementById(`${campo}`).classList.add('form-control-red');
		document.getElementById(`${campo}`).classList.remove('form-control-green');
		campos[campo] = false;
	}
}


inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario)

})

function validacion() {
	
	if (campos.nombre && campos.apellido && campos.cedula && campos.telefono && campos.correo) {
		
	} else {
		return false;
	}
}