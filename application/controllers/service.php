<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {
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
	
public function index() {
	
	
		$this->load->view('pages/'.$_SESSION["lang"].'/header');
		$this->load->view('pages/'.$_SESSION["lang"].'/service');
		$this->load->view('pages/'.$_SESSION["lang"].'/footer');
	}
}