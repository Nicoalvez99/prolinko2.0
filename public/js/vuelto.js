let btnVuelto = document.getElementById('btnVuelto');

btnVuelto.addEventListener("click", ()=>{
    let inpVuelto = parseFloat(document.getElementById('inpVuelto').value);
    let total = parseFloat(document.getElementById('total').innerText.replace(',', '').replace('.', '.'));
    let vuelto = document.getElementById('vuelto');

    let totalVuelto = inpVuelto - total;
    vuelto.innerHTML = "$" + totalVuelto;

});