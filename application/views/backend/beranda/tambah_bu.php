                <div class="row">
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

                        			<h4 class="header-title m-t-0 m-b-30">Tambah Menu Utama</h4>
<form role="form" id="step2form" method="POST">
            <!--div class="col-lg-3 col-md-6"-->
           <p>
								<div class="row ">
									<div class="col-lg-12 " >
									<div class="panel panel-primary " >
                                
									<div class="panel-body" >
                                    <div class="col-lg-6">
								<fieldset>
									
									
										<div class="form-group">
                                            <div class="col-lg-3">
                                            <label>NO RM</label>
                                            </div>
                                                <div class="col-lg-9">
                                              
											
											  <div class="input-group">
											  <input  class="form-control" placeholder="NO RM" name="norm"  id="norm">
                                              <span class="input-group-btn">
                                                <button class="btn btn-default" data-toggle="modal" data-target="#modalCariPasien" type="button"><i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                              
											  </div>
                                                </div>
                                        </div>
										
										
<br><br>
                                        <div class="form-group nontunaiform"><div class="col-lg-3">
                                            <label>NO KARTU</label></div><div class="col-lg-9">
											<!-- kalo tunai otomstis hiden-->
                                            <div class="input-group mt-10">
											<input name="tdft_pasien_detail[no_peserta]" class="form-control nokartu " id="nokartu">
											<span class="input-group-btn">
											<button type="button" class="btn btn-pink pasien_rm ">BPJS</button>
                                            </span>
											</div>
											<p class="help-block">BRIDGING BPJS</p> 
											
											
                                        </div></div>
                                        <br class="nontunaiform"><br class="nontunaiform">
                                        <div class="form-group"><div class="col-lg-3">
                                            <label>NIK</label></div><div class="col-lg-9">
                                            <input class="form-control nik 2" name="tdft_pasien_detail[nik]" id="nik" placeholder="NIK">
                                        </div></div><br><br><br>
                                        <div class="form-group"><div class="col-lg-3">
                                            <label>NAMA</label></div><div class="col-lg-9">
                                            <input class="form-control nama 2 pasienlama" name="tdft_pasien_detail[nama]" placeholder="NAMA" id="nama_pasien">
                                        </div></div><br><br>
                                        <div class="form-group nontunaiform"><div class="col-lg-3">
                                            <label>RUJUKAN</label></div><div class="col-lg-9">
                                            <input class="form-control rujukan " name="" placeholder="RUJUKAN">
                                        </div></div><br><br>
									
										
                                        <div class="form-group nontunaiform"><div class="col-lg-3">
                                            <label>KELAS</label></div><div class="col-lg-9">
                                            <input class="form-control kelas " placeholder="KELAS">
                                        </div></div>
									
                                        <br class="nontunaiform"><br class="nontunaiform">
                                        <div class="form-group"><div class="col-lg-3">
                                            <label >TANGGAL LAHIR</label></div><div class="col-lg-9">
                                            <input class="form-control datepicker tglLahir pasienlama" name="tdft_pasien_detail[tgllahir]" placeholder="TANGGAL LAHIR" id="tgl_lahir">
											<input type="hidden" class="tanggal_sekarang" value="<?php echo date("d")?>">
											<input type="hidden" class="bulan_sekarang" value="<?php echo date("m")?>">
											<input type="hidden" class="tahun_sekarang" value="<?php echo date("Y")?>">
                                        </div></div><br><br>
										 <div class="form-group"><div class="col-lg-3">
                                            <label>TEMPAT LAHIR</label></div><div class="col-lg-9">
                                            <input class="form-control tempat_lahir  pasienlama" name="tdft_pasien_detail[tempat_lahir]" placeholder="Tempat lahir" id="tempat_lahir">
                                        </div></div><br><br>
                                        <div class="form-group"><div class="col-lg-3">
                                            <label>USIA</label></div><div class="col-lg-9">
                                            <input class="form-control usia umur " name="usia" placeholder="USIA">
                                        </div></div><br><br>
                                        <div class="form-group"><div class="col-lg-3">
                                            <label>KELAMIN</label></div><div class="col-lg-9">
                                            <!--<input class="form-control kelamin  pasienlama" name="tdft_pasien_detail[kelamin]" id='kelamin' placeholder="L/P">type="number"-->
                                            <select class='form-control kelamin pasienlama' id='kelamin' name="tdft_pasien_detail[kelamin]">
											<option value="">Pilih Jenis Kelamin</option>
											<option value="P">Perempuan</option>
											<option value="L">Laki-laki</option>
											</select>
                                        </div></div><br><br>
                                          <div class="form-group"><div class="col-lg-3">
                                            <label>GOL DARAH</label></div><div class="col-lg-9">
                                            
											<select class='form-control goldarah pasienlama' id='gol_darah' name="tdft_pasien_detail[gol_darah]">
											<option value="">Pilih Golongan Darah</option>
											<option value="0">-</option>
											<option value="1">A</option>
											<option value="3">B</option>
											<option value="2">AB</option>
											<option value="4">O</option>
											
											</select>
                                        </div></div><br><br>
                                        <div class="form-group"><div class="col-lg-3">
                                            <label>ALAMAT</label></div><div class="col-lg-9">
                                            <textarea class="form-control alamat pasienlama" name="tdft_pasien_detail[alamat]" id="alamat" rows="3"></textarea>
                                        </div></div><br><br>
											<br><br>
                                        <div class="form-group"><div class="col-lg-3">
                                            <label >RT/RW/KODE POS</label></div><div class="col-lg-3">
                                            <input  class="form-control" placeholder="RT" id="rt" name="tdft_pasien_detail[rt]"></div><div class="col-lg-3">
                                            <input  class="form-control" placeholder="RW"  id="rw" name="tdft_pasien_detail[rw]"></div><div class="col-lg-3 ">
                                            <input  class="form-control" placeholder="KODE POS"  id="kodepos" name="tdft_pasien_detail[kd_pos]"></div>
                                        </div><br><br>

                                        <div class="form-group">  <div class="col-lg-3">
                                            <label>NO TELEPON</label></div>  <div class="col-lg-9">
                                            <input  class="form-control notelp"  name="tdft_pasien_detail[no_tlpn]"  id="no_tlpn" placeholder="NO TELEPON">
                                        </div></div><br><br>
                                        <div class="form-group"><div class="col-lg-3">
                                            <label>NO HANDPHONE</label></div><div class="col-lg-9">
                                            <input class="form-control nohp" name="tdft_pasien_detail[no_hp]" id="no_hp" placeholder="NO HANDPHONE">
                                        </div>
