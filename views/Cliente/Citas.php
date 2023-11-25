
<?php
require_once("../../models/conexion.php");
require_once("../../models/consultas.php");
require_once("../../models/seguridadCliente.php");
require_once("../../controllers/mostrarInfoCliente.php");
?>

<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<?php
	include("include-head.php")
?>

<?php
	include("include-pag.php")
?>

<?php
	include("MiActividad.php")
?>

<main>
  <section>
    <div class="container">
    <h2 id="texto">Hola estas son las denuncias o sugerencias que has dado</h2>
    <div class="row">
      <div class="col-md-12">
        <table id="bootstrap-data-table-export" class="table table-hover ">
          <thead>
          <tr>
            <th>Servicio requerido</th>
            <th>Nombre del taller</th>
            <th>Direccion</th>
            <th>Fecha y hora</th>
            <th>Estado</th>
            <th>Modificar</th>
            <th>Cancelar</th>

          </tr>
          </thead>
          <tbody>
            <?php
              mostrarCitas()
            ?>                         
          </tbody>
        </table> 
      </div>
    </div>
    </div>
    <?php
      modalReagendar()
    ?> 

  </section>
</main>





<?php
	include("include-footer.php")
?>
    


  </body>
  </html>