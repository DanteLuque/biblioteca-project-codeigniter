<?= $header; ?>

<div class="container mt-2">
  <div class="my-2">
    <h4>Registro de Editoriales</h4>
    <a href="<?= base_url('editoriales') ?>">Volver</a>
  </div>

  <form method="POST" action="<?= base_url('editoriales/save_db') ?>">
    <div class="card">
      <div class="mb-3">
        <div class="card-body">

          <div>
            <label for="nombre">Nombre de editorial</label>
            <input type="text" class="form-control" name="editorial" id="editorial" autofocus required>
          </div>

          <div>
            <label for="imagen">telefono</label>
            <input type="phone" class="form-control" name="telefono" id="telefono" autofocus required>
          </div>

          <div>
            <label for="imagen">direccion</label>
            <input type="text" class="form-control" name="direccion" id="direccion" autofocus required>
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