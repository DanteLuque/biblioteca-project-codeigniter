<?= $header; ?>

<div class="container mt-2">
  <div class="my-2">
    <h4>Editar Libro</h4>
    <a href="<?= base_url('libros') ?>">Volver</a>
  </div>

  <form method="POST" action="<?=base_url('libros/update_db/')?><?=$libro['id']?>" enctype="multipart/form-data">
    <div class="card">
      <div class="mb-3">
        <div class="card-body">

          <div>
            <label for="nombre">Nombre del libro</label>
            <input 
            value="<?=$libro['nombre']?>"
            type="text" 
            class="form-control"
            name="nombre" 
            id="nombre" 
            autofocus 
            required>
          </div>

          <div>
            <label for="imagen">Imagen de portada</label>
            <input
            type="file" 
            class="form-control" 
            name="imagen" 
            id="imagen" 
            autofocus 
            required>
          </div>

          <div>
            <label for="preview">Imagen actual:</label>
            <img src="/uploads/<?= $libro['imagen']?>" width="85px" class="mt-3">
          </div>

        </div>
      </div>
      <div class="card-footer text-end">
        <a href="<?= base_url('libros') ?>" type="reset" class="btn btn-sm btn-outline-secondary">Cancelar</a>
        <button type="submit" class="btn btn-sm btn-primary">Actualizar</button>
      </div>
    </div>
  </form>
</div>

<?= $footer; ?>