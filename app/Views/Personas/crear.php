<?= $header; ?>

<div class="container">
  <div class="my-2">
    <h4>Registro de personas</h4>
    <a class="btn btn-sm btn-secondary" href="<?= base_url('personas') ?>">volver</a>
  </div>

  <form method="POST" action="<?= base_url('personas/save_db') ?>">

    <div class="card mb-3">
      <div class="card-header">Datos de Persona</div>
      <div class="card-body">
        <div class="row">

          <div class="col-md-6 mb-3">
            <label>DNI</label>
            <input type="number" name="dni" id="dni" class="form-control" min="1" step="1" required>
          </div>

          <div class="col-md-6 mb-3">
            <label>Nombres</label>
            <input type="text" name="nombres" id="nombres" class="form-control" minlength="2" required>
          </div>

          <div class="col-md-6 mb-3">
            <label>Apellidos</label>
            <input type="text" name="apellidos" id="apellidos" class="form-control" minlength="2" required>
          </div>

          <div class="col-md-6 mb-3">
            <label>Teléfono</label>
            <input type="tel" name="telefono" minlength="6" maxlength="12" class="form-control">
          </div>

        </div>
      </div>
    </div>

    <div class="card mb-3">
      <div class="card-header">Dirección</div>
      <div class="card-body">

        <div class="row mb-2">
          <div class="col-md-4">
            <label>Departamento</label>
            <select class="form-select" name="departamento" id="departamento" required onchange="loadProvincias()">
            </select>
          </div>

          <div class="col-md-4">
            <label>Provincia</label>
            <select class="form-select" name="provincia" id="provincia" required onchange="loadDistritos()">
              <option value="">Seleccione</option>
            </select>
          </div>

          <div class="col-md-4">
            <label>Distrito</label>
            <select class="form-select" name="distrito" id="distrito" required>
              <option value="">Seleccione</option>
            </select>
          </div>
        </div>

        <div class="mb-2">
          <label>Dirección</label>
          <input type="text" name="direccion" class="form-control" minlength="5" required>
        </div>

      </div>
    </div>

    <button type="submit" class="btn btn-success" id="btnRegistrar">Registrar</button>
  </form>

</div>

<?= $footer; ?>