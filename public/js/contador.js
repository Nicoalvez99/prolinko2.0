window.onload = function () {
    const elementos = document.querySelectorAll(".contador");

    elementos.forEach(elemento => {
        const valorFinal = parseInt(elemento.textContent, 10);
        let valorActual = 0;

        const incremento = Math.ceil(valorFinal / 100);

        const intervalo = setInterval(function () {
            valorActual += incremento;
            elemento.textContent = valorActual;

            if (valorActual >= valorFinal) {
                elemento.textContent = valorFinal;
                clearInterval(intervalo);
            }
        }, 10);
    });
}
