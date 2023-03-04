
<!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
				<?php
															$list=$this->db->query("SELECT * FROM team ORDER BY team_id ASC")->result_array();
															 foreach ($list as $row) { 
															
															?>
                    <div class="col-lg-4">
                        <div class="team-member">
						
                            <img class="mx-auto rounded-circle" src="<?php echo base_url()?>assets/img_team/<?=$row["foto"]?>" alt="..." />
                            <h4><?=$row["nama"]?><h4/>
                            <p class="text-muted"><?=$row["profesi"]?></p>
                            <a class="btn btn-dark btn-social mx-2" href="<?=$row["link_twitter"]?>" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="<?=$row["link_fb"]?>" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="<?=$row["link_in"]?>" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
															 <?php } ?>
                    </div>
                </div>
            </div>
        </section>