</div>


                                    </div>
                                    </p>


                                    <div class="col-lg-6">
										<div class="form-group"><div class="col-lg-3">
                                            <label>KELURAHAN</label></div><div class="col-lg-9">
                                            <span class="field">
                                              <input type="text" name="kelurahan" class="form-control nmkelurahan" autocomplete="off">
                                              <input type="hidden" name="tdft_pasien_detail[kd_kelurahan]" id='kd_kelurahan'  class="form-control kdkelurahan" >
                                            </span> 
                                        </div></div><br><br>
                                         <div class="form-group"><div class="col-lg-3">
                                            <label>KECAMATAN</label></div><div class="col-lg-9">
                                            <span class="field">
                                                <input type="text" class="form-control nmkecamatan" >
                                              <input type="hidden" name="tdft_pasien_detail[kd_kecamatan]" id='kd_kecamatan' class="form-control kdkecamatan pasienlama" >
                                           
                                            </span> 
                                        </div></div><br><br>
                                        <div class="form-group"><div class="col-lg-3">
                                            <label>KODYA/KAB</label></div><div class="col-lg-9">
                                            <span class="field">
                                                <input type="text" class="form-control nmkodya" readonly="">
                                              <input type="hidden" name="tdft_pasien_detail[kd_kodya]" id='kd_kodya' class="form-control kdkodya pasienlama" >
                                           
                                            </span> 
                                        </div></div><br><br>
                                       
                                       <div class="form-group"><div class="col-lg-3">
                                            <label>PROPINSI</label></div><div class="col-lg-9">
                                            <span class="field">
                                                 <input type="text" class="form-control nmpropinsi" readonly="">
                                              <input type="hidden" name="tdft_pasien_detail[kd_propinsi]" id='kd_propinsi' class="form-control kdpropinsi pasienlama" >
                                           
                                            </span> 
                                        </div></div><br><br>
                                     
                                        <div class="form-group"><div class="col-lg-3">
                                            <label>AGAMA</label></div><div class="col-lg-9">
                                            <select class="form-control pasienlama" id='agama' name="tdft_pasien_detail[agama]">
                                                <option value="1">1. Islam</option>
                                                <option value="2">2. Katolik</option>
                                                <option value="3">3. Protestan</option>
                                                <option value="4">4. Hindu</option>
                                                <option value="5">5. Budha</option>
                                                <option value="6">6. Lain-Lain</option>
                                            </select>
                                        </div></div><br><br>


                                        <div class="form-group"><div class="col-lg-3">
                                            <label>STATUS PERKAWINAN</label></div><div class="col-lg-9">
                                            <select class="form-control pasienlama" id='kawin' name="tdft_pasien_detail[kawin]">
                                                <option value="1">1. Belum Kawin</option>
                                                <option value="2">2. Kawin</option>
                                                <option value="3">3. Duda</option>
                                                <option value="4">4. Janda</option>
                                                <option value="9">9. Lain-Lain</option>
                                            </select>
                                        </div></div><br><br>

                                        <div class="form-group"><div class="col-lg-3">
                                            <label>PENDIDIKAN</label></div><div class="col-lg-9">
                                            <select class="form-control pasienlama" id='pendidikan' name="tdft_pasien_detail[pendidikan]">
                                                <option value="1">1. Tidak Tamat / Tidak Sekolah</option>
                                                <option value="2">2. Tidak Tamat SD</option>
                                                <option value="3">3. Tamat SD</option>
                                                <option value="4">4. Tamat SLTP</option>
                                                <option value="5">5. Tamat SLTA</option>
                                                <option value="6">6. Tamat Akademi / Universitas</option>
                                                <option value="8">9. Lain-Lain</option>
                                            </select>
                                        </div></div><br><br>
                                        <div class="form-group"><div class="col-lg-3">
                                            <label>WARGA NEGARA</label></div><div class="col-lg-9">
                                           
                                          <select class="form-control pasienlama" id='kd_negara' name="tdft_pasien_detail[kd_negara]">
                                                <option value="000">Indonesia</option>
                                                <option value="001">WNA</option>
                                                
                                            </select>
                                        </div></div><br><br>
                                       <div class="form-group"><div class="col-lg-3">
                                            <label>NAMA IBU</label></div><div class="col-lg-9">
                                           
                                          <input type='text' class="klg_nama form-control" name="tdft_pasien_detail[nama_ibu]">
                                             
                                        </div></div><br><br>
                                        <div class="form-group"><div class="col-lg-3">
                                            <label>ALAMAT KERABAT</label></div><div class="col-lg-9">
                                            <textarea class="form-control" id='alamat_krbt' name="tdft_pasien_detail[alamat_krbt]"  rows="3"></textarea>
                                        </div></div><br><br>
                                    <p>
										
									</p>
									<br><br>
									<br><br>
									
 <div class="form-group"><div class="col-lg-3">
                                            <label></label></div><div class="col-lg-9">
                                         <button type="button" class="btn btn-primary gotostep3_pasienlama submit">LANJUTKAN</button>
                                        <button type="reset" class="btn btn-inverse">RESET </button>
                                        </div></div><br><br>

                                       
                                    </div>	
								</fieldset>
                                   </div></DIV></div>
								   
                               </div>
							   </form>
			  
	</div>
                        	</div>
	<!--modal cari pasien  baru no rm aja-->
