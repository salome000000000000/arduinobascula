const formulario = document.getElementById("datos-usuario");
const inputs = document.querySelectorAll('#datos-usuario input');

document.getElementById('enviar').disabled = true;

document.getElementById("validacion-nombre").classList.add('correcto');
document.getElementById("validacion-apellido").classList.add('correcto');
document.getElementById("validacion-correo").classList.add('correcto');
document.getElementById("validacion-cedula").classList.add('correcto');
document.getElementById("validacion-telefono").classList.add('correcto');


const expresiones = {
	nombre: /^[a-zA-ZÁ-ÿ\s]{1,40}$/,
	apellido: /^[a-zA-ZÁ-ÿ\s]{1,40}$/,
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9.]+$/,
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
	switch (reg.target.name){
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
	console.log(reg.target.id);


}

const validarCampos = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`validacion-${campo}`).classList.remove('incorrecto');
		document.getElementById(`validacion-${campo}`).classList.add('correcto');
		document.getElementById(`${campo}`).classList.remove('form-control-red');
		document.getElementById(`${campo}`).classList.add('form-control-green');
		campos[campo] = true;
	} else {
		document.getElementById(`validacion-${campo}`).classList.add('incorrecto');
		document.getElementById(`${campo}`).classList.add('form-control-red');
		document.getElementById(`${campo}`).classList.remove('form-control-green');
		campos[campo] = false;
	}
}

if(campos.nombre && campos.apellido && campos.cedula && campos.telefono && campos.correo){
	document.getElementById('enviar').disabled = false;
}
else {
	document.getElementById('enviar').disabled = true;
}



inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario)

})

$(document).ready(function(){
	var id = $(`#material option:selected`).attr("id");   
	console.log(id);
});
//formulario.addEventListener('button', holamundo());

function enviarDatos(){
	var datos = $("#datos-usuario :input[value!='']").serialize();
 	 console.log(datos);
}