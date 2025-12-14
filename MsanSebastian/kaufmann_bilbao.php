<?php 
$pageTitle = "Proyecto Kaufmann Bilbao | Estructura Metálica Industrial - Maestranza San Sebastián";
$pageDescription = "Proyecto: Estructuras metálicas para Kaufmann Bilbao. Fabricación e instalación de estructuras de acero para industria automotriz y comercial de gran envergadura.";
$pageKeywords = "proyecto kaufmann, estructura metálica industrial, obras metálicas kaufmann, fabricación estructuras acero, proyecto industrial santiago";
$pageUrl = "https://maestranzasansebastian.cl/kaufmann_bilbao.php";
$canonical = "https://maestranzasansebastian.cl/kaufmann_bilbao.php";
include 'includes/header.php'; 
?>

    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/background/bg-9.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Kaufmann - Bilbao <br> 2019</h1>
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
                                <p>Kaufmann Bilbao</p>
                            </div>
                            <div class="column">
                                <h5>Año</h5>
                                <p>2019</p>
                            </div>
                            <div class="column">
                                <h5>Categoría</h5>
                                <p>Obras Mayores</p>
                            </div>
                            <div class="column">
                                <h5>Servicio</h5>
                                <p>Remodelacion de edificio<br>
                                para sala de ventas<br>
                                (showroom)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
    <!-- Galería del proyecto -->
    <div class="project-gallery">

        <!-- Fotos visibles (5 primeras) -->
        <div class="gallery-grid">

            <a href="assets/images/proyec-omay/kaufmann-bilbao-2019/image-1.jpg" class="glightbox" data-gallery="project">
                <img src="assets/images/proyec-omay/kaufmann-bilbao-2019/image-1.jpg" alt="">
            </a>

            <a href="assets/images/proyec-omay/kaufmann-bilbao-2019/image-2.jpg" class="glightbox" data-gallery="project">
                <img src="assets/images/proyec-omay/kaufmann-bilbao-2019/image-2.jpg" alt="">
            </a>

            <a href="assets/images/proyec-omay/kaufmann-bilbao-2019/image-3.jpg" class="glightbox" data-gallery="project">
                <img src="assets/images/proyec-omay/kaufmann-bilbao-2019/image-3.jpg" alt="">
            </a>

            <a href="assets/images/proyec-omay/kaufmann-bilbao-2019/image-4.jpg" class="glightbox" data-gallery="project">
                <img src="assets/images/proyec-omay/kaufmann-bilbao-2019/image-4.jpg" alt="">
            </a>

            <a href="assets/images/proyec-omay/kaufmann-bilbao-2019/image-5.jpg" class="glightbox" data-gallery="project">
                <img src="assets/images/proyec-omay/kaufmann-bilbao-2019/image-5.jpg" alt="">
            </a>

            <a href="assets/images/proyec-omay/kaufmann-bilbao-2019/image-6.jpg" class="glightbox" data-gallery="project">
                <img src="assets/images/proyec-omay/kaufmann-bilbao-2019/image-6.jpg" alt="">
            </a>
            
        </div>

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
                <div class="sub-title">Más Proyectos</div>
                <h2>Proyectos Recientes</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/proyec-omay/kaufmann-chillan-2025/port.jpg" alt=""></div>
                        <h4><a href="kaufmann_chillan.php">Kaufmann - Chillán</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/proyec-omay/kaufmann-calama-2024/port-servi.jpg" alt=""></div>
                        <h4><a href="project-details.php">Kaufmann - Calama</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/project-3.jpg" alt=""></div>
                        <h4><a href="project-details.php">Kaufmann - Rancagua</a></h4>
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