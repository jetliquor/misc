<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guangfu extends CI_Controller {

	public function Guangfu()
	{
	    parent::__construct();
	    $this->load->helper('url');
	}
	public function index()
	{
		$this->load->helper('path');
	    $data['base'] = base_url();
	    $this->load->view('header', $data);
		$this->load->view('guangfu_page', $data);
		$this->load->view('footer', $data);
	}
}
