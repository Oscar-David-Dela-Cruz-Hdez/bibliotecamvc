<link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/documentazione.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div class="table-container">
  <table class="centered-table">
    <thead>
      <tr>
        <th>id autor</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
      </tr>
    </thead>
    <tbody>
      <?php if (isset($Consulta)) {
          foreach ($Consulta as $autor) {
              echo '<form class="form" action="/bibliotecaMvc/index?clase=controladorAutor&metodo=EliminaActualizaAutor" method="POST">';
              echo '<tr>';
              echo '<td> <input type="text" name="txtidautor" value="' . $autor['idautor'] . '" readonly> </td>';
              echo '<td> <input type="text" name="txtNombre" value="' . $autor['vchNombre'] . '"> </td>';
              echo '<td> <input type="text" name="txtAp" value="' . $autor['vchAp'] . '"> </td>';
              echo '<td> <input type="text" name="txtAm" value="' . $autor['vchAm'] . '"> </td>';
              echo '<td width=250>';
              echo '<button type="submit" name="btnEliminar" value="btnEliminar" class="submit-button">Eliminar</button>';
              echo '&nbsp;';
              echo '<button type="submit" name="btnActualizar" value="btnActualizar" class="submit-button">Actualizar</button>';
              echo '</td>';
              echo '</tr>';
              echo '</form>';
          }
      } else {
          echo '<tr><td colspan="3">No hay datos disponibles</td></tr>'; // Agrega esto para manejar el caso donde no hay datos
      } ?>
    </tbody>
  </table>
</div>