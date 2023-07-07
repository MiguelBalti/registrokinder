<?php
  require "../template/header.php";
?>

  <main class="container">
    <h1 class="text-center">Lista de Personas</h1>
    <a href="../../../form/formulario.php" class="btn btn-success"><i class="fa-solid fa-circle-plus"></i> Registrar Persona</a>
    <table id="tblPersonas" class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Folio</th>
          <th scope="col">Apellidos</th>
          <th scope="col">Nombre</th>
          <th scope="col">Grupo</th>
          <th scope="col">Correo</th>
        </tr>
      </thead>
      <tbody id="tblBodyPersonas">
        
       
      </tbody>
</table>
  </main>

  <?php
  require "../template/footer.php";
?>

<script src="../template/js/functions_persona.js"></script> 


