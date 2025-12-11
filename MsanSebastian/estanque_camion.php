<?php include 'includes/header.php'; ?>

    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/background/bg-10.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Estanque Camión Aljibe<br> 2023</h1>
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
                                <p>Forestal Arauco</p>
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
                                <p>Estanque de <br>
                                 camión aljibe</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
    <!-- Galería del proyecto -->
    <div class="project-gallery">

        <!-- Fotos visibles (5 primeras) -->
        <div class="gallery-grid">

            <a href="assets/images/carroceria/estanke-camion-algibe/image-1.jpg" class="glightbox" data-gallery="project">
                <img src="assets/images/carroceria/estanke-camion-algibe/image-1.jpg" alt="">
            </a>

            <a href="assets/images/carroceria/estanke-camion-algibe/image-2.jpg" class="glightbox" data-gallery="project">
                <img src="assets/images/carroceria/estanke-camion-algibe/image-2.jpg" alt="">
            </a>

            <a href="assets/images/carroceria/estanke-camion-algibe/image-3.jpg" class="glightbox" data-gallery="project">
                <img src="assets/images/carroceria/estanke-camion-algibe/image-3.jpg" alt="">
            </a>

            <a href="assets/images/carroceria/estanke-camion-algibe/image-4.jpg" class="glightbox" data-gallery="project">
                <img src="assets/images/carroceria/estanke-camion-algibe/image-4.jpg" alt="">
            </a>        
            
            <a href="assets/images/carroceria/estanke-camion-algibe/image-5.jpg" class="glightbox" data-gallery="project">
                <img src="assets/images/carroceria/estanke-camion-algibe/image-5.jpg" alt="">
            </a>

            <a href="assets/images/carroceria/estanke-camion-algibe/image-6.jpg" class="glightbox" data-gallery="project">
                <img src="assets/images/carroceria/estanke-camion-algibe/image-6.jpg" alt="">
            </a>

            <a href="assets/images/carroceria/estanke-camion-algibe/image-7.jpg" class="glightbox" data-gallery="project">
                <img src="assets/images/carroceria/estanke-camion-algibe/image-7.jpg" alt="">
            </a>
            <a href="assets/images/carroceria/estanke-camion-algibe/image-8.jpg" class="glightbox" data-gallery="project">
                <img src="assets/images/carroceria/estanke-camion-algibe/image-8.jpg" alt="">
            </a>
           
        </div>

         <!-- Fotos adicionales (solo en lightbox, no visibles) 
        <div style="display:none;">
            <a href="assets/images/carroceria/bombero-2/image-9.jpg" class="glightbox" data-gallery="project"></a>        
        </div>


        -->

                

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
            <div class="row">
                <?php
                // Listado de todos los proyectos de carrocería
                $proyectos = [
                    ['url' => 'camion_mop.php', 'img' => 'assets/images/carroceria/maipu-2023/image-1.jpg', 'titulo' => 'Camión MOP'],
                    ['url' => 'camion_pluma.php', 'img' => 'assets/images/carroceria/pluma/image-1.jpg', 'titulo' => 'Camión Pluma'],
                    ['url' => 'camion_naranja.php', 'img' => 'assets/images/carroceria/NARANJA/image-1.jpg', 'titulo' => 'Camión Naranja'],
                    ['url' => 'camion_minero.php', 'img' => 'assets/images/carroceria/minero-2023/image-1.jpg', 'titulo' => 'Camión Minero'],
                    ['url' => 'camion_algibe.php', 'img' => 'assets/images/carroceria/algibe-2022/image-1.jpg', 'titulo' => 'Camión Aljibe'],
                    ['url' => 'carroceria_doble_piso.php', 'img' => 'assets/images/carroceria/doblePiso/image-1.jpg', 'titulo' => 'Carrocería Doble Piso'],
                    ['url' => 'estanque_camion.php', 'img' => 'assets/images/carroceria/estanque-2024/image-1.jpg', 'titulo' => 'Estanque de Camión'],
                    ['url' => 'barra_ciclista.php', 'img' => 'assets/images/carroceria/barra/image-1.jpg', 'titulo' => 'Barra Anti-Ciclista'],
                    ['url' => 'refuerzo_interior_batea.php', 'img' => 'assets/images/carroceria/refuerzo/image-1.jpg', 'titulo' => 'Refuerzo Interior Batea'],
                    ['url' => 'carroceria.php', 'img' => 'assets/images/carroceria/carr/image-1.jpg', 'titulo' => 'Carrocería Industrial']
                ];
                
                // Obtener el archivo actual
                $archivoActual = basename($_SERVER['PHP_SELF']);
                
                // Filtrar proyectos (excluir el actual)
                $proyectosFiltrados = array_filter($proyectos, function($p) use ($archivoActual) {
                    return $p['url'] !== $archivoActual;
                });
                
                // Mezclar y tomar 3 aleatorios
                shuffle($proyectosFiltrados);
                $proyectosAleatorios = array_slice($proyectosFiltrados, 0, 3);
                
                // Mostrar proyectos
                foreach($proyectosAleatorios as $proyecto):
                ?>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="<?php echo $proyecto['img']; ?>" alt="<?php echo $proyecto['titulo']; ?>"></div>
                        <h4><a href="<?php echo $proyecto['url']; ?>"><?php echo $proyecto['titulo']; ?></a></h4>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<script>
document.addEventListener('DOMContentLoaded', function () {
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