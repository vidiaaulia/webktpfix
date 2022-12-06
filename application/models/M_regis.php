<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{

	public function cek($nik, $tempat_tgl_lahir)
	{

		return $this->db->query("
							SELECT * FROM tb_user 
							WHERE
								nik = '$nik' AND
								tempat_lahir = '$tempat_lahir'
						");
	}

	function register($nik, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $alamat, $rt_rw, $kel_desa, $kecamatan, $agama, $status_perkawinan, $pekerjaan, $kewarganegaraan, $berlaku_hingga)
	{
		$data_user = array(
			'nik'				=> $_POST['nik'],
					'nama'				=> $_POST['nama'],
					'tempat_tanggal_lahir'		=> $_POST['tempat_tanggal_lahir'],
					'id_kategori'			=> $_POST['id_kategori'],
					'goldar'			=> $_POST['goldar'],
					'rt_rw'				=> $_POST['rt_rw'],
					'kel_desa'			=> $_POST['kel_desa'],
					'kecamatan'			=> $_POST['kecamatan'],
					'agama'				=> $_POST['agama'],
					'status_perkawinan'	=> $_POST['status_perkawinan'],
					'pekerjaan'			=> $_POST['pekerjaan'],
					'kewarganegaraan'	=> $_POST['kewarganegaraan'],
					'berlaku_hingga'	=> $_POST['berlaku_hingga'],
					'scan_kk'			=> $upload_data['orig_name'],
					'scan_surat'	=> $upload_data['orig_name'],
			// 'password'=>password_hash($password,PASSWORD_DEFAULT),
			// 'nama'=>$nama
		);
		$this->db->insert('tb_user', $data_user);
	}
}

/* End of file M_auth.php */
/* Location: ./application/models/M_auth.php */