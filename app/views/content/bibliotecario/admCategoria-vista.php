<link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/documentazione.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div class="table-container">
  <table class="centered-table">
    <thead>
      <tr>
        <th>id categoria</th>
        <th>Categoria</th>
      </tr>
    </thead>
    <tbody>
      <?php if (isset($Consulta)) {
          foreach ($Consulta as $categoria) {
              echo '<form class="form" action="/bibliotecaMvc/index?clase=controladorCategoria&metodo=EliminaActualizaCategoria" method="POST">';
              echo '<tr>';
              echo '<td> <input type="text" name="txtidcategoria" value="' . $categoria['idcategoria'] . '" readonly> </td>';
              echo '<td> <input type="text" name="txtCategoria" value="' . $categoria['vchCategoria'] . '"> </td>';
              echo '<td width=250>';
              echo '<button type="submit" name="btnEliminar" value="btnEliminar" class="submit-button">Eliminar</button>';
              echo '&nbsp;';
              echo '<button type="submit" name="btnActualizar" value="btnActualizar" class="submit-button">Actualizar</button>';
              echo '</td>';
              echo '</tr>';
              echo '</form>';
          }
      } ?>
    </tbody>
  </table>
</div>