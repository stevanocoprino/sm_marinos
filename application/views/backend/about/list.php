
 
 <div class="content-wrapper">                       
							
	  				
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
		 <section class="content">

      <!-- Default box -->
      <div class="box">
                         <div class="row" style="padding:2%">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">

                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>

                        			<h4 class="header-title m-t-0 m-b-30">LIST</h4>
									
									<a href="<?=base_url("backend/tambah_about")?>" data-toggle="tooltip" data-placement="top" title="Tambah Menu" class="btn btn-warning btn-icon"><i class="zmdi zmdi-edit"></i> Tambah
									</a>
									<br /><br />
                                    <table style="max-width:100% !important;width:100% !important;font-size:12px !important;display:block;position:relative;" class="datatable table col-lg-12" >
                                        <thead>
                                            <tr>
												<th width="20%">ID</th>
												<th width="15%">Tahun</th>
												<th width="15%">About Judul [ IND ]</th>
												<th width="15%">About Title [ EN ]</th>
												<th width="15%">Deskripsi</th>
												<th width="15%">Description</th>
												<th width="15%">Pic</th>
												<td><th width="5%">Action</th></td>
                                            </tr>
                                        <tbody>
										
										<?php
															$list=$this->db->query("SELECT * FROM about ORDER BY about_nm ASC")->result_array();
															 foreach ($list as $row) { 
															
															?>
															  <tr id="row-<?=$row["about_id"]?>">
												<td><?=$row["about_id"]?></td>
												<td><?=$row["tahun"]?></td>
												<td><?=$row["about_nm"]?></td>
												<td><?=$row["about_nm_en"]?></td>
												<td><?=$row["deskripsi"]?></td>
												<td><?=$row["deskripsi_en"]?></td>
                                                <td><img src="<?=base_url("assets/img_about/".$row["gambar"])?>" alt="..." class="img-thumbnail"></td>
												
                                                <td>
												<div class="btn-group btn-group-justified m-b-10">
												<td>
													
													<a href="<?=base_url("backend/edit_about/".$row["about_id"])?>" title="Edit" class="btn btn-warning btn-icon"><i class="glyphicon glyphicon-pencil"></i></a></td>
													<td>	
													<a href="#" title="Hapus" title_berita="<?=$row["about_nm"]?>" id_pemain="<?=$row["about_id"]?>" mylink="<?=base_url("backend/hapus_about/".$row["about_id"])?>" class="btn btn-danger hapus-button btn-icon"><i class="glyphicon glyphicon-trash"></i></a></td>
													
												</div>
												</td>
                                               
                                            </tr>  
															<?php 
															} ?>
                                           
                                           
                                        </tbody>
                                    </table>
							
                                </div>
								
                            </div><!-- end col -->
							
                        </div>
                        <!-- end row -->
			
		 </div>
      <!-- /.box -->

    </section>				
	

					
		
</div>					