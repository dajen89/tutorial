<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TemplateControl extends CI_Controller{

	public function __construct(){
		parent::__construct();
		//$this->load->model('FormModel');
		$this->load->helper('url');

	}

	public function index(){
		$this->load->view('template');
		//$data['all'] = $this->FormModel->all();		
	}

	public function loadForm(){
		$this->load->view('form_advanced');
	}

	public function Tambah(){
		$this->load->view('form');
	}
}