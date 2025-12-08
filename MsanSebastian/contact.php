<?php include 'includes/header.php'; ?>

    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/background/bg-9.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Contacto</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="index.php">Inicio</a></li>
                        <li>Contacto</li>
                    </ul>
                </div>                    
            </div>
        </div>
    </section>

    <!-- Contact section -->
    <section class="contact-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-map mb-30">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d425311.48810647964!2d-70.84872379316214!3d-33.61189425409555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1skaufmann%20santiago!5e0!3m2!1ses!2scl!4v1765123322011!5m2!1ses!2scl" width="600" height="750" frameborder="0" style="border:0; border-radius: 50%; max-width: 750px; width: 100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-details mb-30">
                        <div class="sec-title mb-40">
                            <div class="sub-title">Contáctanos</div>
                            <h2>Comunícate <br> con Nosotros</h2>
                        </div>
                        <div class="text mb-40">Estamos disponibles para atender tus consultas sobre proyectos de maestranza, fabricación metálica y carrocería industrial.</div> 
                        <div class="contact-info">
                            <div class="icon-box">
                                <div class="icon"><span class="flaticon-mail"></span></div>
                                <div class="content">
                                    <h5>Llama en Cualquier Momento</h5>
                                    <div class="text"><a href="tel:+56990219851">+569 9021 9851</a></div>
                                </div>
                            </div>
                            <div class="icon-box">
                                <div class="icon"><span class="flaticon-mail"></span></div>
                                <div class="content">
                                    <h5>Escríbenos</h5>
                                    <div class="text"><a href="mailto:hsalgado@maestranzasansebastian.cl">hsalgado@maestranzasansebastian.cl</a></div>
                                </div>
                            </div>                                
                            <div class="icon-box">
                                <div class="icon"><span class="flaticon-calling"></span></div>
                                <div class="content">
                                    <h5>Visítanos</h5>
                                    <div class="text">San Sebastián, Chile</div>
                                </div>
                            </div>
                        </div>                       
                    </div>                    
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form section -->
    <section class="contact-form-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Contáctanos</div>
                <h2>Envíanos un Mensaje</h2>
            </div>
            <!--Contact Form-->
            <div class="contact-form">
                <form method="post" action="assets/inc/sendmail.php" id="contact-form">
                    <div class="row row-20">
                        <div class="form-group col-md-6">
                            <input type="text" name="form_name" value="" placeholder="Nombre Completo" required>
                        </div>                     
                        <div class="form-group col-md-6">
                            <input type="email" name="form_email" value="" placeholder="Correo Electrónico" required>
                        </div>                        
                        <div class="form-group col-md-6">
                            <input type="text" name="form_phone" value="" placeholder="Teléfono" required>
                        </div>                      
                        <div class="form-group col-md-6">
                            <input type="text" name="form_subject" value="" placeholder="Asunto" required>
                        </div>                      
                        <div class="form-group col-md-12">
                            <textarea name="form_message" placeholder="Escribir Mensaje"></textarea>
                        </div>                        
                        <div class="form-group text-center col-md-12">
                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                            <button class="theme-btn btn-style-one" type="submit" data-loading-text="Por favor espere..."><span>Enviar Mensaje</span></button>
                        </div>
                    </div>
                </form>
            </div>
            <!--End Contact Form-->
        </div>
    </section>

    


<?php include 'includes/footer.php'; ?>