 <div class="content-wrapper">                       
							
	 					
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
		 <section class="content">

      <!-- Default box -->
      <div class="box">

                <div class="row" style="padding:2%">
                        		<div class="col-lg-12">
                        		<div class="card-box">

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

                        			<h4 class="header-title m-t-0 m-b-30">Edit team</h4>

									<?php

									if(isset($data["pesan"]))
									{
										echo $data["pesan"];
									}
									?>
<form role="form" id="step2form" enctype='multipart/form-data' method="POST" action="<?=base_url("backend/proses_edit_team")?>">
            <!--div class="col-lg-3 col-md-6"-->
           <p>
								<div class="row ">
									<div class="col-lg-12 " >
									<div class="panel panel-primary " >
                                
									<div class="panel-body" >
									<fieldset>
                                    <div class="col-lg-12">
										
										<div class="form-group col-lg-6">
                                            <label>Nama</label>
                                            <input class="form-control" name="team[nama]" value="<?php if(isset($team['nama'])){ echo $team['nama'];} ?>" placeholder=""></div>
											
										<div class="form-group col-lg-6">
                                            <label>Profesi</label>
                                            <input class="form-control" name="team[profesi]" value="<?php if(isset($team['profesi'])){ echo $team['profesi'];} ?>" placeholder=""></div>
                                        
										<div class="form-group col-lg-6">
                                            <label>Link Facebook</label>
                                            <input class="form-control" name="team[link_fb]" value="<?php if(isset($team['link_fb'])){ echo $team['link_fb'];} ?>" placeholder=""></div>
                                        
										<div class="form-group col-lg-6">
                                            <label>Link Twitter</label>
                                            <input class="form-control" name="team[link_twitter]" value="<?php if(isset($team['link_twitter'])){ echo $team['link_twitter'];} ?>" placeholder=""></div>
                                        
										<div class="form-group col-lg-6">
                                            <label>Link In</label>
                                            <input class="form-control" name="team[link_in]" value="<?php if(isset($team['link_in'])){ echo $team['link_in'];} ?>" placeholder=""></div>
                                        
                                        
										<div class="form-group col-lg-6">
                                            <label>Foto</label>
                                            <input type="file" class="form-control" name="main_pic" placeholder="">
										</div>
											
											<input class="form-control" type="hidden" name="team[team_id]" value="<?php if(isset($team['team_id'])){ echo $team['team_id'];} ?>">
										</div>
										
                                    </div>
                                    </p>


                                    <div class="col-lg-6">
										
									<br><br>
									<br><br>
									
 <div class="form-group"><div class="col-lg-3">
                                            <label></label></div><div class="col-lg-9">
                                         <button type="submit" class="btn btn-primary">SIMPAN</button>
                                        <button type="reset" class="btn btn-inverse">RESET </button>
                                        </div></div><br><br>

                                       
                                    </div>	
								</fieldset>
                                   </div></DIV></div>
								   
                               </div>
							   </form>
			  
	</div>
                        	</div>
	
</div>		  
		
		 </div>
      <!-- /.box -->

    </section>				

</div>