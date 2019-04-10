<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class JadwalController extends GLOBAL_Controller {
		
		public function __construct()
		{
			parent::__construct();
			if (parent::hasLogin())
			{
			
			}else{
				redirect(site_url());
			}
		}
		
		public function index()
		{
			$data['title'] = 'Jadwal Pendaftar';
			$data['page_title'] = 'Tetapkan Jadwal Pernikahan Pendaftar';
			$data['menu'] = '';
			
			parent::template('jadwal/index',$data);
		}
		
	}