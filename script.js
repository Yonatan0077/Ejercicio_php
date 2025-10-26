
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('form'); 

    if (form) {
        form.addEventListener('submit', function(event) {
            let valid = true;

            const fecha = document.getElementById('fecha').value.trim();
            const numerofactura = document.getElementById('numerofactura').value.trim();
            const nombre = document.getElementById('nombre').value.trim();
            const celular = document.getElementById('celular').value.trim();
            const observaciones = document.getElementById('observaciones').value.trim();

            if (nombre === '') {
                alert('El nombre es requerido.');
                valid = false;
            }

            if (numerofactura === '') {
                alert('El número de factura es requerido.');
                valid = false;
            }

            if (fecha === '') {
                alert('La fecha es requerida.');
                valid = false;
            }

            if (celular === '') {
                alert('El número de celular es requerido.');
                valid = false;
            }

            if (!valid) {
                event.preventDefault();
            } else {
                alert('Formulario enviado correctamente');
            }
        });
    } else {
        console.error('No se encontró el formulario.');
    }
});
