<!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
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
                                <img class="img-fluid" src="<?php echo base_url()?>assets/img_portfolio/<?=$row["gambar"]?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?=$row["portfolio_nm"]?></div>
                                <div class="portfolio-caption-subheading text-muted"><?=$row["kategori"]?></div>
                            </div>
                        </div>
						<?php } ?>
                    </div>
                    
        </section>