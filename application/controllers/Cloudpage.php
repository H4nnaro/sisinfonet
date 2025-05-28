<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cloudpage extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->title = 'KMKI JAPAN';

		if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
	}

	public function index()
	{
		$data['title'] = $this->title;
		$data['sub_title'] = 'Homepage';
		$this->load->view('cloudpage/index', $data);
	}

	public function about()
	{
		$data['title'] = $this->title;
		$data['sub_title'] = 'About';
		$this->load->view('homepage/about', $data);
	}

	public function admin() {
        if ($this->session->userdata('role') != 'admin') {
            redirect('auth/login');
        }

        $this->load->view('admin_dashboard');
    }
}
