<link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/documentazione.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div class="table-container">
  <table class="centered-table">
    <thead>
      <tr>
        <th>id Libro</th>
        <th>Titulo</th>
        <th>Año de publicacion</th>
        <th>imagen</th>
        <th>id subcategoria</th>
      </tr>
    </thead>
    <tbody>
      <?php if (isset($Consulta)) {
          foreach ($Consulta as $libro) {
              echo '<form class="form" action="/bibliotecaMvc/index?clase=controladorLibros&metodo=EliminaActualizaLibros" method="POST">';
              echo '<tr>';
              echo '<td> <input type="text" name="txtidlibro" value="' . $libro['idlibro'] . '" readonly> </td>';
              echo '<td> <input type="text" name="txtTitulo" value="' . $libro['vchtitulo'] . '"> </td>';
              echo '<td> <input type="text" name="txtaño" value="' . $libro['vchañop'] . '"> </td>';
              echo '<td> <input type="text" name="txtimagen" value="' . $libro['imagen'] . '"> </td>';
              echo '<td> <input type="text" name="txtidsubcategoria" value="' . $libro['idsubcategoria'] . '" readonly> </td>';
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