'use strict';

document.addEventListener("DOMContentLoaded", function() {
  // Agregar un event listener al botón
  document.getElementById("salario").addEventListener("click", calcularSalario);

  // Simula una base de datos de puestos y salarios utilizando un array de objetos
  const BBDD = [
    { puesto: "dba job", salario: 70000 },
    { puesto: "front-end developer", salario: 45000 },
    { puesto: "back-end developer", salario: 50000 },
  ];

  // Función para manejar el evento del botón
  function calcularSalario() {
    // Obtener el valor del input
    let puesto = document.getElementById("puestoIntroducido").value.toLowerCase();

    // Utilizar filter para buscar el puesto en la base de datos
    const resultado = BBDD.filter(function(item) {
      return item.puesto === puesto;
    });

    if (resultado.length > 0) {
      // Mostrar el salario en el elemento <p>
      document.getElementById("resultado").textContent = `El salario de un ${puesto.toUpperCase()} es de ${resultado[0].salario}€.`;
    } else {
      // Mostrar un mensaje de error si el puesto no se encuentra en la base de datos
      document.getElementById("resultado").textContent = "Puesto introducido desconocido en la base de datos.";
    }
  }
});
