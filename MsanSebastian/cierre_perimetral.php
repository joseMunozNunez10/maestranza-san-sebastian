<?php 
$pageTitle = "Cierre Perimetral Metálico | Fabricación de Rejas y Cierres - Santiago";
$pageDescription = "Proyecto: Cierre perimetral industrial. Fabricación e instalación de cierres metálicos, rejas perimetrales y sistemas de seguridad para empresas e industrias.";
$pageKeywords = "cierre perimetral metálico, rejas perimetrales, cerco industrial, fabricación rejas, cierre seguridad santiago, instalación cierres";
$pageUrl = "https://maestranzasansebastian.cl/cierre_perimetral.php";
$canonical = "https://maestranzasansebastian.cl/cierre_perimetral.php";
include 'includes/header.php'; 
?>

    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/background/bg-11.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Cierre Perimetral<br> 2025</h1>
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
                                <p>Kaufmann</p>
                            </div>
                            <div class="column">
                                <h5>Año</h5>
                                <p>2025</p>
                            </div>
                            <div class="column">
                                <h5>Categoría</h5>
                                <p>Obras Menores</p>
                            </div>
                            <div class="column">
                                <h5>Servicio</h5>
                                <p>Cierre Perimetral
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
    <!-- Galería del proyecto -->
    <div class="project-gallery">

        <!-- Fotos visibles (5 primeras) -->
        <div class="gallery-grid">

            <a href="assets/images/proyec-omen/cierre-perimetral/image-10.jpg" class="glightbox" data-gallery="project">
                <img src="assets/images/proyec-omen/cierre-perimetral/image-10.jpg" alt="">
            </a>

            <a href="assets/images/proyec-omen/cierre-perimetral/image-11.jpg" class="glightbox" data-gallery="project">
                <img src="assets/images/proyec-omen/cierre-perimetral/image-11.jpg" alt="">
            </a>

            <a href="assets/images/proyec-omen/cierre-perimetral/image-12.jpg" class="glightbox" data-gallery="project">
                <img src="assets/images/proyec-omen/cierre-perimetral/image-12.jpg" alt="">
            </a>                 
            
        </div>



        <!-- Fotos adicionales (solo en lightbox, no visibles) 
        <div style="display:none;">
            <a href="assets/images/proyec-omen/porton-residencial/image-9.jpg" class="glightbox" data-gallery="project"></a>
            <a href="assets/images/proyec-omen/porton-residencial/image-13.jpg" class="glightbox" data-gallery="project"></a>
            <a href="assets/images/proyec-omen/porton-residencial/image-14.jpg" class="glightbox" data-gallery="project"></a>
            <a href="assets/images/proyec-omen/porton-residencial/image-15.jpg" class="glightbox" data-gallery="project"></a>
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
                <div class="sub-title">Más Proyectos</div>
                <h2>Proyectos Recientes</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/proyec-omay/kaufmann-bilbao-2019/port.jpg" alt=""></div>
                        <h4><a href="kaufmann_bilbao.php">Kaufmann - Bilbao</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/proyec-omay/kaufmann-calama-2024/port-servi.jpg" alt=""></div>
                        <h4><a href="kaufmann_calama.php">Kaufmann - Calama</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/proyec-omay/kaufmann-rancagua-2019/port.jpg" alt=""></div>
                        <h4><a href="kaufmann_rancagua.php">Kaufmann - Rancagua</a></h4>
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
        // Abre el slider desde la primera foto
        document.querySelector(".glightbox").click();
    });
});
</script>

<?php include 'includes/footer.php'; ?>