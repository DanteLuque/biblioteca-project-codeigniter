<?= $this->extend('layouts/master') ?>
<?= $this->section('content') ?>

<div class="container">
  <div class="my-2">
    <h4>Lista de Editoriales</h4>
    <a class="btn btn-sm btn-primary" href="<?= base_url('/crear') ?>">Registrar</a>
  </div>

  <?= $this->include('common/msg-error') ?>
  <?= $this->include('common/msg-success') ?>

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
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>
  </div>
</div>

<?= $this->endSection() ?>