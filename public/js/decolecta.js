export async function loadInfoReniec() {
  const inputDNI = document.getElementById("dni").value;
  const nombres = document.getElementById('nombres');
  const apellidos = document.getElementById('apellidos');
  const btnRegistrar = document.getElementById('btnRegistrar')

  if (inputDNI.length === 8) {

    const res = await fetch(`/reniec/consultaDni/${inputDNI}`)
    if (res.ok) btnRegistrar.classList.add('disabled')

    const data = await res.json();
    if (data) {
      const datosPersona = JSON.parse(data);
      nombres.value = datosPersona.first_name;
      apellidos.value = `${datosPersona.first_last_name} ${datosPersona.second_last_name}`;

      btnRegistrar.classList.remove('disabled')
    }
  } else {
    nombres.value = '';
    apellidos.value = '';
    btnRegistrar.classList.remove('disabled')
  }
}

document.addEventListener("keydown", (event) => {
  if (event.key === 'Enter') {
    event.preventDefault();
    loadInfoReniec();
  }
});

