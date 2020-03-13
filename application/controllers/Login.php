<?php

class Login extends CI_Controller{

	function index(){
		$this->load->view('admin/login');
	}

	// Register user
		public function register(){
			$data['title'] = 'Sign Up';

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
			$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/users', $data);
			} else {
				// Encrypt password
				$enc_password = md5($this->input->post('password'));

				$this->user_model->register($enc_password);

				// Set message
				$this->session->set_flashdata('user_registered', 'You are now registered and can log in');

				redirect('admin');
			}
		}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$user_id = $this->login_model->cek_login("admin",$where)->num_rows();
		if($user_id > 0){

			$data_session = array(
				'nama' => $username,
				'user_id' => $user_id,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("admin"));
		}else{
			$this->session->set_flashdata('login_failed', 'Login Gagal ! Silahkan Coba Kembali');
			$this->load->view('admin/login');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		$this->session->set_flashdata('Admin_loggedout', 'You are now logged out');
		redirect(base_url('admin'));
	}

}
