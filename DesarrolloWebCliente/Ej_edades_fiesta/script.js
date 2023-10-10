function fiesta() {

  // Definimos las variables de los ids de cada pregunta

  let respuesta1 = document.getElementById('respuesta1');
  let respuesta2 = document.getElementById('respuesta2');
  let respuesta3 = document.getElementById('respuesta3');

  // Obtenemos la edad introducida en el formulario

  const edad = parseInt(document.getElementById("edad").value);

  //Hacemos control de errores. Si el campo edad está vacío o la edad es negativa, alerta.

  if (isNaN(edad) || edad < 0) {
    alert('Por favor, ingresa una edad válida.');
    reset(); //llamamos a la funcion reset de abajo para borrar datos

  } else {

    // Compruebamos las edades

    if (edad >= 18) {
      respuesta1.textContent = 'Puede beber alcohol.';
    } else {
      respuesta1.textContent = 'No puede beber alcohol.';
    }

    if (edad >= 18 && edad <= 30) {
      respuesta2.textContent = 'Puede ingresar a la fiesta.';
    } else {
      respuesta2.textContent = 'No puede ingresar a la fiesta.';
    }

    if (edad >= 20 && edad <= 25) {
      respuesta3.textContent = 'Tiene entrada gratis.';
    } else {
      respuesta3.textContent = 'No tiene entrada gratis.';
    }

  }
}

function reset() {
  respuesta1.innerHTML = "---";
  respuesta2.innerHTML = "---";
  respuesta3.innerHTML = "---";
}


