<?= $header; ?>

<div class="container">
  <div class="my-2">
    <h4>Buscador de Libros</h4>
    <a class="btn btn-sm btn-primary" href="<?= base_url('libros') ?>">Listar</a>
  </div>

  <form action="" autocomplete="off">
    <div class="mb-2">
      <label for="id">Ingrese ID del libro</label>
      <div class="input-group">
        <input type="text" class="form-control" name="id" id="id" autofocus>
        <button type="button" id="buscar" class="btn btn-success">Buscar</button>
      </div>
    </div>

    <div class="mb-2">
      <label for="id">Nombre del libro</label>
      <div class="form-group">
        <input type="text" class="form-control" name="nombre" id="nombre">
      </div>
    </div>

    <div>
      <img src="" alt="" id="portada" width="500px">
    </div>

  </form>
</div>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const id = document.querySelector('#id');
    const nombre = document.querySelector('#nombre');
    const imagen = document.querySelector('#portada');
    const buscar = document.querySelector('#buscar');

    const buscarLibro = async () => {
      if (!id.value) {
        alert("Escriba el ID");
        return;
      }

      try {
        const response = await fetch("http://biblioteca.test/public/api/buscarlibro", {
          method: 'POST',
          headers: { 'Content-type': 'application/json' },
          body: JSON.stringify({
            id: id.value
          })
        });

        if (!response.ok) throw new Error('Error en la comunicación con el servidor');

        const data = await response.json();
        if (data.success) {
          nombre.value = data.nombre;
          imagen.src = `/uploads/${data.imagen}`;
        } else {
          nombre.value = ``;
          imagen.src = ``;
          console.error(data.message);
        }

        console.log(data);
      } catch (e) {
        console.error('Error: ', e);
      }
    };

    buscar.addEventListener("click", buscarLibro);

    id.addEventListener("keydown", (event) => {
      if (event.key === "Enter") {
        buscarLibro();
      }
    });
  });
</script>


<?= $footer; ?>