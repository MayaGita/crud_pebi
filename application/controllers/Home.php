<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		
	}

	public function index()
	{
			$this->load->view('user/index');
			
	}
public function addmenu()
	{
		
		//ini contoh input Full Name
		$this->form_validation->set_rules('nama_makanan', 'Nama_makanan', 'required|trim' );
		//ini contoh input Email
		$this->form_validation->set_rules('harga_makanan', 'required|trim' );
		//ini contoh input Password
		$this->form_validation->set_rules('image', 'image', 'required|trim' );
		//ini contoh input Repeat Password
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required|trim' );

		if($this->form_validation->run() == false){		
			$this->load->view('user');		
		}else{
			$data = [
				'nama_makanan' => htmlspecialchars($this->input->post('nama_makanan',TRUE)),
				'harga_makanan' => htmlspecialchars($this->input->post('harga_makanan',TRUE)),
				'image' => htmlspecialchars($this->input->post('image',TRUE)),
				'keterangan' => htmlspecialchars($this->input->post('keterangan',TRUE)),

			];

			$this->db->insert('makanan',$data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Congratulation! Your account has been created!');
			redirect('user');
		}
    }
}
    ?>