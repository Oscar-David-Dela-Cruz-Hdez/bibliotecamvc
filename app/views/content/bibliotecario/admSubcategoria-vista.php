<link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/documentazione.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


<div class="table-container">
  <table class="centered-table">
    <thead>
      <tr>
        <th>id subcategoria</th>
        <th>subcategoria</th>
        <th>id categoria</th>
      </tr>
    </thead>
    <tbody>
      <?php if (isset($Consulta)) {
          foreach ($Consulta as $sub) {
              echo '<form class="form" action="/bibliotecaMvc/index?clase=controladorSubcategoria&metodo=EliminaActualizaSubcategoria" method="POST">';
              echo '<tr>';
              echo '<td> <input type="text" name="txtidsub" value="' . $sub['idsubcategoria'] . '" readonly> </td>';
              echo '<td> <input type="text" name="txtsubcategoria" value="' . $sub['vchSubcategoria'] . '"> </td>';
              echo '<td> <input type="text" name="txtidcategoria" value="' . $sub['idcategoria'] . '"> </td>';
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