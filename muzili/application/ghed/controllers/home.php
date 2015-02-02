<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function Home()
	{
	    parent::__construct();
	    $this->load->helper('url');
	}
	public function index()
	{
		$this->load->helper('path');
	    $data['base'] = base_url();
		$this->load->view('header', $data);
		$this->load->view('home_page', $data);
		$this->load->view('footer', $data);
	}
}
