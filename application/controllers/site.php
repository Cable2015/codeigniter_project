<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
		$this->load->model('site_model');
	}

	public function index()
	{
		// echo "Welcome to CodeIgniter. The default Controller is Main.php";
		$data = array();

		if($query = $this->site_model->get_records())
		{
			$data['records'] =$query;
		}
		$this->load->view('home', $data);
	}
	function create()
	{
		$data = array(
			'team' =>$this->input->post('team'),
			'city' =>$this->input->post('city'),
			'conference' =>$this->input->post('conference'),
			'division' =>$this->input->post('division'),
			'website' =>$this->input->post('website')
		);
		$this->site_model->add_record($data);
		$this->index();
	}
}

//end of main controller
