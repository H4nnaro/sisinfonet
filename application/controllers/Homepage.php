<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->title = 'KMKI JAPAN';
	}

	public function index()
	{
		$data['title'] = $this->title;
		$data['sub_title'] = 'Homepage';
		$this->load->view('homepage/index', $data);
	}

	public function about()
	{
		$data['title'] = $this->title;
		$data['sub_title'] = 'About';
		$this->load->view('homepage/about', $data);
	}
}
