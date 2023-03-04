                    <!-- User -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="<?php echo base_url()?>/assets/backend/assets/images/users/avatar-3.jpg" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                            <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
                        </div>
                        <h5><a href="#"><?=$this->session->userdata("nama")?></a> </h5>
						
                        <h5><a href="#"><?=$this->session->userdata("level_name")?></a> </h5>
                        
                    </div>
                    <!-- End User -->

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="text-muted menu-title">MENU</li>

							<li>
                                <a href="<?=base_url("backend/")?>" <class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> Beranda </span> </a>
                            </li>
							
							<li class="has_sub igd_baru2 ">
                                <a href="javascript:void(0);" class="waves-effect igd_baru"><i class="zmdi zmdi-view-dashboard"></i> <span> About </span><span class="menu-arrow"> </a>
								<ul class="list-unstyled">
                                    <li><a href="<?=base_url("backend/tambah_about/")?>">Tambah About</a></li>
									<li><a href="<?=base_url("backend/list_about/")?>" class="igd_baru" href="ui-buttons.html">List About</a></li>
                                </ul>
                            </li>
							
							<li class="has_sub igd_baru2 ">
                                <a href="javascript:void(0);" class="waves-effect igd_baru"><i class="zmdi zmdi-view-dashboard"></i> <span> Tampilan</span><span class="menu-arrow"> </a>
								<ul class="list-unstyled">
                                    <li><a href="<?=base_url("backend/tambah_beranda/")?>">Tambah Tampilan</a></li>
									<li><a href="<?=base_url("backend/list_beranda/")?>" class="igd_baru" href="ui-buttons.html">List Tampilan</a></li>
                                </ul>
                            </li>
							
							<li class="has_sub igd_baru2 ">
                                <a href="javascript:void(0);" class="waves-effect igd_baru"><i class="zmdi zmdi-view-dashboard"></i> <span> Portfolio </span><span class="menu-arrow"> </a>
								<ul class="list-unstyled">
                                    <li><a href="<?=base_url("backend/tambah_portfolio/")?>">Tambah Porfolio</a></li>
									<li><a href="<?=base_url("backend/list_portfolio/")?>" class="igd_baru" href="ui-buttons.html">List Portfolio</a></li>
                                </ul>
                            </li>
							
							<li class="has_sub igd_baru2 ">
                                <a href="javascript:void(0);" class="waves-effect igd_baru"><i class="zmdi zmdi-view-dashboard"></i> <span> Service </span><span class="menu-arrow"> </a>
								<ul class="list-unstyled">
                                    <li><a href="<?=base_url("backend/tambah_service/")?>">Tambah Porfolio</a></li>
									<li><a href="<?=base_url("backend/list_service/")?>" class="igd_baru" href="ui-buttons.html">List Service</a></li>
                                </ul>
                            </li>
							
							<li class="has_sub igd_baru2 ">
                                <a href="javascript:void(0);" class="waves-effect igd_baru"><i class="zmdi zmdi-view-dashboard"></i> <span> Team </span><span class="menu-arrow"> </a>
								<ul class="list-unstyled">
                                    <li><a href="<?=base_url("backend/tambah_team/")?>">Tambah Team</a></li>
									<li><a href="<?=base_url("backend/list_team/")?>" class="igd_baru" href="ui-buttons.html">List Team</a></li>
                                </ul>
                            </li>
                            
					<li>
                                <a href="<?=base_url("backend/logout")?>" <class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> Keluar </span> </a>
                            </li>
                           

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>