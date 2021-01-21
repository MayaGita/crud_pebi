<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('email','Email','required|trim|valid_email');
		//ini contoh input password
		$this->form_validation->set_rules('password','Password','required|trim');
		if($this->form_validation->run() == false){
			
			$this->load->view('main/login');
			
		}else{
			//jika lolos validasi
			$this->_login();
		}
	}

	private function _login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$user = $this->db->get_where('user',['email'=>$email])->row_array();
		if($user){
			//user ditemukan
			if($user['is_active']==1){
				//cek password
				if (password_verify($password, $user['password'])){
					//jika password sama
					$data =[
						'email' => $user['email'],
						'id_role' => $user['id_role']
					];
					//simpan email dan id_role dalam session
					$this->session->set_userdata($data);
					redirect('user');
				}else{
					//jika tidak sama
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">wrong password');
			redirect('main');
			}
		}else{
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> this email has not been actived!');
			redirect('main');
		}
		}else{
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Congratulation! Your account has been created!');
			redirect('main');
		}
	}
	public function register()
	{
		
		//ini contoh input Full Name
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim' );
		//ini contoh input Email
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]' );
		//ini contoh input Password
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[repeat_password]' );
		//ini contoh input Repeat Password
		$this->form_validation->set_rules('repeat_password', 'Repeat password', 'required|trim|matches[password]' );

		if($this->form_validation->run() == false){
		
			$this->load->view('main/register');
		
		}else{
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama',TRUE)),
				'email' => htmlspecialchars($this->input->post('email',TRUE)),
				'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
				'is_active' => 1,
				'id_role' => 2
			
			];

			$this->db->insert('user',$data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Congratulation! Your account has been created!');
			redirect('main');
		}
	}

	
	public function logout(){
		//menghapus data session 
		$this->session->unset_userdata('email');
	

		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Congratulation! Your account has been created!');
			redirect('main');

	}
}
