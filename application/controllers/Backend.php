<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends MY_Controller {

	public function __construct(){
        parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->add_script('selectize/js/selectize.min.js');
        $this->add_style('selectize/css/selectize.css');
        $this->add_style('selectize/css/selectize.bootstrap3.css');
        $this->add_script('moment/js/moment.id.min.js');
		$this->check_login();
    }
	
	//START STABLE
	public function index(){	
		echo $this->uri->segment(3);
		$this->check_login();
		$data["title"]="SM MARINOS - Admin Pages";
		$data["body"]=$this->load->view('backend/beranda', $data, true);
		$data["leftsidebar"]=$this->load->view('backend/leftsidebar', $data, true);
		$this->load->view('backend/page_template',$data);
	}
	
	
	public function login(){	
		
		$data["title"]="SM MARINOS - Admin Page";
		$data["body"]=$this->load->view('backend/beranda', $data, true);
		$data["leftsidebar"]=$this->load->view('backend/leftsidebar', $data, true);
		$this->load->view('backend/login',$data);
	}
	
	public function check_login(){
		$thisFunction=$this->uri->segment(2);
		$thisController=$this->uri->segment(1);
		if($thisFunction!="login" && $thisFunction!="proses_login")
		{
		if($this->session->userdata('logged_in'))
		{
			$level_id=$this->session->userdata('level_id');
			if($level_id=="99")
			{
				
			}
			elseif($level_id=="1")
			{
				redirect("Home/index");
			}
			else{
				if($thisFunction!="index" && $thisFunction!="logout" && $thisFunction!="proses_login" && $thisFunction!="login")
				{
				$checkPrivilege=$this->db->query("SELECT * FROM privilege WHERE level_id='".$level_id."' AND (controller_name='ALL' OR (controller_name='".$thisController."' AND function_name='ALL') OR (controller_name='".$thisController."' AND function_name LIKE '%".$thisFunction."%'))");
				if($checkPrivilege->num_rows()<1)
				{
					redirect("backend/index");
				}
				}
			}
		}
		else{
			redirect("backend/login");
		}
		}
	}
	
	public function proses_login(){
		
		$post=$this->input->post();
		
		$check=$this->db->query("SELECT * FROM login a INNER JOIN levels b ON b.level_id=a.level WHERE a.username='".$post["username"]."' AND a.userpass='".md5($post["password"])."' AND a.aktif='1' LIMIT 1")->row_array();
		
		$html["code"]="201";
		$html["message"]="Username atau Password salah!";
		if(isset($check["username"]) && $check["username"]!="")
		{
			$newdata = array(
                   'userid'  => $check["userid"],
                   'username'  => $check["username"],
                   'nama'  => $check["nama"],
                   'email'     => $check["email"],
                   'level_id'     => $check["level"],
                   'level_name'     => $check["level_name"],
                   'logged_in' => TRUE
            );

			$this->session->set_userdata($newdata);
			$html["code"]="200";
			$html["message"]="OK";
			
		}
		echo json_encode($html);
		// redirect("backend/index");
		
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect("backend/login");
	}
	
	
	//TABEL about
	
	public function tambah_about($pesan=""){
		$data=array();
		$data["title"]="Coprinos - Admin Page";
		if($pesan=="sukses")
		{
			$data["data"]["pesan"]='<span class="label label-success">Berhasil Menambahkan</span>';
		}
		else if($pesan=="gagal"){
			$data["data"]["pesan"]='<span class="label label-danger">Gagal Menambahkan</span>';
		}
		
		//$i=0;
	
		
		$data["body"]=$this->load->view('backend/about/tambah', $data, true);
		$data["footer"]=$this->load->view('backend/about/script', $data, true);
		$data["leftsidebar"]=$this->load->view('backend/leftsidebar', $data, true);
		$this->load->view('backend/page_template',$data);
	}
	
	public function proses_tambah_about(){	
		$about=$this->input->post("about");
		
		#upload foto
		if(isset($_FILES['main_pic']['name']) && $_FILES['main_pic']['name']!="")
		{
		$image_code=date("Ymdhis").rand(1000,9999);
		$_FILES['userFile']['name'] = $image_code."-".$_FILES['main_pic']['name'];
		$_FILES['userFile']['type'] = $_FILES['main_pic']['type'];
		$_FILES['userFile']['tmp_name'] = $_FILES['main_pic']['tmp_name'];
		$_FILES['userFile']['error'] = $_FILES['main_pic']['error'];
		$_FILES['userFile']['size'] = $_FILES['main_pic']['size'];
		
		
		
		$uploadPath = FCPATH.'assets/img_about/';
		$config['upload_path'] = $uploadPath;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if($this->upload->do_upload('userFile')){
			$fileData = $this->upload->data();
			$about["gambar"] = $fileData['file_name'];
			//$uploadData['created'] = date("Y-m-d H:i:s");
			//$uploadData['modified'] = date("Y-m-d H:i:s");
		}
		else{
			// bikin alert trus redirect balik //
			
		redirect("backend/tambah_about/gagal");
			return false;
		}
		
		}
		
		#upload selesai
		
		$this->db->insert("about",$about);
		$id_cart=$this->db->insert_id();
		redirect("backend/list_about/sukses");

	}
	
	public function list_about(){	
		$data["title"]="Coprinos - Admin Page";
		$data["body"]=$this->load->view('backend/about/list', $data, true);
		$data["footer"]=$this->load->view('backend/about/script_list', $data, true);
		$data["leftsidebar"]=$this->load->view('backend/leftsidebar', $data, true);
		$this->load->view('backend/page_template',$data);
	}
	
	public function hapus_about($id=''){
		$this->db->query("DELETE FROM about WHERE about_id='".$id."'");
		redirect("backend/list_about/sukses");
	}
	
	public function edit_about($about_id="",$pesan=""){	
		$data["title"]="Coprinos - Admin Page";
		$data["about"]=$this->db->query("SELECT * FROM about WHERE about_id = '".$about_id."'")->row_array();

		if($pesan=="sukses")
		{
			$data["data"]["pesan"]='<span class="label label-success">Berhasil</span>';
		}
		elseif($pesan=="gagal"){
			$data["data"]["pesan"]='<span class="label label-danger">Gagal</span>';
		}
		
		
		$data["body"]=$this->load->view('backend/about/edit', $data, true);
		$data["footer"]=$this->load->view('backend/about/script', $data, true);
		$data["leftsidebar"]=$this->load->view('backend/leftsidebar', $data, true);
		$this->load->view('backend/page_template',$data);
	}
	
	public function proses_edit_about(){	
		$about=$this->input->post("about");
		
		#edit image
		if(isset($_FILES['main_pic']['name']) && $_FILES['main_pic']['name']!="")
		{
		$image_code=date("Ymdhis").rand(1000,9999);
		$_FILES['userFile']['name'] = $image_code."-".$_FILES['main_pic']['name'];
		$_FILES['userFile']['type'] = $_FILES['main_pic']['type'];
		$_FILES['userFile']['tmp_name'] = $_FILES['main_pic']['tmp_name'];
		$_FILES['userFile']['error'] = $_FILES['main_pic']['error'];
		$_FILES['userFile']['size'] = $_FILES['main_pic']['size'];
		
		
		
		$uploadPath = FCPATH.'assets/img_about';
		$config['upload_path'] = $uploadPath;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if($this->upload->do_upload('userFile')){
			$fileData = $this->upload->data();
			$beranda["gambar"] = $fileData['file_name'];

		}
		else{

			
		redirect("backend/edit_about/".$_POST["about"]["about_id"]."/gagal");
			return false;
		}
		}
		#selesai edit image
		
		$this->db->where('about_id', $_POST["about"]["about_id"]);
		$this->db->update('about', $about); 
		
		redirect("backend/list_about/".$_POST["about"]["about_id"]."/sukses");
	}
	
	//SELESAI TABEL about
	
	
	//TABEL beranda
	
	public function tambah_beranda($pesan=""){
		$data=array();
		$data["title"]="SM MARINOS - Admin Page";
		if($pesan=="sukses")
		{
			$data["data"]["pesan"]='<span class="label label-success">Berhasil Menambahkan</span>';
		}
		else if($pesan=="gagal"){
			$data["data"]["pesan"]='<span class="label label-danger">Gagal Menambahkan</span>';
		}
		
		//$i=0;
	
		
		$data["body"]=$this->load->view('backend/beranda/tambah', $data, true);
		$data["footer"]=$this->load->view('backend/beranda/script', $data, true);
		$data["leftsidebar"]=$this->load->view('backend/leftsidebar', $data, true);
		$this->load->view('backend/page_template',$data);
	}

	
	public function list_beranda(){	
		$data["title"]="SM MARINOS - Admin Page";
		$data["body"]=$this->load->view('backend/beranda/list', $data, true);
		$data["footer"]=$this->load->view('backend/beranda/script_list', $data, true);
		$data["leftsidebar"]=$this->load->view('backend/leftsidebar', $data, true);
		$this->load->view('backend/page_template',$data);
	}
	
	public function hapus_beranda($id=''){
		$this->db->query("DELETE FROM beranda WHERE beranda_id='".$id."'");
		echo "Berhasil";
		
	}
	
	public function proses_tambah_beranda(){	
		$beranda=$this->input->post("beranda");
		
		//$cberanda["publish_date"]=(new DateTime($cberanda["publish_date"]))->format('Y-m-d');
		//$cberanda["publish_date"] = new DateTime($cberanda["publish_date"]);
	
		#upload foto
		if(isset($_FILES['main_pic']['name']) && $_FILES['main_pic']['name']!="")
		{
		$image_code=date("Ymdhis").rand(1000,9999);
		$_FILES['userFile']['name'] = $image_code."-".$_FILES['main_pic']['name'];
		$_FILES['userFile']['type'] = $_FILES['main_pic']['type'];
		$_FILES['userFile']['tmp_name'] = $_FILES['main_pic']['tmp_name'];
		$_FILES['userFile']['error'] = $_FILES['main_pic']['error'];
		$_FILES['userFile']['size'] = $_FILES['main_pic']['size'];
		
		
		
		$uploadPath = FCPATH.'assets/img_beranda/';
		$config['upload_path'] = $uploadPath;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if($this->upload->do_upload('userFile')){
			$fileData = $this->upload->data();
			$beranda["banner"] = $fileData['file_name'];
			//$uploadData['created'] = date("Y-m-d H:i:s");
			//$uploadData['modified'] = date("Y-m-d H:i:s");
		}
		else{
			// bikin alert trus redirect balik //
			
		redirect("backend/tambah_beranda/gagal");
			return false;
		}
		
		}
		
		#upload selesai
		
		$this->db->insert("beranda",$beranda);
		$id_cart=$this->db->insert_id();
		redirect("backend/list_beranda/sukses");
		
		
		
	}
	public function edit_beranda($beranda_id="",$pesan=""){	
		$data["title"]="SM MARINOS - Admin Page";
		$data["beranda"]=$this->db->query("SELECT * FROM beranda WHERE beranda_id= '".$beranda_id."'")->row_array();

		if($pesan=="sukses")
		{
			$data["data"]["pesan"]='<span class="label label-success">Berhasil Update</span>';
		}
		elseif($pesan=="gagal"){
			$data["data"]["pesan"]='<span class="label label-danger">Gagal Update</span>';
		}
		
		
		$data["body"]=$this->load->view('backend/beranda/edit', $data, true);
		$data["footer"]=$this->load->view('backend/beranda/script', $data, true);
		$data["leftsidebar"]=$this->load->view('backend/leftsidebar', $data, true);
		$this->load->view('backend/page_template',$data);
	}
	public function proses_edit_beranda(){	
		$beranda=$this->input->post("beranda");
		
		#edit image
		if(isset($_FILES['main_pic']['name']) && $_FILES['main_pic']['name']!="")
		{
		$image_code=date("Ymdhis").rand(1000,9999);
		$_FILES['userFile']['name'] = $image_code."-".$_FILES['main_pic']['name'];
		$_FILES['userFile']['type'] = $_FILES['main_pic']['type'];
		$_FILES['userFile']['tmp_name'] = $_FILES['main_pic']['tmp_name'];
		$_FILES['userFile']['error'] = $_FILES['main_pic']['error'];
		$_FILES['userFile']['size'] = $_FILES['main_pic']['size'];
		
		
		
		$uploadPath = FCPATH.'assets/img_beranda';
		$config['upload_path'] = $uploadPath;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if($this->upload->do_upload('userFile')){
			$fileData = $this->upload->data();
			$beranda["banner"] = $fileData['file_name'];

		}
		else{

			
		redirect("backend/edit_beranda/".$_POST["beranda"]["beranda_id"]."/gagal");
			return false;
		}
		
		
		//$cberanda["thumb_pic"]=$this->create_thumb($beranda["foto"]);
		}
		#selesai edit image
		
		$this->db->where('beranda_id', $_POST["beranda"]["beranda_id"]);
		$this->db->update('beranda', $beranda); 
		
		redirect("backend/list_beranda/".$_POST["beranda"]["beranda_id"]."/sukses");
	}
	
	//SELESAI TABEL beranda
	
	//TABEL portfolio
	
	public function tambah_portfolio($pesan=""){
		$data=array();
		$data["title"]="SM MARINOS - Admin Page";
		if($pesan=="sukses")
		{
			$data["data"]["pesan"]='<span class="label label-success">Berhasil Menambahkan</span>';
		}
		else if($pesan=="gagal"){
			$data["data"]["pesan"]='<span class="label label-danger">Gagal Menambahkan</span>';
		}
		
		//$i=0;
	
		
		$data["body"]=$this->load->view('backend/portfolio/tambah', $data, true);
		$data["footer"]=$this->load->view('backend/portfolio/script', $data, true);
		$data["leftsidebar"]=$this->load->view('backend/leftsidebar', $data, true);
		$this->load->view('backend/page_template',$data);
	}

	
	public function list_portfolio(){	
		$data["title"]="SM MARINOS - Admin Page";
		$data["body"]=$this->load->view('backend/portfolio/list', $data, true);
		$data["footer"]=$this->load->view('backend/portfolio/script_list', $data, true);
		$data["leftsidebar"]=$this->load->view('backend/leftsidebar', $data, true);
		$this->load->view('backend/page_template',$data);
	}
	
	public function hapus_portfolio($id=''){
		$this->db->query("DELETE FROM portfolio WHERE portfolio_id='".$id."'");
		redirect("backend/list_portfolio/sukses");
	}
	
	public function proses_tambah_portfolio(){	
		$portfolio=$this->input->post("portfolio");
		
		//$cportfolio["publish_date"]=(new DateTime($cportfolio["publish_date"]))->format('Y-m-d');
		//$cportfolio["publish_date"] = new DateTime($cportfolio["publish_date"]);
	
		#upload foto
		if(isset($_FILES['main_pic']['name']) && $_FILES['main_pic']['name']!="")
		{
		$image_code=date("Ymdhis").rand(1000,9999);
		$_FILES['userFile']['name'] = $image_code."-".$_FILES['main_pic']['name'];
		$_FILES['userFile']['type'] = $_FILES['main_pic']['type'];
		$_FILES['userFile']['tmp_name'] = $_FILES['main_pic']['tmp_name'];
		$_FILES['userFile']['error'] = $_FILES['main_pic']['error'];
		$_FILES['userFile']['size'] = $_FILES['main_pic']['size'];
		
		
		
		$uploadPath = FCPATH.'assets/img_portfolio/';
		$config['upload_path'] = $uploadPath;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if($this->upload->do_upload('userFile')){
			$fileData = $this->upload->data();
			$portfolio["gambar"] = $fileData['file_name'];
			//$uploadData['created'] = date("Y-m-d H:i:s");
			//$uploadData['modified'] = date("Y-m-d H:i:s");
		}
		else{
			// bikin alert trus redirect balik //
			
		redirect("backend/tambah_portfolio/gagal");
			return false;
		}
		
		}
		
		#upload selesai
		
		$this->db->insert("portfolio",$portfolio);
		$id_cart=$this->db->insert_id();
		redirect("backend/list_portfolio/sukses");
		
		
		
	}
	public function edit_portfolio($portfolio_id="",$pesan=""){	
		$data["title"]="SM MARINOS - Admin Page";
		$data["portfolio"]=$this->db->query("SELECT * FROM portfolio WHERE portfolio_id= '".$portfolio_id."'")->row_array();

		if($pesan=="sukses")
		{
			$data["data"]["pesan"]='<span class="label label-success">Berhasil Update</span>';
		}
		elseif($pesan=="gagal"){
			$data["data"]["pesan"]='<span class="label label-danger">Gagal Update</span>';
		}
		
		
		$data["body"]=$this->load->view('backend/portfolio/edit', $data, true);
		$data["footer"]=$this->load->view('backend/portfolio/script', $data, true);
		$data["leftsidebar"]=$this->load->view('backend/leftsidebar', $data, true);
		$this->load->view('backend/page_template',$data);
	}
	public function proses_edit_portfolio(){	
		$portfolio=$this->input->post("portfolio");
		
		#edit image
		if(isset($_FILES['main_pic']['name']) && $_FILES['main_pic']['name']!="")
		{
		$image_code=date("Ymdhis").rand(1000,9999);
		$_FILES['userFile']['name'] = $image_code."-".$_FILES['main_pic']['name'];
		$_FILES['userFile']['type'] = $_FILES['main_pic']['type'];
		$_FILES['userFile']['tmp_name'] = $_FILES['main_pic']['tmp_name'];
		$_FILES['userFile']['error'] = $_FILES['main_pic']['error'];
		$_FILES['userFile']['size'] = $_FILES['main_pic']['size'];
		
		
		
		$uploadPath = FCPATH.'assets/img_portfolio';
		$config['upload_path'] = $uploadPath;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if($this->upload->do_upload('userFile')){
			$fileData = $this->upload->data();
			$portfolio["gambar"] = $fileData['file_name'];

		}
		else{

			
		redirect("backend/edit_portfolio/".$_POST["portfolio"]["portfolio_id"]."/gagal");
			return false;
		}
		
		
		//$cportfolio["thumb_pic"]=$this->create_thumb($portfolio["foto"]);
		}
		#selesai edit image
		
		$this->db->where('portfolio_id', $_POST["portfolio"]["portfolio_id"]);
		$this->db->update('portfolio', $portfolio); 
		
		redirect("backend/list_portfolio/".$_POST["portfolio"]["portfolio_id"]."/sukses");
	}
	
	//SELESAI TABEL portfolio
	
	//TABEL service
	
	public function tambah_service($pesan=""){
		$data=array();
		$data["title"]="SM MARINOS - Admin Page";
		if($pesan=="sukses")
		{
			$data["data"]["pesan"]='<span class="label label-success">Berhasil Menambahkan</span>';
		}
		else if($pesan=="gagal"){
			$data["data"]["pesan"]='<span class="label label-danger">Gagal Menambahkan</span>';
		}
		
		//$i=0;
	
		
		$data["body"]=$this->load->view('backend/service/tambah', $data, true);
		$data["footer"]=$this->load->view('backend/service/script', $data, true);
		$data["leftsidebar"]=$this->load->view('backend/leftsidebar', $data, true);
		$this->load->view('backend/page_template',$data);
	}

	
	public function list_service(){	
		$data["title"]="SM MARINOS - Admin Page";
		$data["body"]=$this->load->view('backend/service/list', $data, true);
		$data["footer"]=$this->load->view('backend/service/script_list', $data, true);
		$data["leftsidebar"]=$this->load->view('backend/leftsidebar', $data, true);
		$this->load->view('backend/page_template',$data);
	}
	
	public function hapus_service($id=''){
		$this->db->query("DELETE FROM service WHERE service_id='".$id."'");
		redirect("backend/list_service/sukses");
	}
	
	public function proses_tambah_service(){	
		$service=$this->input->post("service");
		
		//$cservice["publish_date"]=(new DateTime($cservice["publish_date"]))->format('Y-m-d');
		//$cservice["publish_date"] = new DateTime($cservice["publish_date"]);
	
		#upload foto
		if(isset($_FILES['main_pic']['name']) && $_FILES['main_pic']['name']!="")
		{
		$image_code=date("Ymdhis").rand(1000,9999);
		$_FILES['userFile']['name'] = $image_code."-".$_FILES['main_pic']['name'];
		$_FILES['userFile']['type'] = $_FILES['main_pic']['type'];
		$_FILES['userFile']['tmp_name'] = $_FILES['main_pic']['tmp_name'];
		$_FILES['userFile']['error'] = $_FILES['main_pic']['error'];
		$_FILES['userFile']['size'] = $_FILES['main_pic']['size'];
		
		
		
		$uploadPath = FCPATH.'assets/img_service/';
		$config['upload_path'] = $uploadPath;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if($this->upload->do_upload('userFile')){
			$fileData = $this->upload->data();
			$service["logo"] = $fileData['file_name'];
			//$uploadData['created'] = date("Y-m-d H:i:s");
			//$uploadData['modified'] = date("Y-m-d H:i:s");
		}
		else{
			// bikin alert trus redirect balik //
			
		redirect("backend/tambah_service/gagal");
			return false;
		}
		
		}
		
		#upload selesai
		
		$this->db->insert("service",$service);
		$id_cart=$this->db->insert_id();
		redirect("backend/list_service/sukses");
		
		
		
	}
	public function edit_service($service_id="",$pesan=""){	
		$data["title"]="SM MARINOS - Admin Page";
		$data["service"]=$this->db->query("SELECT * FROM service WHERE service_id= '".$service_id."'")->row_array();

		if($pesan=="sukses")
		{
			$data["data"]["pesan"]='<span class="label label-success">Berhasil Update</span>';
		}
		elseif($pesan=="gagal"){
			$data["data"]["pesan"]='<span class="label label-danger">Gagal Update</span>';
		}
		
		
		$data["body"]=$this->load->view('backend/service/edit', $data, true);
		$data["footer"]=$this->load->view('backend/service/script', $data, true);
		$data["leftsidebar"]=$this->load->view('backend/leftsidebar', $data, true);
		$this->load->view('backend/page_template',$data);
	}
	public function proses_edit_service(){	
		$service=$this->input->post("service");
		
		#edit image
		if(isset($_FILES['main_pic']['name']) && $_FILES['main_pic']['name']!="")
		{
		$image_code=date("Ymdhis").rand(1000,9999);
		$_FILES['userFile']['name'] = $image_code."-".$_FILES['main_pic']['name'];
		$_FILES['userFile']['type'] = $_FILES['main_pic']['type'];
		$_FILES['userFile']['tmp_name'] = $_FILES['main_pic']['tmp_name'];
		$_FILES['userFile']['error'] = $_FILES['main_pic']['error'];
		$_FILES['userFile']['size'] = $_FILES['main_pic']['size'];
		
		
		
		$uploadPath = FCPATH.'assets/img_service';
		$config['upload_path'] = $uploadPath;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if($this->upload->do_upload('userFile')){
			$fileData = $this->upload->data();
			$service["logo"] = $fileData['file_name'];

		}
		else{

			
		redirect("backend/edit_service/".$_POST["service"]["service_id"]."/gagal");
			return false;
		}
		
		
		//$cservice["thumb_pic"]=$this->create_thumb($service["foto"]);
		}
		#selesai edit image
		
		$this->db->where('service_id', $_POST["service"]["service_id"]);
		$this->db->update('service', $service); 
		
		redirect("backend/list_service/".$_POST["service"]["service_id"]."/sukses");
	}
	
	//SELESAI TABEL service
	
	//TABEL team
	
	public function tambah_team($pesan=""){
		$data=array();
		$data["title"]="SM MARINOS - Admin Page";
		if($pesan=="sukses")
		{
			$data["data"]["pesan"]='<span class="label label-success">Berhasil Menambahkan</span>';
		}
		else if($pesan=="gagal"){
			$data["data"]["pesan"]='<span class="label label-danger">Gagal Menambahkan</span>';
		}
		
		//$i=0;
	
		
		$data["body"]=$this->load->view('backend/team/tambah', $data, true);
		$data["footer"]=$this->load->view('backend/team/script', $data, true);
		$data["leftsidebar"]=$this->load->view('backend/leftsidebar', $data, true);
		$this->load->view('backend/page_template',$data);
	}

	
	public function list_team(){	
		$data["title"]="SM MARINOS - Admin Page";
		$data["body"]=$this->load->view('backend/team/list', $data, true);
		$data["footer"]=$this->load->view('backend/team/script_list', $data, true);
		$data["leftsidebar"]=$this->load->view('backend/leftsidebar', $data, true);
		$this->load->view('backend/page_template',$data);
	}
	
	public function hapus_team($id=''){
		$this->db->query("DELETE FROM team WHERE team_id='".$id."'");
		redirect("backend/list_team/sukses");
	}
	
	public function proses_tambah_team(){	
		$team=$this->input->post("team");
		
		//$cteam["publish_date"]=(new DateTime($cteam["publish_date"]))->format('Y-m-d');
		//$cteam["publish_date"] = new DateTime($cteam["publish_date"]);
	
		#upload foto
		if(isset($_FILES['main_pic']['name']) && $_FILES['main_pic']['name']!="")
		{
		$image_code=date("Ymdhis").rand(1000,9999);
		$_FILES['userFile']['name'] = $image_code."-".$_FILES['main_pic']['name'];
		$_FILES['userFile']['type'] = $_FILES['main_pic']['type'];
		$_FILES['userFile']['tmp_name'] = $_FILES['main_pic']['tmp_name'];
		$_FILES['userFile']['error'] = $_FILES['main_pic']['error'];
		$_FILES['userFile']['size'] = $_FILES['main_pic']['size'];
		
		
		
		$uploadPath = FCPATH.'assets/img_team/';
		$config['upload_path'] = $uploadPath;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if($this->upload->do_upload('userFile')){
			$fileData = $this->upload->data();
			$team["foto"] = $fileData['file_name'];
			//$uploadData['created'] = date("Y-m-d H:i:s");
			//$uploadData['modified'] = date("Y-m-d H:i:s");
		}
		else{
			// bikin alert trus redirect balik //
			
		redirect("backend/tambah_team/gagal");
			return false;
		}
		
		}
		
		#upload selesai
		
		$this->db->insert("team",$team);
		$id_cart=$this->db->insert_id();
		redirect("backend/list_team/sukses");
		
		
		
	}
	public function edit_team($team_id="",$pesan=""){	
		$data["title"]="SM MARINOS - Admin Page";
		$data["team"]=$this->db->query("SELECT * FROM team WHERE team_id= '".$team_id."'")->row_array();

		if($pesan=="sukses")
		{
			$data["data"]["pesan"]='<span class="label label-success">Berhasil Update</span>';
		}
		elseif($pesan=="gagal"){
			$data["data"]["pesan"]='<span class="label label-danger">Gagal Update</span>';
		}
		
		
		$data["body"]=$this->load->view('backend/team/edit', $data, true);
		$data["footer"]=$this->load->view('backend/team/script', $data, true);
		$data["leftsidebar"]=$this->load->view('backend/leftsidebar', $data, true);
		$this->load->view('backend/page_template',$data);
	}
	public function proses_edit_team(){	
		$team=$this->input->post("team");
		
		#edit image
		if(isset($_FILES['main_pic']['name']) && $_FILES['main_pic']['name']!="")
		{
		$image_code=date("Ymdhis").rand(1000,9999);
		$_FILES['userFile']['name'] = $image_code."-".$_FILES['main_pic']['name'];
		$_FILES['userFile']['type'] = $_FILES['main_pic']['type'];
		$_FILES['userFile']['tmp_name'] = $_FILES['main_pic']['tmp_name'];
		$_FILES['userFile']['error'] = $_FILES['main_pic']['error'];
		$_FILES['userFile']['size'] = $_FILES['main_pic']['size'];
		
		
		
		$uploadPath = FCPATH.'assets/img_team';
		$config['upload_path'] = $uploadPath;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if($this->upload->do_upload('userFile')){
			$fileData = $this->upload->data();
			$team["foto"] = $fileData['file_name'];

		}
		else{

			
		redirect("backend/edit_team/".$_POST["team"]["team_id"]."/gagal");
			return false;
		}
		
		
		//$cteam["thumb_pic"]=$this->create_thumb($team["foto"]);
		}
		#selesai edit image
		
		$this->db->where('team_id', $_POST["team"]["team_id"]);
		$this->db->update('team', $team); 
		
		redirect("backend/list_team/".$_POST["team"]["team_id"]."/sukses");
	}
	
	//SELESAI TABEL team
	
	public function check_phpinfo(){
		phpinfo();
	}
	
	
	
	
	
	
}
