<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

	
public function index() {
	
	
		$this->load->view('pages/'.$_SESSION["lang"].'/header');
		$this->load->view('pages/'.$_SESSION["lang"].'/service');
		$this->load->view('pages/'.$_SESSION["lang"].'/footer');
	}
}