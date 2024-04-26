let btnDescuento = document.getElementById('btnDescuento');

btnDescuento.addEventListener('click', () => {
    // Obten el valor del campo 'total' y conviértelo a un número
    let totalElement = document.getElementById('total');
    let total = parseFloat(totalElement.value);
    console.log(total);
    // Obten el valor del campo 'descuento' y conviértelo a un número
    let descuento = parseFloat(document.getElementById('descuento').value);
    

    // Calcula el descuento y el total después del descuento
    let cuenta = total * descuento / 100;
    let totalDescuento = total - cuenta;

});
