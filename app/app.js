const inputFechaNacimiento = document.getElementById('fecha-nacimiento');

// Escuchar el evento "change" del input de fecha de nacimiento
inputFechaNacimiento.addEventListener('change', () => {
  // Obtener la fecha de nacimiento del usuario como objeto de fecha
  const fechaNacimiento = new Date(inputFechaNacimiento.value);

  // Obtener el input de fecha establecida por su ID
  const inputFechaEstablecida = document.getElementById('fecha-establecida');

  // Formatear la fecha de nacimiento en una cadena de texto con el formato yyyy-mm-dd
  const fechaNacimientoFormato = fechaNacimiento.toISOString().slice(0, 10);

  // Establecer el valor del input de fecha establecida a la fecha de nacimiento formateada
  inputFechaEstablecida.value = fechaNacimientoFormato;
});

const image = document.querySelector("img"),
  input = document.querySelector("input");

input.addEventListener("change", () => {
  image.src = URL.createObjectURL(input.files[0]);
})

const formulario = document.querySelector('form');

// Obtener el botón de envío por su ID
const botonEnviar = document.getElementById('submit');

formulario.addEventListener('submit', (event) => {
  // Obtener los campos de formulario
  const inputNombre = document.getElementById('nombre');
  const inputEmail = document.getElementById('apellido');
  const inputEdad = document.getElementById('email');

  const nombre1 = document.getElementById('nombre1');


  // Validar el campo de nombre
  if (inputNombre == "") {
    // alert('Por favor, ingrese su nombre');
    console.log('Mal');
    event.preventDefault();
    return;
  }

  if (!inputEmail.checkValidity()) {
    alert('Por favor, ingrese su nombre');
    event.preventDefault();
    return;
  }

  if (!inputEdad.checkValidity()) {
    alert('Por favor, ingrese su nombre');
    event.preventDefault();
    return;
  }

});


function enviarFormulario()
{
  const inputNombre = document.getElementById('nombre');
  const inputEmail = document.getElementById('email');
  const inputApellido = document.getElementById('apellido');
  const inputTelefono = document.getElementById('telefono');
  const inputDireccion = document.getElementById('direccion');
  const inputFecha = document.getElementById('fecha-nacimiento');

  const inputCheck1 = document.getElementById('check1');
  const inputCheck2 = document.getElementById('check2');
  const inputCheck3 = document.getElementById('check3');
  const inputCheck4 = document.getElementById('check4');
  const inputCheck5 = document.getElementById('check5');
  const inputCheck6 = document.getElementById('check6');

  const inputDatos = document.getElementById('datos');


  if(inputNombre.value == "" && inputEmail.value == "" && inputFechaNacimiento.value == "")
  {
    alert('Campos como nombre, correo y fecha de nacimiento son requeridos');
  }
  else
  {
    // alert('Tus datos son nombre: ' + inputNombre.value + ' Correo: ' + inputEmail.value + ' fecha de nacimiento: ' + inputFechaNacimiento.value)
    alert('Nombre: ' + inputNombre.value + ' Apellido: ' +inputApellido.value + ' Correo: ' + inputEmail.value  + ' Telefono: ' + inputTelefono.value + ' Direccion: ' + inputDireccion.value + ' Fecha de nacimiento ' + inputFecha.value + ' Gusto: ' + validarCheck(inputCheck1) + ' ' + validarCheck(inputCheck2) + ' ' + validarCheck(inputCheck3) + ' ' + validarCheck(inputCheck4) + ' ' + validarCheck(inputCheck5) + ' ' + validarCheck(inputCheck6));
  }


}

function cancelarFormulario()
{
  const buttonCancelar = document.getElementById('cancelar');
  if(buttonCancelar.value == "")
  {
    alert('Envio cancelado, exitosamente!!!');
    document.getElementById("miFormulario").reset();
    var imagenMostrada = document.getElementById("imagenMostrada");
    imagenMostrada.src = "img/profile.jfif";
  }

}

function validarCheck(check)
{
  if(check.checked){
    return check.value
  }else{
    return '';
  }

}