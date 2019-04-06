
    <!--CONTACT US AREA-->
    <section class="contact-area padding-top white-gray-bg" id="contact">
        <div class="contact-form-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="contact-details-content wow fadeIn">
                            <h2>Contáctenos</h2>
                              <div class="contact-address-details">
                                <div class="single-contact">
                                    <div class="contact-icon">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="contact-details">
                                        <h5>Dirección</h5>
                                        <p>Valencia, Edo-Carabobo, Venezuela</p>
                                    </div>
                                </div>
                                <div class="single-contact">
                                    <div class="contact-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="contact-details">
                                        <h5>Teléfonos</h5>
                                        <p>+58 41274745038</p>
                                    </div>
                                </div>
                                <div class="single-contact">
                                    <div class="contact-icon">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="contact-details">
                                        <h5>Email</h5>
                                        <p>leapcodes@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="contact-form mb50 wow fadeIn">
                            <h2>Escribenos</h2>

                            <?php
        if($this->session->flashdata("success"))
        {
            ?>
            <div class="">
                <?php echo $this->session->flashdata("success") ?>
            </div>
            <?php
        }
        ?>
          
                           <?php echo form_open(base_url("contacto/send")) ?>
                            
                                <div class="form-group" id="name-field">
                                    <div class="form-input">
                                        <input type="text" class="form-control" id="form-name" name="name" placeholder="Nombre.." required>
                                      
                                    </div>
                                </div>
                                <div class="form-group" id="email-field">
                                    <div class="form-input">
                                        <input type="email" class="form-control" id="form-email" name="email" placeholder="Email.." required>
                                    </div>   
                                </div>
                               
                                <div class="form-group" id="message-field">
                                    <div class="form-input">
                                        <textarea type="text" class="form-control" rows="6" id="form-message" name="message" placeholder="Escriba su mensaje..." required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <?php echo form_submit("send", "Enviar", array("class" => "btn btn-success btn-lg pull-left")) ?>

                                </div>
                       
                     

        <?php echo form_close() ?>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!--CONTACT US AREA END-->