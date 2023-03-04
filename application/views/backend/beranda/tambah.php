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

                        			<h4 class="header-title m-t-0 m-b-30">Tambah</h4>
									<?php
									if(isset($data["pesan"]))
									{
										echo $data["pesan"];
									}
									?>
<form role="form" id="step2form" enctype='multipart/form-data' method="POST" action="<?=base_url("backend/proses_tambah_beranda")?>">
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
                                            <input class="form-control" name="beranda[welcome_text]" placeholder="Welcome Text">
										</div>
										
										<div class="form-group col-lg-6">
                                            <label>Deskripsi</label>
                                            <input class="form-control" name="beranda[deskripsi]" placeholder="Deskripsi">
										</div>
										
										<div class="form-group col-lg-6">
                                            <label>Description</label>
                                            <input class="form-control" name="beranda[deskripsi_en]" placeholder="Description">
										</div>
										
										<div class="form-group col-lg-6">
                                            <label>Link Facebook</label>
                                            <input class="form-control" name="beranda[link_fb]" placeholder="Link Facebook">
										</div>
										
										<div class="form-group col-lg-6">
                                            <label>Link Twitter</label>
                                            <input class="form-control" name="beranda[link_twitter]" placeholder="Link Twitter">
										</div>
										
										<div class="form-group col-lg-6">
                                            <label>Link In</label>
                                            <input class="form-control" name="beranda[link_in]" placeholder="Link_in">
										</div>
										
										<div class="form-group col-lg-6">
                                            <label>Banner</label>
                                            <input type="file" class="form-control" name="main_pic" placeholder="Banner">
										</div>
										

                                    <div class="col-lg-6">
										
<br></br>

									
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