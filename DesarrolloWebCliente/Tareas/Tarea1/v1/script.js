'use strict'

document.addEventListener("DOMContentLoaded", () => {

  // Agregar un event listener al botón
  document.getElementById("salario").addEventListener("click", () => {

    // Obtener el valor del input
    let puesto = document.getElementById("puestoIntroducido").value.toLowerCase();

    // Inicializar una variable para almacenar el precio
    let salario = 0;

    // Utilizar un switch-case para determinar el precio
    switch (puesto) {
      case "dba job":
        salario = 70000;
        break;
      case "front-end developer":
        salario = 45000;
        break;
      case "back-end developer":
        salario = 50000;
        break;

      default:
        // Actualizar el contenido del elemento <p> con un mensaje de error si el puesto no es reconocido
        document.getElementById("resultado").textContent = "Puesto introducido desconocido en la base de datos.";
        return; // Salir de la función
    }

    // Comprobar si se ingresó un puesto y mostrar el salario si es el caso
    if (salario > 0) {
      // Actualizar el contenido del elemento <p> con el resultado
      document.getElementById("resultado").textContent = `El salario de un ${puesto.toUpperCase()} es de ${salario}€.`;
    } else {
      // Actualizar el contenido del elemento <p> con un mensaje de error si no se ingresó un puesto
      document.getElementById("resultado").textContent = "No se ingresó un puesto de trabajo.";
    }
  });
});

