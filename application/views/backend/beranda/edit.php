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

                        			<h4 class="header-title m-t-0 m-b-30">Edit Tampilan</h4>

									<?php

									if(isset($data["pesan"]))
									{
										echo $data["pesan"];
									}
									?>
<form role="form" id="step2form" enctype='multipart/form-data' method="POST" action="<?=base_url("backend/proses_edit_beranda")?>">
            <!--div class="col-lg-3 col-md-6"-->
           <p>
								<div class="row ">
									<div class="col-lg-12 " >
									<div class="panel panel-primary " >
                                
									<div class="panel-body" >
									<fieldset>
                                    <div class="col-lg-12">
								   

										<div class="form-group col-lg-6">
                                            <label>Welcome Text</label>
                                            <input class="form-control" name="beranda[welcome_text]" value="<?php if(isset($beranda['welcome_text'])){ echo $beranda['welcome_text'];} ?>" placeholder=""></div>
                                        
										<div class="form-group col-lg-6">
                                            <label>Deskripsi</label>
                                            <input class="form-control" name="beranda[deskripsi]" value="<?php if(isset($beranda['deskripsi'])){ echo $beranda['deskripsi'];} ?>" placeholder=""></div>
                                        
										<div class="form-group col-lg-6">
                                            <label>Description</label>
                                            <input class="form-control" name="beranda[deskripsi_en]" value="<?php if(isset($beranda['deskripsi_en'])){ echo $beranda['deskripsi_en'];} ?>" placeholder=""></div>
                                        
										<div class="form-group col-lg-6">
                                            <label>Link Facebook</label>
                                            <input class="form-control" name="beranda[link_fb]" value="<?php if(isset($beranda['link_fb'])){ echo $beranda['link_fb'];} ?>" placeholder=""></div>
                                        
										<div class="form-group col-lg-6">
                                            <label>Link Twitter</label>
                                            <input class="form-control" name="beranda[link_twitter]" value="<?php if(isset($beranda['link_twitter'])){ echo $beranda['link_twitter'];} ?>" placeholder=""></div>
                                        
										<div class="form-group col-lg-6">
                                            <label>Link In</label>
                                            <input class="form-control" name="beranda[link_in]" value="<?php if(isset($beranda['link_in'])){ echo $beranda['link_in'];} ?>" placeholder=""></div>
                                        
										<div class="form-group col-lg-6">
                                            <label>Banner</label>
                                            <input type="file" class="form-control" name="main_pic" placeholder="Banner">
										</div>
											
											<input class="form-control" type="hidden" name="beranda[beranda_id]" value="<?php if(isset($beranda['beranda_id'])){ echo $beranda['beranda_id'];} ?>">
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