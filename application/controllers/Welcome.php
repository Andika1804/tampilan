<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('m_kepegawaian'); 
    }

	public function index()
	{
		$data["judul"] = "Hallo";
		$data["pegawai"] = $this->m_kepegawaian->getDataKepegawaian();
		// $data = array('data_kpg' => $recordkpg);
		$this->load->view('home', $data);
	}
	public function input(){
		$data["judul"] = "Hallo";
		$this->load->view('forminput', $data);
		if($this->input->post('tombolInsert')){
			$this->m_kepegawaian->insertDataKepegawaian();
			redirect('welcome');
			
		}
	}
	public function formedit($id){
		$data["judul"] = "Hallo";
		$data["pegawai"] = $this->m_kepegawaian->getDataKepegawaianById($id);
		$this->load->view('formedit', $data);
		  if($this->input->post('tombolEdit')){
		 	$this->m_kepegawaian->updateDataKepegawaian();
		 	redirect('welcome');
		}
	}

	public function delete($id){
		$this->m_kepegawaian->hapusDataKepegawaian($id);
		redirect('welcome');
	}















 }