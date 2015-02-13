<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GHStatic extends CI_Controller {

	public function GHStatic()
	{
	    parent::__construct();
	    $this->load->helper('url');
	    $this->load->helper('path');
	}
	
	public function index()
	{
		$this->home();
	}

	public function home()
	{
		$this->load->view('static/home');
	}
	
	public function contact()
	{
		$this->load->view('static/contact');
	}

	public function solar()
	{
		$this->load->view('static/solar');
	}

	public function tesla()
	{
		$this->load->view('static/tesla');
	}
}
