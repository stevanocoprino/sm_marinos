<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
        parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		if(!isset($_SESSION["lang"]))
		{
			
			$_SESSION["lang"]="ind";
			
		}

		if(!isset($_SESSION["tbl"]))
		{
			$_SESSION["tbl"]="";
		}
		
		//$data["url_encode"]=$this->load->view('page/url_encode','' , true);
    }
	
	public function index(){	
	//	$data="";
		//$this->router->fetch_class(); // class = controller
		
		$data["functionnta"]=$this->router->fetch_method();
		$index="";
		$register="";
		$galeri="";
		$aboutus="";
		$contactus="";
		
		$this->load->view('pages/'.$_SESSION["lang"].'/header');
		$this->load->view('pages/'.$_SESSION["lang"].'/homepage');
		$this->load->view('pages/'.$_SESSION["lang"].'/footer');
	}
	public function lang($id){

		if($id=="id")
		{
			$_SESSION["tbl"]="";
		}
		else{
			$_SESSION["tbl"]="_en";
		}

		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
	public function beranda(){	
	//	$data="";
		//$this->router->fetch_class(); // class = controller
		
		$data["functionnta"]=$this->router->fetch_method();
		$index="";
		$register="";
		$galeri="";
		$aboutus="";
		$contactus="";
		
		$this->load->view('pages/'.$_SESSION["lang"].'/header',$data);
		$this->load->view('pages/'.$_SESSION["lang"].'/homepage',$data);
		$this->load->view('pages/'.$_SESSION["lang"].'/footer',$data);
	}
	
	public function portfolio(){	
		$data="";
		$this->router->fetch_class(); // class = controller
		
		$data["functionnta"]=$this->router->fetch_method();
		$index="";
		$register="";
		$galeri="";
		$aboutus="";
		$contactus="";
		
		$this->load->view('pages/'.$_SESSION["lang"].'/header');
		$this->load->view('pages/'.$_SESSION["lang"].'/portfolio');
		$this->load->view('pages/'.$_SESSION["lang"].'/footer');
	}
	
	public function tentang(){	
	//	$data="";
		//$this->router->fetch_class(); // class = controller
		
		$data["functionnta"]=$this->router->fetch_method();
		$index="";
		$register="";
		$galeri="";
		$aboutus="";
		$contactus="";
		
		$this->load->view('pages/'.$_SESSION["lang"].'/header',$data);
		$this->load->view('pages/'.$_SESSION["lang"].'/tentang',$data);
		$this->load->view('pages/'.$_SESSION["lang"].'/footer',$data);
	}
	
	public function kontak(){	
	//	$data="";
		//$this->router->fetch_class(); // class = controller
		
		$data["functionnta"]=$this->router->fetch_method();
		$index="";
		$register="";
		$galeri="";
		$aboutus="";
		$contactus="";
		
		$this->load->view('pages/'.$_SESSION["lang"].'/header',$data);
		$this->load->view('pages/'.$_SESSION["lang"].'/kontak',$data);
		$this->load->view('pages/'.$_SESSION["lang"].'/footer',$data);
	}
	
	
	
	public function change_lang(){
			$lang=$_POST["lang"];
			$_SESSION["lang"]=$lang;
		
	}
	
	
}
