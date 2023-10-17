let btnContinuar = document.getElementById('btnContinuar');

btnContinuar.addEventListener("click", () => {
    let card1 = document.querySelector(".card1");
    let card2 = document.querySelector(".card2");

    card1.classList.add('visually-hidden');
    card2.classList.remove('visually-hidden');
});
