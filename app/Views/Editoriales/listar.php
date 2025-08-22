<?= $header; ?>

<div class="container">
  <div class="my-2">
    <h4>Lista de Editoriales</h4>
    <a class="btn btn-sm btn-primary" href="<?= base_url('editoriales/crear') ?>">Registrar</a>
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
          <th>editorial</th>
          <th>telefono</th>
          <th>direccion</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($editoriales as $editorial): ?>
          <tr>
            <td><?= $editorial['id'] ?></td>
            <td><?= $editorial['editorial'] ?></td>
            <td><?= $editorial['telefono'] ?></td>
            <td><?= $editorial['direccion'] ?></td>
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