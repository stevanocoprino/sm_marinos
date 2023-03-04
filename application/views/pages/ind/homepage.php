  <!-- Masthead-->
  <?php $row=$this->db->query("SELECT * FROM beranda ORDER BY beranda_id ASC LIMIT 1")->row_array();?>
        <header class="masthead" style="background-image: url(<?=base_url("assets/img_beranda/".$row["banner"])?>);">
															
            <div class="container">
                <div class="masthead-heading text-uppercase" style="-webkit-text-stroke: 2px #780000;font-family: sans;color:#e4e4e4"><?=$row["welcome_text"]?></div>
                <!-- <div class="masthead-subheading" style="-webkit-text-stroke: 2px #e5e5e5;font-family: sans;color:#212529"><?=$row["deskripsi"]?></div> -->
            </div>
			 
        </header>
<!-- Services-->
<section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                </div>
                <div class="row">
				<?php
															$list=$this->db->query("SELECT * FROM portfolio ORDER BY portfolio_id ASC")->result_array();
															 foreach ($list as $row) { 
															
															?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <center>

                                    <img class="img-fluid" src="<?php echo base_url()?>assets/img_portfolio/<?=$row["gambar"]?>" style="width:4em" alt="..." />
                                </center>
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?=$row["portfolio_nm"]?></div>
                                <div class="portfolio-caption-subheading text-muted"><?=$row["deskripsi"]?></div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                    
        </section>
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Why Us?</h2>
                </div>
                <div class="row text-center">
				<?php
															$list=$this->db->query("SELECT * FROM service ORDER BY service_id ASC")->result_array();
															 foreach ($list as $row) { 
															
															?>
                    <div class="col-md-4">
                            <img class="mx-auto rounded-circle" src="<?php echo base_url()?>assets/img_service/<?=$row["logo"]?>" style="height:4em" alt="..." />
                        <h4><?=$row["service_nm"]?></h4>
                        <p><?=$row["deskripsi"]?></p>
                    </div>
				<?php } ?>
                
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        
        <!-- About-->
        <section class="page-section" id="about">
		<?php
															$list=$this->db->query("SELECT * FROM about ORDER BY about_id ASC")->result_array();
															 foreach ($list as $row) { 
															
															?>
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo base_url()?>assets/img_about/<?=$row["gambar"]?>" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4><?=$row["tahun"]?></h4>
                                <h4 class="subheading"><?=$row["about_nm"]?></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?=$row["deskripsi"]?></p></div>
                        </div>
                    </li>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
						 <?php } ?>
                    </li>
                </ul>
            </div>
        </section>
       <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">OUR LEGALITY</h2>
                    <h3 class="section-subheading text-muted">we are already registered in indonesian Legality</h3>
                </div>
                <div class="row">
				<?php
															$list=$this->db->query("SELECT * FROM team ORDER BY team_id ASC")->result_array();
															 foreach ($list as $row) { 
															
															?>
                    <div class="col-lg-4">
                        <div class="team-member">
						
                            <img class="mx-auto rounded-circle" src="<?php echo base_url()?>assets/img_team/<?=$row["foto"]?>" alt="..." />
                            <h4> <?=$row["nama"]?> <h4/>
                            <p class="text-muted"><?=$row["profesi"]?></p>
                            <a class="btn btn-dark btn-social mx-2" href="<?=$row["link_twitter"]?>" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="<?=$row["link_fb"]?>" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="<?=$row["link_in"]?>" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
															 <?php 
															 } ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>