
 
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

                        			<h4 class="header-title m-t-0 m-b-30">LIST Legality</h4>
									
									<a href="<?=base_url("backend/tambah_team")?>" data-toggle="tooltip" data-placement="top" title="Tambah Menu" class="btn btn-warning btn-icon"><i class="zmdi zmdi-edit"></i> Tambah
									</a>
									<br /><br />
                                    <table style="max-width:100% !important;width:100% !important;font-size:12px !important;display:block;position:relative;" class="datatable table col-lg-12" >
                                        <thead>
                                            <tr>
                                                <th width="20%">ID</th>
												<th width="15%">Nama</th>
												<th width="15%">Profesi</th>
												<th width="15%">Link Facebook</th>
												<th width="15%">Link Twitter</th>
												<th width="15%">Link In</th>
												<th width="20%">foto</th>
												<td><th width="5%">Action</th></td>
                                            </tr>
                                        <tbody>
										
										<?php
															$list=$this->db->query("SELECT * FROM team ORDER BY team_id ASC")->result_array();
															 foreach ($list as $row) { 
															
															?>
															  <tr id="row-<?=$row["team_id"]?>">
                                                <td><?=$row["team_id"]?></td>
												<td><?=$row["nama"]?></td>
												<td><?=$row["profesi"]?></td>
												<td><?=$row["link_fb"]?></td>
												<td><?=$row["link_twitter"]?></td>
												<td><?=$row["link_in"]?></td>
												<td><img src="<?=base_url("assets/img_team/".$row["foto"])?>" alt="..." class="img-thumbnail"></td>
												
                                                <td>
												<div class="btn-group btn-group-justified m-b-10">
												<td>
													<a href="<?=base_url("backend/edit_team/".$row["team_id"])?>" title="Edit" class="btn btn-warning btn-icon"><i class="glyphicon glyphicon-pencil"></i></a></td>
													<td>
													<a href="#" title="Hapus" title_berita="<?=$row["nama"]?>" id_pemain="<?=$row["team_id"]?>" mylink="<?=base_url("backend/hapus_team/".$row["team_id"])?>" class="btn btn-danger hapus-button btn-icon"><i class="glyphicon glyphicon-trash"></i></a></td>
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