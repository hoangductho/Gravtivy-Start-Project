<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registry extends CI_Controller {

	public function index()
	{
		$this->load->view("registry-view");
	}

	public function insert()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'email' => $this->input->post('email')
			);
		
		if(preg_match("/^[a-zA-Z0-9]+$/",$username) && preg_match("/^[a-zA-Z0-9]+$/",$password) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$this->db->insert('hs', $data);
			echo "Đăng ký thành công";
		}else {
			echo "Tài khoản không hợp lệ";
		}
	}

}

/* End of file registry.php */
/* Location: ./application/modules/login/controllers/registry.php */