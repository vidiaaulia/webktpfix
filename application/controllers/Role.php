<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller {

	public $template 	= 'template/';
	public $folder 		= 'modbuku/';
	public $menu 		= 'Daftar Ktp';

	public function __construct(){
		parent::__construct();

		//Autentikasi Login
		IsAdmin();
		
		//Load Model
		$this->load->model('M_buku');
		$this->load->model('M_kategori');
	}

	public function index(){

		$data = [
			'title' 	=> $this->menu,
			'subtitle'	=> 'Lihat',
			'data'		=> $this->M_buku->get()
		];

		$this->load->view($this->template .'head', $data);
		$this->load->view($this->template .'sidebar', $data);
		$this->load->view($this->template .'header', $data);

		$this->load->view($this->folder .'view', $data);
		
		$this->load->view($this->template .'footer', $data);
	
	}

	public function add(){
		
		$data = [
			'title'		=> $this->menu,
			'subtitle'	=> 'Isi Data Pribadi',
			'kategori'	=> $this->M_kategori->get()
		];

		$this->load->view($this->template .'head', $data);
		$this->load->view($this->template .'sidebar', $data);
		$this->load->view($this->template .'header', $data);

		$this->load->view($this->folder .'add', $data);
		
		$this->load->view($this->template .'footer', $data);

	}

	public function save(){
		$config['upload_path'] 	= './assets/buku/';
		$config['allowed_types']= 'jpg|png'; // type yg diiznkan jpg & png
		$config['max_size']  	= '512'; // maxsize 512kb
		$config['file_name']	= 'buku-'.date("Ymd-His"); //rename img yg diupload
		
		$this->load->library('upload', $config);
		
		//Pengecekan ke-3
		if ( ! $this->upload->do_upload('image')){
			//Jika gambar gagal diupload

			$error = array('error' => $this->upload->display_errors());

			$this->error($error['error']);

			redirect($this->uri->segment(1).'/add','refresh');
		}
		else{
			//Jika gambar berhasil diupload, maka lanjut pross simpan data	
			$upload_data = $this->upload->data();

			$data = [
					'NIK'				=> $_POST['nik'],
					'Nama'				=> $_POST['nama'],
					'Tempat/Tgl Lahir'	=> $_POST['tempat_tanggal_lahir'],
					'Jenis Kelamin'		=> $_POST['jenis_kelamin'],
					'Golongan Darah'	=> $_POST['goldar'],
					'RT/RW'				=> $_POST['rt_rw'],
					'Kel/Desa'			=> $_POST['kel_desa'],
					'Kecamatan'			=> $_POST['kecamatan'],
					'Agama'				=> $_POST['agama'],
					'Status Perkawinan'	=> $_POST['status_perkawinan'],
					'Pekerjaan'			=> $_POST['pekerjaan'],
					'Kewarganegaraan'	=> $_POST['kewarganegaraan'],
					'Berlaku Hingga'	=> $_POST['berlaku_hingga'],
					'Scan KK'			=> $upload_data['orig_name'],
					'Scan Surat Izin RT/RW'	=> $upload_data['orig_name'],
				];

			$this->M_buku->save($data); 	

			//Informasi setelah data tersimpan
			$this->error("Data Berhasil Disimpan","success");

			redirect($this->uri->segment(1),'refresh');
		}
	}

	public function delete(){

		//Menghapus data & file gambar

		define('PUBPATH',str_replace(SELF,'',FCPATH));
		
		$id 	= $this->uri->segment(3);
		$data 	= $this->M_buku->edit($id);

		$path = PUBPATH .'assets/buku/'.$data['image'];
		unlink($path);

		$this->M_buku->delete($id);

		//Informasi setelah data dihapus
		$this->error("Data Berhasil Dihapus","danger");

		redirect($this->menu, 'refresh');
	}

	public function edit(){

		$id = $this->uri->segment(3);
		
		$data = [
			'title'		=> $this->menu,
			'subtitle'	=> 'Edit',
			'data' 		=> $this->M_buku->edit($id),
			'kategori'	=> $this->M_kategori->get()
		];

		$this->load->view($this->template .'head', $data);
		$this->load->view($this->template .'sidebar', $data);
		$this->load->view($this->template .'header', $data);

		$this->load->view($this->folder .'edit', $data);
		
		$this->load->view($this->template .'footer', $data);

	}

	public function update(){

		$id = $this->uri->segment(3);

		if ($_FILES['image']['name'] == '') {
			
			$data = [
					'NIK'				=> $_POST['nik'],
					'Nama'				=> $_POST['nama'],
					'Tempat/Tgl Lahir'	=> $_POST['tempat_tanggal_lahir'],
					'Jenis Kelamin'		=> $_POST['id_jeniskelamin'],
					'Golongan Darah'	=> $_POST['goldar'],
					'RT/RW'				=> $_POST['rt_rw'],
					'Kel/Desa'			=> $_POST['kel_desa'],
					'Kecamatan'			=> $_POST['kecamatan'],
					'Agama'				=> $_POST['agama'],
					'Status Perkawinan'	=> $_POST['status_perkawinan'],
					'Pekerjaan'			=> $_POST['pekerjaan'],
					'Kewarganegaraan'	=> $_POST['kewarganegaraan'],
					'Berlaku Hingga'	=> $_POST['berlaku_hingga'],
					'Scan KK'			=> $upload_data['orig_name'],
					'Scan Surat Izin RT/RW'	=> $upload_data['orig_name'],
				];

			$this->M_buku->update($id, $data);

			//Informasi setelah data dihapus
			$this->error("Data Berhasil Diupdate","success");

			redirect($this->menu, 'refresh');
		}else{						
			//File image buku dihapus terlebih dahulu			
			define('PUBPATH',str_replace(SELF,'',FCPATH));
			$data 	= $this->M_buku->edit($id);
			$path 	= PUBPATH .'assets/buku/'.$data['image'];
			if (file_exists($path)) {
				unlink($path);
			}

			$config['upload_path'] 	= './assets/buku/';
			$config['allowed_types']= 'jpg|png'; // type yg diiznkan jpg & png
			$config['max_size']  	= '512'; // maxsize 512kb
			$config['file_name']	= 'buku-'.date("Ymd-His"); //rename img yg diupload
			
			$this->load->library('upload', $config);
			
			//Pengecekan ke-3
			if ( ! $this->upload->do_upload('image')){
				//Jika gambar gagal diupload

				$error = array('error' => $this->upload->display_errors());

				$this->error($error['error']);

				redirect($this->uri->segment(1).'/add','refresh');
			}else{				

				//Jika gambar berhasil diupload, maka lanjut pross simpan data	
				$upload_data = $this->upload->data();				

				$data = [
					'NIK'				=> $_POST['nik'],
					'Nama'				=> $_POST['nama'],
					'Tempat/Tgl Lahir'	=> $_POST['tempat_tanggal_lahir'],
					'Jenis Kelamin'		=> $_POST['id_jeniskelamin'],
					'Golongan Darah'	=> $_POST['goldar'],
					'RT/RW'				=> $_POST['rt_rw'],
					'Kel/Desa'			=> $_POST['kel_desa'],
					'Kecamatan'			=> $_POST['kecamatan'],
					'Agama'				=> $_POST['agama'],
					'Status Perkawinan'	=> $_POST['status_perkawinan'],
					'Pekerjaan'			=> $_POST['pekerjaan'],
					'Kewarganegaraan'	=> $_POST['kewarganegaraan'],
					'Berlaku Hingga'	=> $_POST['berlaku_hingga'],
					'Scan KK'			=> $upload_data['orig_name'],
					'Scan Surat Izin RT/RW'	=> $upload_data['orig_name'],
					];

				$this->M_buku->update($id, $data);

				//Informasi setelah data dihapus
				$this->error("Data Berhasil Diupdate","success");

				redirect($this->uri->segment(1),'refresh');
			}
		}
	}

	public function detail(){

		$id = $this->uri->segment(3);
		
		$data = [
			'title'		=> $this->menu,
			'subtitle'	=> 'Detail',
			'data' 		=> $this->M_buku->edit($id)
		];

		$this->load->view($this->template .'head', $data);
		$this->load->view($this->template .'sidebar', $data);
		$this->load->view($this->template .'header', $data);

		$this->load->view($this->folder .'detail', $data);
		
		$this->load->view($this->template .'footer', $data);

	}

	public function error($message, $alert){
		
		#alert = success / danger

		$error = "
				<div class='col-lg-12 alert alert-$alert' >		
						$message							
				</div>
			";

		return $this->session->set_flashdata('message', $error);
	}
}

/* End of file Buku.php */
/* Location: ./application/controllers/Buku.php */