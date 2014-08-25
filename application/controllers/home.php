<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct()
	{
	parent::__construct();
	$this->load->helper('url');
	}

	public function index()
	{
		$data['page']="home";
		$this->load->view('header',$data);
		$this->load->view('home',$data);
		$this->load->view('footer',$data);
	}

	function se367()
	{
		$data['page']="";
		$this->load->view('se367',$data);	
	}

	function resume()
	{
		$data['page']="resume";
		$this->load->view('header',$data);
		$this->load->view('resume',$data);
		$this->load->view('footer',$data);
	}
	function projects()
	{
		$data['page']="projects";
		$this->load->view('header',$data);
		$this->load->view('projects',$data);
		$this->load->view('footer',$data);
	}
	function aeromodelling()
	{
		$data['page']="aeromodelling";
		$this->load->view('header',$data);
		$this->load->view('aeromodelling',$data);
		$this->load->view('footer',$data);
	}
}
