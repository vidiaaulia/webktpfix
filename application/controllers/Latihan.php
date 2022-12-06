<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan extends CI_Controller {

	public $template 	= 'template/';
	public $folder 		= 'modlatihan/';
	public $menu 		= 'Cara Daftar';

	public function __construct(){
		parent::__construct();

		//Autentikasi Login
		IsAdmin();
		
		//Load Model
		$this->load->model('M_latihan');
	}

	public function index(){

		$data = [
			'title' 	=> $this->menu,
			'subtitle'	=> 'Step',
			'data'		=> $this->M_latihan->get()
		];

		$this->load->view($this->template .'head', $data);
		$this->load->view($this->template .'sidebar', $data);
		$this->load->view($this->template .'header', $data);

		$this->load->view($this->folder .'view', $data);
		
		$this->load->view($this->template .'footer', $data);
	
	}

	public function edit(){
		
		$data = [
			'title'		=> $this->menu,
			'subtitle'	=> 'Edit',
			'data' 		=> 'ini datanya'
		];

		$this->load->view($this->template .'head', $data);
		$this->load->view($this->template .'sidebar', $data);
		$this->load->view($this->template .'header', $data);

		$this->load->view($this->folder .'edit', $data);
		
		$this->load->view($this->template .'footer', $data);

	}

	public function template(){
		
		$data = [
			'title'		=> 'Template',
			'subtitle'	=> 'Master Template',
			'data' 		=> ''
		];

		$this->load->view($this->template .'head', $data);
		$this->load->view($this->template .'sidebar', $data);
		$this->load->view($this->template .'header', $data);

		$this->load->view($this->folder .'template', $data);
		
		$this->load->view($this->template .'footer', $data);
	}

}

/* End of file Latihan.php */
/* Location: ./application/controllers/Latihan.php */