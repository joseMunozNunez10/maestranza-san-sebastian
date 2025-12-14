<?php 
$pageTitle = "Carrocería Camión MOP | Fabricación de Carrocería Municipal - Maestranza San Sebastián";
$pageDescription = "Proyecto: Carrocería especializada para camión MOP. Fabricación de carrocería industrial a medida para trabajos municipales y gubernamentales en Santiago.";
$pageKeywords = "carrocería camión MOP, carrocería municipal, camión servicios públicos, fabricación carrocería gobierno, carrocería especializada santiago";
$pageUrl = "https://maestranzasansebastian.cl/camion_mop.php";
$canonical = "https://maestranzasansebastian.cl/camion_mop.php";
include 'includes/header.php'; 
?>

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
            <div class="row">
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/carroceria/camion_azul/port.jpg" alt=""></div>
                        <h4><a href="camion_pluma.php">Camión Pluma</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/carroceria/espejo-mall/port.jpg" alt=""></div>
                        <h4><a href="camion_minero.php">Camión Minero</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/carroceria/camion-gris/port.jpg" alt=""></div>
                        <h4><a href="camion_algibe.php">Camión Aljibe</a></h4>
                    </div>
                </div>
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