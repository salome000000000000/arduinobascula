const formulario = document.getElementById("datos-usuario");
const botonSubmit = document.getElementById("enviar");

var nombre, apellido, cedula, telefono, correo, direccion;
nombre = document.getElementById("nombres").value;
apellido = document.getElementById("apellido").value;
cedula = document.getElementById("cedula").value;
telefono = document.getElementById("celular").value;
correo = document.getElementById("correo").value;
direccion = document.getElementById("direccion").value;


var validador = document.getElementById('validador');


let timeout = null;
//console.log('Formulario -line 2: ', formulario);

document.querySelectorAll('.verificador').forEach((box) => {
	const boxInput = box.querySelector('input');

	boxInput.addEventListener('keydown', (event) => {
		clearTimeout(timeout);
		timeout = setTimeout(() => {
			console.log(`Input ${boxInput.name} value: `, boxInput.value);
			
			if(nombre == ""){
				validador.style.visibility = "visible";
			} else {
				validador.style.visibility = "hidden";
			}


		}, 300);
	});
});

