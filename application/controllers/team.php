<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

	
public function index() {
	
	
		$this->load->view('pages/'.$_SESSION["lang"].'/header');
		$this->load->view('pages/'.$_SESSION["lang"].'/team');
		$this->load->view('pages/'.$_SESSION["lang"].'/footer');
	}
}