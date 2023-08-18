const fileInput = document.getElementById('file');
const fileSvg1 = document.querySelector(".svg1");
const fileSvg2 = document.querySelector(".svg2");
const label = document.querySelector(".label");
const textContent = document.getElementById('textContent');

fileInput.addEventListener('change', function () {
    if (fileInput.files.length > 0) {
        fileSvg1.classList.add('d-none');
        fileSvg2.classList.remove('d-none');
        fileSvg2.classList.add('d-block');
        label.style.backgroundColor = '#E1F5E0';
        textContent.textContent = "¡Archivo reconocido!"
    }
});