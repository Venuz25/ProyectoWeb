document.addEventListener('DOMContentLoaded', function () {
    const renvDiv = document.getElementById('renv');
    const primeraVezDiv = document.getElementById('primera-vez');

    // Ocultar ambas secciones inicialmente
    renvDiv.style.display = 'none';
    primeraVezDiv.style.display = 'none';

    fetch('/ProyectoWeb/php/acuse/validaSegA.php')
        .then(response => {
            if (!response.ok) {
                throw new Error('Error al obtener el estado de la solicitud');
            }
            return response.json();
        })
        .then(data => {
            if (data.error) {
                console.error(data.error);
                return;
            }
            
            const estadoSolicitud = data.solicitud;

            // Mostrar la sección correspondiente según el estado
            if (estadoSolicitud === 'Renovación') {
                renvDiv.style.display = 'block';
                primeraVezDiv.style.display = 'none';
                cargarScript('/ProyectoWeb/scripts/irenovacion.js');
            } else if (estadoSolicitud === 'Primera Vez') {
                primeraVezDiv.style.display = 'block';
                renvDiv.style.display = 'none';
                cargarScript('/ProyectoWeb/scripts/iprimeraV.js');
            } else {
                console.error('Estado de solicitud no válido:', estadoSolicitud);
            }
        })
        .catch(error => {
            console.error('Error al cargar el estado de solicitud:', error);
        });
});

// Función para cargar scripts dinámicamente
function cargarScript(url) {
    const script = document.createElement('script');
    script.src = url;
    script.type = 'text/javascript';
    document.body.appendChild(script);
}
