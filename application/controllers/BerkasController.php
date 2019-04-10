<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class BerkasController extends GLOBAL_Controller {
		
		public function __construct()
		{
			parent::__construct();
			if (!parent::hasLogin())
			{
				redirect(site_url());
			}else
			{
				$this->load->model('PendaftarModel');
			}
		}
		
		public function index()
		{
			$data['title'] = 'Berkas SIMRP';
			$data['page_title'] = '';
			$data['menu'] = '';
			parent::template('berkas/index',$data);
		}
		
		public function persyaratan()
		{
			$data['title'] = 'Persyaratan Daftar Pernikahan';
			$data['page_title'] = 'Unduh dan Isi Persyaratan Pernikahan';
			$data['menu'] = 'sidebar-icon-only';
			parent::template('berkas/syarat',$data);
		}
		
		public function berkasSaya()
		{
			$data['title'] = 'Berkas SIMRP';
			$data['page_title'] = '';
			$data['menu'] = '';
			
			$data['peserta'] = $this->userName;
			
			parent::template('berkas/berkasSaya',$data);
		}
		
		public function riwayat($username)
		{
			if ($username !== $this->userName)
			{
				show_404();
			}else{
				$data['title'] = 'Berkas SIMRP';
				$data['page_title'] = 'Riwayat dan Kelengkapan Berkas '.ucfirst($username);
				$data['menu'] = '';
				
				parent::template('berkas/riwayat',$data);
			}
		}
		
		public function unggah($pendaftar)
		{
			if (!empty($pendaftar)){
				$data['pendaftar'] = parent::model('PendaftarModel')->get_single_pendaftar($pendaftar);
				$data['title'] = 'Berkas SIMRP';
				$data['page_title'] = 'Unggah Berkas Administrasi Pernikahan '.$data['pendaftar']['pendaftar_nama'];
				$data['menu'] = '';
				
				parent::template('berkas/unggah',$data);
				
			}else{
				show_404();
			}
		}
		
		public function unggahBerkas($pendaftar)
		{
			if (!empty($pendaftar)){
				if (isset($_POST['unggah'])){
					$generate  = substr(time(),5);
					
					$config['upload_path'] = './assets/docs/berkas/';
					$config['file_name'] = 'berkas-'.$generate;
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$config['max_size'] = '2048';
					$config['max_width'] = '1024';
					$config['max_height'] = '768';
					
					$this->upload->initialize($config);
					
					if (!$this->upload->do_upload('kondisi')) {
						$error = array('error' => $this->upload->display_errors());
						echo $error['error'];
					} else {
						$data['upload_data'] = $this->upload->data();
						parent::alert('alert','insert');
						redirect('pendaftar/detail/'.$pendaftar);
					}
				}else{
				
				}
				
			}else{
				show_404();
			}
		}
		
		public function upload_multiple()
		{
			
			if (isset($_POST['unggah'])){
				$format_file = array("jpg", "png", "gif", "zip", "bmp");
				$max_file_size = 1024*100; //maksimal 100 kb
				$path = site_url('assets/docs/berkas/'); // Lokasi folder untuk menampung file
				$errorStatus = array();
				
				$files = $_FILES['myFile']['name'];
				
				
				for ($i = 0; $i < count($files); $i++){
					$fileName = $_FILES['myFile']['name'][$i];
					$fileData =  $_FILES['myFile']['tmp_name'][$i];
					$fileSize =  $_FILES['myFile']['size'][$i];
					move_uploaded_file($fileName,$path);
					if (is_uploaded_file($fileData)){
						array_push($errorStatus,'success');
					}else{
						array_push($errorStatus,'failed');
					}
				}
				
				parent::cek_array($errorStatus);
				
			}else{
				parent::cek_array($_FILES);
			}
			
		}
		
		
		public function formN1()
		{
			$data['title'] = 'Formulir Pengantar Perkawinan';
			$data['page_title'] = '';
			$data['menu'] = 'sidebar-icon-only';
			
			parent::template('berkas/n1',$data);
		}
		
	}