let btnSesion = document.getElementById('btn-sesion');

btnSesion.addEventListener("click", () => {
    let btn = document.getElementById('btn');
    btnSesion.classList.add('btnSesionNone');
    btn.classList.toggle('btnBlock');
});