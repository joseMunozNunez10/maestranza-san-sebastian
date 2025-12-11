<?php include 'includes/header.php'; ?>

    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/background/bg-10.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Camion MOP<br> 2023</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="services.php">Proyectos</a></li>                        
                    </ul>
                </div>                    
            </div>
        </div>
    </section>

    <!-- Project details -->
    <section class="project-details">
        <div class="auto-container">            
            <div class="row">
                <div class="col-lg-3">
                    <div class="project-info">
                        <div class="content">
                            <div class="column">
                                <h5>Cliente</h5>
                                <p>Municipalidad de Maipu</p>
                            </div>
                            <div class="column">
                                <h5>Año</h5>
                                <p>2023</p>
                            </div>
                            <div class="column">
                                <h5>Categoría</h5>
                                <p>Carrocería</p>
                            </div>
                            <div class="column">
                                <h5>Servicio</h5>
                                <p>Fabricación de carrocería <br>
                                 para camión MOP <br>
                                 Municipalidad de Maipú</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
    <!-- Galería del proyecto -->
    <div class="project-gallery">

        <!-- Fotos visibles (5 primeras) -->
        <div class="gallery-grid">

            <a href="assets/images/carroceria/maipu-2023/image-1.jpg" class="glightbox" data-gallery="project">
                <img src="assets/images/carroceria/maipu-2023/image-1.jpg" alt="">
            </a>

            <a href="assets/images/carroceria/maipu-2023/image-2.jpg" class="glightbox" data-gallery="project">
                <img src="assets/images/carroceria/maipu-2023/image-2.jpg" alt="">
            </a>

            <a href="assets/images/carroceria/maipu-2023/image-3.jpg" class="glightbox" data-gallery="project">
                <img src="assets/images/carroceria/maipu-2023/image-3.jpg" alt="">
            </a>

            <a href="assets/images/carroceria/maipu-2023/image-4.jpg" class="glightbox" data-gallery="project">
                <img src="assets/images/carroceria/maipu-2023/image-4.jpg" alt="">
            </a>            

            <a href="assets/images/carroceria/maipu-2023/image-5.jpg" class="glightbox" data-gallery="project">
                <img src="assets/images/carroceria/maipu-2023/image-5.jpg" alt="">
            </a>

            <a href="assets/images/carroceria/maipu-2023/image-6.jpg" class="glightbox" data-gallery="project">
                <img src="assets/images/carroceria/maipu-2023/image-6.jpg" alt="">
            </a>

            <a href="assets/images/carroceria/maipu-2023/image-7.jpg" class="glightbox" data-gallery="project">
                <img src="assets/images/carroceria/maipu-2023/image-7.jpg" alt="">  
            </a>

            <a href="assets/images/carroceria/maipu-2023/image-8.jpg" class="glightbox" data-gallery="project">
                <img src="assets/images/carroceria/maipu-2023/image-8.jpg" alt="">
            </a>

        </div>

         <!-- Fotos adicionales (solo en lightbox, no visibles) -->
        <div style="display:none;">
            <a href="assets/images/carroceria/maipu-2023/image-9.jpg" class="glightbox" data-gallery="project"></a>        
        </div>


        

                

         <!--Botón Mostrar más --> 
        <div class="text-center mt-20">
            <button id="showMoreBtn" class="btn-theme">Mostrar más fotos</button>
        </div>     
        

    </div>
</div>
               
            </div>
        </div>
    </section>

    <div class="auto-container"><div class="border-bottom"></div></div>

    <!-- Related Project -->
    <section class="related-projects">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Más Proyectos de Carrocería</div>
                <h2>Otros Trabajos Realizados</h2>
            </div>
            <div class="row" id="related-projects-container">
                <!-- Los proyectos se cargarán aquí dinámicamente -->
            </div>
        </div>
    </section>

<script>
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

document.addEventListener('DOMContentLoaded', function () {
    // Cargar proyectos relacionados
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
    
    // GLightbox
    const lightbox = GLightbox({
        selector: '.glightbox',
        touchNavigation: true,
        loop: true,
        autoplayVideos: true
    });

    document.getElementById("showMoreBtn").addEventListener("click", function() {
        document.querySelector(".glightbox").click();
    });
});
</script>

<?php include 'includes/footer.php'; ?>