</div>		  
	<!--modal cari pasien  baru no rm aja-->
<div class="modal" id="modalCariPasien" role="dialog">
    <div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Cari Pasien</h4>
			</div>
			<div class="modal-body">
				<table id="tbl_cari" width="70%">
					<tr>
						<td>No RM</td>
						<td><input class="form-control" placeholder="No RM" id="rm_cari"></td>
					</tr>
					<tr>
						<td>Nama Pasien</td>
						<td><input class="form-control" placeholder="Nama Pasien" id="nama_cari"></td>
					</tr>
					<tr>
						<td>Nama Ibu</td>
						<td><input class="form-control " placeholder="" id="nama_ibu"></td>
					</tr>
					<tr>
						<td>Kelurahan</td>
						<td><input class="form-control " placeholder="" id="kelurahan"></td>
					</tr>
					<tr>
						<td>Kecamatan</td>
						<td><input class="form-control " placeholder="" id="kecamatan"></td>
					</tr>
					<tr>
						<td>Rt/Rw</td>
						<td>
						<div class="col-sm-3"><input class="form-control " placeholder="RT" id="rt"></div>
						<div class="col-sm-3"><input class="form-control " placeholder="RW" id="rw"></div>
						</td>
					</tr>
					<!--tr>
						<td>Nama</td>
						<td><input class="form-control" placeholder="Nama" id="nama_cari" readonly="readonly"></td>
					</tr-->
					<tr>
						<td></td>
						<td><button type="button" class="btn btn-primary" id="cari_pasien">Cari</button></td>
					</tr>
				</table>
				<table class="table table-bordered datatables" id="tbl_cari_hasil">
					<thead>
						<tr>
							<th>No.</th>
							<th>Nama</th>
							<th>No. Rm</th>
							<th>Nama Ibu</th>
							<th>Kelurahan</th>
							<th>Kecamatan</th>
							<th>Rt/Rw</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td colspan="8" align="center">No Data Available</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
      </div>
    </div>
</div>
<style>
label{
	color : black !important;
}
</style>