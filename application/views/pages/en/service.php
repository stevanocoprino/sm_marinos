<!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                </div>
                <div class="row text-center">
				<?php
															$list=$this->db->query("SELECT * FROM service ORDER BY service_id ASC")->result_array();
															 foreach ($list as $row) { 
															
															?>
                    <div class="col-md-4">
                            <img class="mx-auto rounded-circle" src="<?php echo base_url()?>assets/img_service/<?=$row["logo"]?>" alt="..." />
                        <h4><?=$row["service_nm"]?></h4>
                        <p><?=$row["deskripsi_en"]?></p>
                    </div>
                </div>
				<?php } ?>
            </div>
        </section>