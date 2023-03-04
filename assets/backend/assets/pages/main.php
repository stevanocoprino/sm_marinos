<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>INASIS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    
<style>
    p.content {
        margin: 30px;
        padding-bottom: 4px;
        font : 50px/20px normal Helvetica,Arial,sans-serif;
        color: #4F5155;
        text-align: center;
            
    }
    
</style>
    
</head>



<body>

  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">INASIS Coy</a>
            </div>
            <!-- /.navbar-header -->

           
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
  
  
  
  
<div id="page-wrapper">
            <div style class="row">
                <div class="col-lg-12">
                    <p class="page-header">Pendaftaran Rawat Jalan Poliklinik 
                           
                    </p>
                    
                        <table>
                            <td><button type="button" class="btn btn-default btn-block ">Pasien Lama </button></td>
                            <td><button  type="button" class="btn btn-default  btn-block">Pasien Baru </button></td>
                            <td><button type="button" class="btn btn-default btn-block">Reservasi </button></td>
                         
                           
                            
                                
                        </table>
                          
                    <br></br>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
                <!--div class="col-lg-3 col-md-6"-->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">
								<div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">B</div>
                                    <div>Cara Bayar</div>
                                </div>
                            </div>
                        </div></a>
                                </li>
                                <li><a href="#profile" data-toggle="tab"><div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">P</div>
                                    <div>Pasien</div>
                                </div>
                            </div>
                        </div></a>
                                </li>
                                <li><a href="#messages" data-toggle="tab"><div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">D</div>
                                    <div>Daftar</div>
                                </div>
                            </div>
                        </div></a>
                                </li>
								   <li><a href="#messages" data-toggle="tab"><div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">R</div>
                                    <div>Reservasi</div>
                                </div>
                            </div>
                        </div></a>
                                </li>
                               
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">
                                    <h4>Home Tab</h4>
                                    <p> </p><p><br><BR><div class="col-lg-6">
                                    <form role="form">
									<div align="center" class="form-group">
                                            <label>Cara Bayar</label>
                                            <select class="form-control">
                                                <option>JKN</option>
                                                <option>TUNAI</option>
                                                <option>KERINGANAN</option>
                                                <option>JAMINAN</option>
                                                <option>ASURANSI LAIN</option>
                                            </select>
                                        </div>
									</br></br>
									<button type="button" class="btn btn-default btn-circle btn-xl">ASKES WAJIB 
                            </button>
                           <button type="button" class="btn btn-success btn-circle btn-xl">ASKES
                            </button>
                            <button type="button" class="btn btn-default btn-circle btn-xl">UMUM
                            </button>
                            <button type="button" class="btn btn-success btn-circle btn-xl">JAMKESMAS
                            </button>
                            <button type="button" class="btn btn-success btn-circle btn-xl">JAMKESDA
                            </button>
                            <button type="button" class="btn btn-default btn-circle btn-xl">KAB. BOGOR
                            </button>
							 <button type="button" class="btn btn-success btn-circle btn-xl">KIS
                            </button>
                            <button type="button" class="btn btn-default btn-circle btn-xl">KJS
                            </button>
                                     
                                     
			</form></div><br><BR><BR><BR><BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <button type="submit" class="btn btn-default">LANJUTKAN</button>
                                     <button type="reset" class="btn btn-default">Reset </button></p>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h4>Profile Tab</h4>
                                    <p>
									<div class="col-lg-6">
                                    <form role="form">
									
									
									
									<div class="form-group">
                                            <label>NO RM</label>
                                            <input class="form-control" placeholder="Enter text">
                                    </div>
										
									<div class="form-group">
                                            <label>NO KARTU</label>
                                            <input class="form-control">
                                            <p class="help-block">BRIDGING BPJS</p>
                                        </div>
										<div class="form-group">
                                            <label>NIK</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>NAMA</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
										 
										  
										  <div class="form-group">
                                            <label>TANGGAL LAHIR</label>
                                            <input class="form-control datepicker" placeholder="Enter text">
                                        </div>
										 <div class="form-group">
                                            <label>USIA</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
										 <div class="form-group">
                                            <label>ALAMAT</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
										
										 <div class="form-group">
                                            <label>RT/RW/KODE POS</label>
                                            <input style="width:15%" class="form-control" placeholder="Enter text">
											<input style="width:15%" class="form-control" placeholder="Enter text">
											<input style="width:50%" class="form-control" placeholder="Enter text">
                                        </div>
										
										 <div class="form-group">
                                            <label>No Telepon</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
										 <div class="form-group">
                                            <label>No Handphone</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
										
										
                                  
									</form></div>
									</p>
									
									
									<div class="col-lg-6">
                                   
                                    <form role="form">
										<div class="form-group">
                                            <label>PROPINSI</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>KODYA/KAB</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
										<div class="form-group">
                                            <label>KECAMATAN</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>KELURAHAN</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
										<div class="form-group">
                                            <label>PEKERJAAN</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>AGAMA</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
										<div class="form-group">
                                            <label>STATUS PERKAWINAN</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>PENDIDIKAN</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
										 <div class="form-group">
                                            <label>WARGA NEGARA</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
										<div class="form-group">
                                            <label>NO IDENTITAS</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>ALAMAT KERABAT</label>
                                             <textarea class="form-control" rows="3"></textarea>
                                        </div>
									</form>
									   <button type="submit" class="btn btn-default">LANJUTKAN</button>
                                     <button type="reset" class="btn btn-default">Reset </button>
								</div>
                                </div>
								
								
								
								
                               <div class="tab-pane fade" id="messages">
                                    <h4>PENDAFTARAN</h4>
                                    <p>
									<div class="col-lg-6">
                                    <form role="form">
									
									
									
									<div class="form-group">
                                            <label>NO RM/KUNJ KE</label>
                                            <input class="form-control" placeholder="Enter text">
                                    </div>
										
									<div class="form-group">
                                            <label>TANGGAL/NO URUT</label>
                                            <input class="form-control">
                                           
                                        </div>
										<div class="form-group">
                                            <label>INSTALASI/UNIT</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>POLI/SMF</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
										 
										  
										  <div class="form-group">
                                            <label>PROSEDUR MASUK</label>
                                            <input class="form-control datepicker" placeholder="Enter text">
                                        </div>
										 <div class="form-group">
                                            <label>CARA MASUK</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
										 <div class="form-group">
                                            <label>NAMA PERUJUK</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
										 
										
                                  
									</form></div>
									</p>
									
									
									<div class="col-lg-6">
                                   
                                    <form role="form">
										<div class="form-group">
                                            <label>NO RM/ TGL AKHIR</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>NAMA PASIEN</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
										<div class="form-group">
                                            <label>TANGGAL LAHIR</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>PEMBAYARAN</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
										<div class="form-group">
                                            <label>JAMINAN</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
                                        
									</form>
									   <button type="submit" class="btn btn-default">LANJUTKAN</button>
                                     <button type="reset" class="btn btn-default">Reset </button>
								</div>
                                </div>
								
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				
			</DIV>
		</DIV>	
		

	
	
	<script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>
</html>