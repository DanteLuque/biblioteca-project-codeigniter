export async function loadInfoReniec() {
  const inputDNI = document.getElementById("dni").value;
  const nombres = document.getElementById('nombres');
  const apellidos = document.getElementById('apellidos');

  if (inputDNI.length === 8) {
    const res = await fetch(`/reniec/consultaDni/${inputDNI}`)
    const data = await res.json();
    if (data) {
      const datosPersona = JSON.parse(data);
      nombres.value =  datosPersona.first_name;
      apellidos.value = `${datosPersona.first_last_name} ${datosPersona.second_last_name}`;
    }
  } else {
    nombres.value = '';
    apellidos.value = '';
  }
}

document.addEventListener("input", () => {
  loadInfoReniec();
});

