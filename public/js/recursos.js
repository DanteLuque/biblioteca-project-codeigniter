document.addEventListener("DOMContentLoaded", () => {
    const tipoSelect = document.getElementById("tipo");
    const recursoInput = document.getElementById("ruta_recurso");

    function toggleRecursoRequired() {
        if (tipoSelect.value === "DIGITAL") {
            recursoInput.setAttribute("required", "required");
        } else {
            recursoInput.removeAttribute("required");
        }
    }
    toggleRecursoRequired();
    tipoSelect.addEventListener("change", toggleRecursoRequired);
});
