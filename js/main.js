const formulario = document.getElementById('datos-usuario');
const inputs = document.querySelectorAll('#datos-usuario input')


const expresiones = {
	nombre: /^[a-zA-ZÁ-ÿ\s]{1-40}$/,
	apellido: /^[a-zA-ZÁ-ÿ\s]{1-40}$/,
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9.]+$/,
	cedula: /^[0-9]{10}/,
	telefono: /^\d{10}$/,
}

