        <!-- Masthead-->
        <header class="masthead">
		<?php
															$list=$this->db->query("SELECT * FROM beranda ORDER BY beranda_id ASC")->result_array();
															 foreach ($list as $row) { 
															
															?>
            <div class="container">
                <div class="masthead-subheading"><?=$row["welcome_text"]?></div>
                <div class="masthead-heading text-uppercase"><?=$row["deskripsi_en"]?></div>
            </div>
        </header>