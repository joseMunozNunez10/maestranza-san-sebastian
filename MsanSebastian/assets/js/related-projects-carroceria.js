// Proyectos de carrocería disponibles
const proyectosCarroceria = [
    {url: 'camion_mop.php', img: 'assets/images/carroceria/maipu-2023/port.jpg', titulo: 'Camión MOP'},
    {url: 'camion_pluma.php', img: 'assets/images/carroceria/camion_azul/port.jpg', titulo: 'Camión Pluma'},
    {url: 'camion_naranja.php', img: 'assets/images/carroceria/camion-naranja/port.jpg', titulo: 'Camión Naranja'},
    {url: 'camion_minero.php', img: 'assets/images/carroceria/espejo-mall/port.jpg', titulo: 'Camión Minero'},
    {url: 'camion_algibe.php', img: 'assets/images/carroceria/camion-gris/port.jpg', titulo: 'Camión Aljibe'},
    {url: 'carroceria_doble_piso.php', img: 'assets/images/carroceria/camion34/port.jpg', titulo: 'Carrocería Doble Piso'},
    {url: 'estanque_camion.php', img: 'assets/images/carroceria/estanke-camion-algibe/port.jpg', titulo: 'Estanque de Camión'},
    {url: 'barra_ciclista.php', img: 'assets/images/carroceria/camion-franjas/port.jpg', titulo: 'Barra Anti-Ciclista'},
    {url: 'refuerzo_interior_batea.php', img: 'assets/images/carroceria/camion-naranja/port.jpg', titulo: 'Refuerzo Interior Batea'}
];

function shuffle(array) {
    const arr = [...array];
    for (let i = arr.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [arr[i], arr[j]] = [arr[j], arr[i]];
    }
    return arr;
}

function cargarProyectosRelacionados() {
    const container = document.getElementById('related-projects-container');
    if (container) {
        const archivoActual = window.location.pathname.split('/').pop();
        const proyectosFiltrados = proyectosCarroceria.filter(p => p.url !== archivoActual);
        const proyectosAleatorios = shuffle(proyectosFiltrados).slice(0, 3);
        
        proyectosAleatorios.forEach(proyecto => {
            const html = `
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="${proyecto.img}" alt="${proyecto.titulo}"></div>
                        <h4><a href="${proyecto.url}">${proyecto.titulo}</a></h4>
                    </div>
                </div>
            `;
            container.innerHTML += html;
        });
    }
}

// Auto-ejecutar cuando el DOM esté listo
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', cargarProyectosRelacionados);
} else {
    cargarProyectosRelacionados();
}
