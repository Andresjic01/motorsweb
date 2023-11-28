
document.getElementById("roles").addEventListener("change", function() {
  var seleccion = this.value; // Obtenemos el valor seleccionado
  var descripcion = document.getElementById("descripcion");
  var direccion = document.getElementById("direccion");
  
  // Verificamos si se seleccionó "Opción 2" y mostramos la advertencia
  if (seleccion === "Vendedor") {
    descripcion.style.display = "block";
    direccion.style.display = "block";
    Swal.fire({
      title:"Si eliges registrarte como Taller o Vendedor, tu cuenta será activada después de una breve revisión por parte del administrador. ¡Gracias por tu comprensión!",
      width: 500,
    
    });
  }
});




