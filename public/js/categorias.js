export async function loadCategorias() {
    const catSelect = document.getElementById("categoria_id");
    catSelect.innerHTML = "<option value=''>Seleccione</option>";

    const res = await fetch("/categorias");
    const data = await res.json();

    data.forEach(cat => {
        catSelect.innerHTML += `<option value="${cat.id}">${cat.nombre}</option>`;
    });
}

export async function loadSubCategorias() {
    const catId = document.getElementById("categoria_id").value;
    const subCatSelect = document.getElementById("subcategoria_id");

    subCatSelect.innerHTML = "<option value=''>Seleccione</option>";

    if (!catId) return;

    const res = await fetch(`/subcategorias/${catId}`);
    const data = await res.json();

    data.forEach(subcat => {
        subCatSelect.innerHTML += `<option value="${subcat.id}">${subcat.nombre}</option>`;
    });
}

document.addEventListener("DOMContentLoaded", () => {
    loadCategorias();
});

window.loadSubCategorias = loadSubCategorias;