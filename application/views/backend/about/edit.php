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

                        			<h4 class="header-title m-t-0 m-b-30">Edit About</h4>

									<?php

									if(isset($data["pesan"]))
									{
										echo $data["pesan"];
									}
									?>
<form role="form" id="step2form" enctype='multipart/form-data' method="POST" action="<?=base_url("backend/proses_edit_about")?>">
            <!--div class="col-lg-3 col-md-6"-->
           <p>
								<div class="row ">
									<div class="col-lg-12 " >
									<div class="panel panel-primary " >
                                
									<div class="panel-body" >
									<fieldset>
                                    <div class="col-lg-12">
										
										<div class="form-group col-lg-6">
                                            <label>Tahun</label>
                                            <input class="form-control" name="about[tahun]" value="<?php if(isset($about['tahun'])){ echo $about['tahun'];} ?>" placeholder=""></div>
											
										<div class="form-group col-lg-6">
                                            <label>About Judul [ IND ]</label>
                                            <input class="form-control" name="about[about_nm]" value="<?php if(isset($about['about_nm'])){ echo $about['about_nm'];} ?>" placeholder=""></div>
											
											<div class="form-group col-lg-6">
                                            <label>About Title [ EN ]</label>
                                            <input class="form-control" name="about[about_nm_en]" value="<?php if(isset($about['about_nm_en'])){ echo $about['about_nm_en'];} ?>" placeholder=""></div>
											
										<div class="form-group col-lg-6">
                                            <label>Deskripsi</label>
                                            <input class="form-control" name="about[deskripsi]" value="<?php if(isset($about['deskripsi'])){ echo $about['deskripsi'];} ?>" placeholder=""></div>
                                        
										<div class="form-group col-lg-6">
                                            <label>Description</label>
                                            <input class="form-control" name="about[deskripsi_en]" value="<?php if(isset($about['deskripsi_en'])){ echo $about['deskripsi_en'];} ?>" placeholder=""></div>
                                        
										<div class="form-group col-lg-6">
                                            <label>Pic</label>
                                            <input type="file" class="form-control" name="main_pic" placeholder="">
										</div>
											
											<input class="form-control" type="hidden" name="about[about_id]" value="<?php if(isset($about['about_id'])){ echo $about['about_id'];} ?>">
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