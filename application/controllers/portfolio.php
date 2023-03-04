<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	
public function index() {
	
	
		$this->load->view('pages/'.$_SESSION["lang"].'/header');
		$this->load->view('pages/'.$_SESSION["lang"].'/portfolio');
		$this->load->view('pages/'.$_SESSION["lang"].'/footer');
	}
}