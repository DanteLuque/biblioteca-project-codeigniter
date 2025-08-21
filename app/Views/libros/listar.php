<?= $header; ?>

<div class="container">
  <div class="my-2">
    <h4>Lista de Libros</h4>
    <a class="btn btn-sm btn-primary" href="<?= base_url('libros/crear') ?>">Registrar</a>
  </div>

  <div class="table-responsive">
    <table class="table table-sm">
      <colgroup>
        <col width="10%">
        <col width="40%">
        <col width="30%">
        <col width="20%">
      </colgroup>
      <thead>
        <tr>
          <th>ID</th>
          <th>Libro</th>
          <th>Imagen</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($libros as $libro): ?>
          <tr>
            <td><?= $libro['id'] ?></td>
            <td><?= $libro['nombre'] ?></td>
            <td>
              <?php if ($libro['imagen']) { ?>
                <img src="/uploads/<?= $libro['imagen'] ?>" alt="imagen" width="75px">
              <?php } else { ?>
                <span>sin imagen</span>
              <?php } ?>
            </td>

            <td>
              <a href="" class="btn btn-sm btn-danger">Editar</a>
              <a href="" class="btn btn-sm btn-info">Eliminar</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<?= $footer; ?>