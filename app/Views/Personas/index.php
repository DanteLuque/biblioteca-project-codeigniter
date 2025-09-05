<?= $header; ?>

<div class="container">
  <div class="my-2">
    <h4>Lista de personas</h4>
    <a class="btn btn-sm btn-primary" href="<?= base_url('personas/crear') ?>">Registrar</a>
  </div>

  <div class="table-responsive">
    <table class="table  table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>DNI</th>
          <th>apellidos</th>
          <th>nombres</th>
          <th>telefono</th>
          <th>ubigeo</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($personas as $persona): ?>
          <tr class="align-middle">
            <td><?= $persona['idpersona'] ?></td>
            <td><?= $persona['dni'] ?></td>
            <td><?= $persona['apellidos'] ?></td>
            <td><?= $persona['nombres'] ?></td>
            <td><?= $persona['telefono'] ?></td>
            <td><?= $persona['nombre_departamento'] ." | ". $persona['nombre_provincia']." | ".  $persona['nombre_distrito']?></td>

            <td>
              <a href="<?= base_url('libros/editar/') ?><?= $persona['idpersona'] ?>" class="btn btn-sm btn-danger">Editar</a>

              <a href="<?= base_url('libros/eliminar_db/') ?><?= $persona['idpersona'] ?>" class="btn btn-sm btn-info">Eliminar</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<?= $footer; ?>