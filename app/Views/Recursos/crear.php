<?= $this->extend('layouts/master') ?>
<?= $this->section('content') ?>

<div class="container mt-2">
  <div class="my-2">
    <h4>Registro de Recursos</h4>
    <a href="<?= base_url() ?>" class="btn btn-secondary">Volver</a>
  </div>

  <?= $this->include('common/msg-error') ?>

  <form method="POST" id="formularioRegistro" action="<?= base_url('/recursos/save') ?>" enctype="multipart/form-data">
    <div class="card mb-3">
      <div class="card-header">Datos del recurso</div>
      <div class="card-body">
        <div class="row">

          <div class="col-md-6 mb-3">
            <label>ISBN</label>
            <input type="text" name="isbn" id="isbn" class="form-control" maxlength="13" required>
          </div>

          <div class="col-md-6 mb-3">
            <label>Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" minlength="3" maxlength="255" required>
          </div>

          <div class="col-md-6 mb-3">
            <label>Año de publicación</label>
            <input type="number" name="anio_publicacion" id="anio_publicacion" class="form-control" minlength="4" maxlength="4" required>
          </div>

          <div class="col-md-6 mb-3">
            <label>Número de páginas</label>
            <input type="number" name="num_paginas" id="num_paginas" class="form-control" min="1" required>
          </div>

          <div class="col-md-6 mb-3">
            <label>Categoría</label>
            <select name="categoria_id" id="categoria_id" class="form-select" required onchange="loadSubCategorias()">
            </select>
          </div>

          <div class="col-md-6 mb-3">
            <label>Subcategoría</label>
            <select name="subcategoria_id" id="subcategoria_id" class="form-select" required>
              <option value="">Seleccione</option>
            </select>
          </div>

          <div class="col-md-6 mb-3">
            <label>Editorial</label>
            <select name="editorial_id" id="editorial_id" class="form-select" required>
              <option value="">Seleccione</option>
              <?php foreach ($editoriales as $editorial): ?>
                <option value="<?= $editorial['id'] ?>"><?= esc($editorial['editorial']) ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="col-md-6 mb-3">
            <label>Tipo</label>
            <select name="tipo" id="tipo" class="form-select" required>
              <option value="">Seleccione</option>
              <option value="FISICO">FISICO</option>
              <option value="DIGITAL">DIGITAL</option>
            </select>
          </div>

          <div class="col-md-6 mb-3">
            <label>Portada (Imagen)</label>
            <input type="file" name="ruta_portada" id="ruta_portada" class="form-control" accept=".jpg,.jpeg,.png">
          </div>

          <div class="col-md-6 mb-3">
            <label>Recurso (PDF)</label>
            <input type="file" name="ruta_recurso" id="ruta_recurso" class="form-control" accept=".pdf">
          </div>

        </div>
      </div>
      <div class="card-footer text-end">
        <a href="<?= base_url() ?>" type="reset" class="btn btn-sm btn-outline-secondary">Cancelar</a>
        <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
      </div>
    </div>
  </form>
</div>

<?= $this->endSection() ?>