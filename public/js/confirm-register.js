document.addEventListener("DOMContentLoaded", () => {
  const formulario = document.querySelector("#formularioRegistro");
  formulario.addEventListener("submit", (e) => {
    e.preventDefault();
    Swal.fire({
      title: "Crud Personas!",
      text: "¿Esta seguro de guardar?",
      icon: "question",
      footer: "SENATI- INGENIERIA DE SOFTWARE",
      confirmButtonText: "Aceptar",
      confirmButtonColor: "#2980b9",
      showCancelButton: true,
      cancelButtonText: "Cancelar",
      cancelButtonColor: "#c0392b",
    }).then((result) => {
      if (result.isConfirmed) {
        console.log("Guardando datos");
        formulario.submit();
      }
    });
  });
});