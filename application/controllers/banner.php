<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

	
public function index() {
	
	
		$this->load->view('pages/'.$_SESSION["lang"].'/header');
		$this->load->view('pages/'.$_SESSION["lang"].'/banner');
		$this->load->view('pages/'.$_SESSION["lang"].'/footer');
	}
}