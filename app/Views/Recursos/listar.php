<?= $this->extend('layouts/master') ?>
<?= $this->section('content') ?>

<div class="container">
  <div class="my-2">
    <h4>Lista de Recursos</h4>
    <a class="btn btn-sm btn-primary" href="<?= base_url('/crear') ?>">Registrar</a>
  </div>

  <?= $this->include('common/msg-error') ?>
  <?= $this->include('common/msg-success') ?>

  <div class="table-responsive">
    <table class="table table-sm table-striped table-bordered">
      <colgroup>
        <col width="5%">
        <col width="25%">
        <col width="10%">
        <col width="10%">
        <col width="10%">
        <col width="10%">
        <col width="20%">
        <col width="10%">
      </colgroup>
      <thead class="table-light">
        <tr>
          <th>ID</th>
          <th>Imagen</th>
          <th>Título</th>
          <th>ISBN</th>
          <th>Año</th>
          <th>Páginas</th>
          <th>Editorial</th>
          <th>Categoria/Subcategoria</th>
          <th>Tipo</th>
          <th>Recurso</th>
          <th>Estado</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($recursos)): ?>
          <?php foreach ($recursos as $recurso): ?>
            <tr>
              <td><?= $recurso['id'] ?></td>

              <td>
                <img src="<?= $recurso['ruta_portada']
                            ?  $recurso['ruta_portada']
                            : '/sin_imagen.jpg' ?>" alt="imagen" width="75px">
              </td>

              <td><?= $recurso['titulo'] ?></td>
              <td><?= $recurso['isbn'] ?></td>
              <td><?= $recurso['anio_publicacion'] ?></td>
              <td><?= $recurso['num_paginas'] ?></td>
              <td><?= $recurso['nombre_editorial']."/".$recurso['nacionalidad_editorial'] ?></td>
              <td><?= $recurso['categoria']."/".$recurso['subcategoria'] ?></td>
              <td><?= $recurso['tipo'] ?></td>

              <td>
                <?php if (!empty($recurso['ruta_recurso'])): ?>
                  <a href="<?= $recurso['ruta_recurso'] ?>" class="btn btn-sm btn-success" download>
                    Descargar
                  </a>
                <?php else: ?>
                  <span class="text-muted">Sin archivo</span>
                <?php endif; ?>
              </td>

              <td><?= $recurso['estado'] ?></td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="8" class="text-center">No hay recursos registrados</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>

<?= $this->endSection() ?>