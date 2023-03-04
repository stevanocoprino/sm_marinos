<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="<?php echo base_url()?>assets/backend/assets/images/favicon.ico">

        <title></title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/backend/assets/plugins/morris/morris.css">

        <!-- App css -->
        <link href="<?php echo base_url()?>assets/backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/backend/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/backend/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/backend/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/backend/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/backend/assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/backend/assets/css/responsive.css" rel="stylesheet" type="text/css" />
       <!-- <link href="<?php echo base_url()?>assets/backend/assets/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />-->
        <link href="<?php echo base_url()?>assets/backend/assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/backend/assets/css/bootstrap-tokenfield.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/backend/assets/css/editor.css" rel="stylesheet" type="text/css" />
        
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo base_url()?>assets/backend/assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="<?=base_url("")?>" class="logo"><span>SM <span>MARINOS</span></span><i class="zmdi zmdi-layers"></i></a>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Page title -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left">
                                    <i class="zmdi zmdi-menu"></i>
                                </button>
                            </li>
                            <li>
                                <h4 class="page-title"></h4>
                            </li>
                        </ul>

                        <!-- Right(Notification and Searchbox -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <!-- Notification -->
                               
                                <!-- End Notification bar -->
                            </li>
                        </ul>

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

				<?php echo $leftsidebar?>
			
				</div>
			</div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

					<?php echo $body?>
					

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2023 © MEDIA COPRINOS TEKNOLOGI.
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
			
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url()?>assets/backend/assets/js/jquery.min.js"></script>
		  <script src="<?php echo base_url()?>assets/backend/assets/js/jquery-ui.min.js"></script>
		  <script src="<?php echo base_url()?>assets/backend/assets/js/bootstrap-tokenfield.js"></script>
		  
		  
		<!--  <script src="<?php echo base_url()?>assets/backend/assets/js/editor.js"></script>--> 
		  <script src="<?php echo base_url()?>assets/backend/assets/js/nicEdit.js"></script>
		 
		  
        <script src="<?php echo base_url()?>assets/backend/assets/js/detect.js"></script>
        <script src="<?php echo base_url()?>assets/backend/assets/js/fastclick.js"></script>
        <script src="<?php echo base_url()?>assets/backend/assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url()?>assets/backend/assets/js/waves.js"></script>
        <script src="<?php echo base_url()?>assets/backend/assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url()?>assets/backend/assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url()?>assets/backend/assets/js/jquery.scrollTo.min.js"></script>

        <script src="<?php echo base_url()?>assets/backend/assets/js/bootstrap.min.js"></script>
        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="<?php echo base_url()?>assets/backend/assets/plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="<?php echo base_url()?>assets/backend/assets/plugins/jquery-knob/jquery.knob.js"></script>

        <!--Morris Chart-->
		<script src="<?php echo base_url()?>assets/backend/assets/plugins/morris/morris.js"></script>
		<script src="<?php echo base_url()?>assets/backend/assets/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="<?php echo base_url()?>assets/backend/assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url()?>assets/backend/assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url()?>assets/backend/assets/js/jquery.app.js"></script>
       <!-- <script src="<?php echo base_url()?>assets/backend/assets/js/bootstrap-select.min.js"></script>-->
      
		<?php
		if(isset($footer))
		{
			echo $footer;
		}
		?>
	
    </body>
</html>