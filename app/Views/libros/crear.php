<?= $header; ?>

<div class="container mt-2">
  <div class="my-2">
    <h4>Registro de Libros</h4>
    <a href="<?= base_url('libros') ?>">Volver</a>
  </div>

  <form method="POST" action="<?= base_url('libros/save_db') ?>" enctype="multipart/form-data">
    <div class="card">
      <div class="mb-3">
        <div class="card-body">

          <div>
            <label for="nombre">Nombre del libro</label>
            <input type="text" class="form-control" name="nombre" id="nombre" autofocus required>
          </div>

          <div>
            <label for="imagen">Imagen de portada</label>
            <input type="file" class="form-control" name="imagen" id="imagen" 
            accept="image/png,image/jpeg,image/jpg"
            autofocus required>
          </div>

        </div>
      </div>
      <div class="card-footer text-end">
        <a href="<?= base_url('libros') ?>" type="reset" class="btn btn-sm btn-outline-secondary">Cancelar</a>
        <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
      </div>
    </div>
  </form>
</div>

<?= $footer; ?>