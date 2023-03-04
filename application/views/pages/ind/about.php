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