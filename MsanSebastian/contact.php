<?php include 'includes/header.php'; ?>

    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/background/bg-9.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Contact</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Contact</li>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55945.16225505631!2d-73.90847969206546!3d40.66490264739892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1601263396347!5m2!1sen!2sbd" width="600" height="750" frameborder="0" style="border:0; border-radius: 50%; max-width: 750px; width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-details mb-30">
                        <div class="sec-title mb-40">
                            <div class="sub-title">Contact for help</div>
                            <h2>get in touch <br>  with us</h2>
                        </div>
                        <div class="text mb-40">Lorem Ipsum is simply dummy text of the printing and typesetting have you done google research. </div> 
                        <div class="contact-info">
                            <div class="icon-box">
                                <div class="icon"><span class="flaticon-mail"></span></div>
                                <div class="content">
                                    <h5>Call Anytime</h5>
                                    <div class="text"><a href="tel:926668880000">92 666 888 0000</a></div>
                                </div>
                            </div>
                            <div class="icon-box">
                                <div class="icon"><span class="flaticon-mail"></span></div>
                                <div class="content">
                                    <h5>Write email</h5>
                                    <div class="text"><a href="mailto:needhelp@company.com">needhelp@company.com</a></div>
                                </div>
                            </div>                                
                            <div class="icon-box">
                                <div class="icon"><span class="flaticon-calling"></span></div>
                                <div class="content">
                                    <h5>Visit Office</h5>
                                    <div class="text">88 broklyn golden street, New York. USA</div>
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
                <div class="sub-title">Contact with us</div>
                <h2>drop a message</h2>
            </div>
            <!--Contact Form-->
            <div class="contact-form">
                <form method="post" action="inc/sendemail.php" id="contact-form">
                    <div class="row row-20">
                        <div class="form-group col-md-6">
                            <input type="text" name="form_name" value="" placeholder="Full Name" required>
                        </div>                     
                        <div class="form-group col-md-6">
                            <input type="text" name="email" value="" placeholder="Email Address" required>
                        </div>                        
                        <div class="form-group col-md-6">
                            <input type="text" name="form_phone" value="" placeholder="PHone Num" required>
                        </div>                      
                        <div class="form-group col-md-6">
                            <input type="text" name="form_subject" value="" placeholder="Subject" required>
                        </div>                      
                        <div class="form-group col-md-12">
                            <textarea name="form_message" placeholder="Write Massage"></textarea>
                        </div>                        
                        <div class="form-group text-center col-md-12">
                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                            <button class="theme-btn btn-style-one" type="submit" data-loading-text="Please wait..."><span>Send Message</span></button>
                        </div>
                    </div>
                </form>
            </div>
            <!--End Contact Form-->
        </div>
    </section>

    


<?php include 'includes/footer.php'; ?>